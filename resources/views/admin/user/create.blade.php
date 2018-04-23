@extends('vendor.adminlte.layouts.app')

@section('htmlheader_title')
    {{ $page_title }}
@endsection

@section('contentheader_title')
    {{ $page_title }}
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 系统管理</a></li>
        <li class="active">用户管理</li>
        <li class="active">添加用户</li>
    </ol>
@endsection

@section('main-content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">添加用户</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ url('/admin/user/store') }}" method="post">
            <div class="box-body">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has("name") ? ' has-error' : '' }}">
                    <label for="name" class="col-sm-2 control-label">用户名</label>

                    <div class="col-sm-5">
                        <input class="form-control" id="name" name="name" placeholder="同app用户名" type="input"
                               value="{{ old('name') }}" required>
                    </div>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="form-group{{ $errors->has("os") ? ' has-error' : '' }}">
                    <label for="name" class="col-sm-2 control-label">设备类型</label>

                    <div class="col-sm-5">
                        <span style="color:#636b6f;font-size: 18px">ANDROID</span>                            
                        <input style="width: 15%;height: 20px" id="name" name="android"  type="radio"
                               value="1" >

                        <span style="color:#636b6f;font-size: 18px">IOS</span>                            
                        <input style="width: 15%;height: 20px" id="name" name="ios"  type="radio" value="0" >
                    </div>

                    <div class="col-sm-5">
                        
                    </div>
                    @if ($errors->has('os'))
                        <span class="help-block">
                            <strong>{{ $errors->first('os') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('user_type') ? ' has-error' : '' }}">
                    <label for="user_type" class="col-sm-2 control-label">用户类型</label>

                    <div class="col-sm-5">
                        <select id="user_type" name="user_type" class="form-control">
                            <option value="" style="display: none">请选择...</option>
                            <option value="1"{{ old('user_type') == 1 ? 'selected="selected"' : "" }}>管理员</option>
                            <option value="2"{{ old('user_type') == 2 ? 'selected="selected"' : "" }}>运营</option>
                        
                        </select>
                    </div>
                    @if ($errors->has('user_type'))
                        <span class="help-block">
                            <strong>{{ $errors->first('user_type') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                    <label for="status" class="col-sm-2 control-label">用户状态</label>
                    <div class="col-sm-5">
                        <select id="status" name="status" class="form-control">
                            <option value="1" selected>启用</option>
                            <option value="2">不启用</option>
                        </select>
                    </div>
                    @if ($errors->has('status'))
                        <span class="help-block">
                            <strong>{{ $errors->first('status') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('remark') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="remark">上传头像</label>

                    <div class="col-sm-5">
                        <input type="file" class="form-control" name="photo" id="title" >
                    </div>
                    <div class="col-sm-5">
                        <span style="color:#2bb744;">头像建议设置成与牌局相关图片</span>
                    </div>
                   <!--  @if ($errors->has('photo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('photo') }}</strong>
                        </span>
                    @endif -->
                </div>

                <div class="form-group{{ $errors->has('remark') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="remark">备注</label>

                    <div class="col-sm-5">
                        <textarea id="remark" class="form-control" name="remark" rows="3">{{ old('remark') }}</textarea>
                    </div>
                    @if ($errors->has('remark'))
                        <span class="help-block">
                            <strong>{{ $errors->first('remark') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="col-sm-offset-2">
                    <button type="reset" class="btn btn-default">重置</button>
                    <button type="submit" class="btn btn-info">确认</button>
                </div>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
@endsection
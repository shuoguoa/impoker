<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OA | 登录</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> -->
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css") }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/iCheck/square/blue.css") }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="javascript:void(0)">印象扑克</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">欢迎使用，请登录：</p>

        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input type="input" id="name" name="name" class="form-control" placeholder="用户名" value="{{ old('name') }}">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback">
                <input type="password" id="password" name="password" class="form-control" placeholder="密码" value="{{ old('password') }}">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback">
                 <input style="width: 15%;height: 18px" id="email" name="os"  type="radio" value="0" >
                <span style="color:#9ca1ad;font-size: 18px;margin: 4px 0 0;height: 18px;">IOS</span>

                <input style="width: 15%;height: 18px;margin-left:60px" id="text" name="os"  type="radio" value="1" >
                <span style="color:#9ca1ad;font-size: 18px;margin-right: 90px;margin: 4px 0 0;height: 18px">ANDROID</span>

                @if ($errors->has('os'))
                    <span class="help-block">
                        <strong>{{ $errors->first('os') }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <div class="col-xs-offset-4 col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("/bower_components/AdminLTE/dist/js/app.min.js") }}"></script>

</body>
</html>

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use App\Models\game;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->paginate(15);

        $config = config('session');
        Cookie::queue('_menu',
            'user',
            Carbon::now()->getTimestamp() + 60 * $config['lifetime'],
            $config['path'],
            $config['domain'],
            $config['secure'],
            false
        );
        return view('admin.user.index', [
            'users'      => $users,
            'page_title' => '用户管理',
            'user'       => \Auth::user(),
        ]);
    }

    /**
     * 新添加一个用户
     * @return $this
     */
    public function create()
    {
        $data = [
            'page_title' => '添加用户',
            'user'       => \Auth::user(),
        ];

        $config = config('session');
        Cookie::queue('_menu',
            'user',
            Carbon::now()->getTimestamp() + 60 * $config['lifetime'],
            $config['path'],
            $config['domain'],
            $config['secure'],
            false
        );

        return view('admin.user.create')->with($data);
    }

    /**
     * 新添加一个用户
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    { 
        $name = $request->file('photo'); echo 666,$name,8888;exit;
        /*获取上传的图片信息*/
        if ($request->isMethod('post')) {
            $file = $request->file('photo'); var_dump($file);exit;
            // 文件是否上传成功
            if ($file->isValid()) { echo 89898;exit;
                // 获取文件相关信息
                $originalName = $file->getClientOriginalName(); // 文件原名
                $ext = $file->getClientOriginalExtension();     // 扩展名
                $realPath = $file->getRealPath();   //临时文件的绝对路径
                $type = $file->getClientMimeType();     // image/jpeg
                // 上传文件
                $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
                // 使用我们新建的uploads本地存储空间（目录）
                $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
                var_dump($bool);
            }
        }


        $rules = [
            'name'      => 'required|unique:users',
            'user_type' => 'required',
            'status'    => 'required',
            'os'        => 'required',

        ];

        $messages = [
            'name.required'      => '请填写用户名',
            'name.unique'        => '用户名已存在',
            'user_type.required' => '请选择用户类型',
            'status.required'    => '请选择用户状态',
            'os.required'        => '请选择设备类型',
        ];

        $validator = \Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        
     
        $user            = new User();
        $user->name      = $request->get('name');
        $user->user_type = $request->get('user_type');
        $user->status    = $request->get('status');
        $user->remark    = $request->get('remark');

        if ($user->save()) {
            return redirect('/admin/user');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }
}

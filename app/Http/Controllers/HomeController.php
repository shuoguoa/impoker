<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $user = \Auth::user();
        if ($user->hasRole('yunying')) {
            // 运营
            return redirect('business');
        } elseif ($user->hasRole('root')) {
            // 超级管理员
            return redirect('admin/user');
        } elseif ($user->hasRole('admin')) {
            // 普通管理员
            return redirect('admin/user');
        } else {
            return redirect(403);
        }
    }

    /**
     * 重定向到login页面
     */
    public function login()
    {
        redirect('/login');
    }
}

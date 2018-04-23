<?php 

namespace App\Http\Controllers;
use App\User;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;


class UserController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){

        // 执行用户
        $counts = DB::table('users')->where([['status', 1], ['user_type', 3]])->get();
        $counts = $counts->toArray();
        var_dump($counts);exit;
    }
}

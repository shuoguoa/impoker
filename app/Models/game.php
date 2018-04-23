<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    /**
     *  测试连接游戏数据库
     */
    public function users()
    {
        return DB::connection('mysql_game')->select('select * from user');
    }
}

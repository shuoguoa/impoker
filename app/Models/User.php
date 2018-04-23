<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * 在数组中需要隐藏的属性
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * 获取一个执行用户管理的所有媒介
     *
     * @return mixed
     */
    public function media()
    {
        return $this->belongsToMany('App\Models\Media');
    }

    /**
     * 获取一个运营人员创建的所有的业务信息
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function business()
    {
        return $this->hasMany('App\Models\Business', 'created_by');
    }
}

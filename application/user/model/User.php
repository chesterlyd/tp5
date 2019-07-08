<?php

namespace app\user\model;

use think\Model;

class User extends Model
{
    protected $table = 'users';

    protected $field = ['name', 'email', 'password', 'avatar'];

    protected $createTime = 'created_at';
    protected $updateTime = 'updated_at';

    public function setPasswordAttr($value)
    {
        return password_hash($value, PASSWORD_DEFAULT);
    }

    public function setEmailAttr($value)
    {
        return strtolower($value);
    }
}

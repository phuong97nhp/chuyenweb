<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'cw_users';
    protected $fillable = ['id', 'user_name', 'user_account', 'user_url', 'user_img', 'user_lever', 'user_email', 'user_password', 'remember_token', 'created_at', 'updated_at', 'user_status'];  
}



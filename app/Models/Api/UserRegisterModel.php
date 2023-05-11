<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class UserRegisterModel extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'user_models';
    protected $hidden = ['device_token'];
}

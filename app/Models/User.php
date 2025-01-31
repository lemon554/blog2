<?php


namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

//管理ユーザーのテーブル
class User extends Authenticatable
{
    protected $fillable = [
    'email',
    'password',
];

protected $table = 'Users';

    use HasFactory;
}

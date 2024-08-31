<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    // إذا كنت قد أضفت الحقل fillable كما ذكرنا سابقًا
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
    ];
}

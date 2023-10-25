<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordManager extends Model
{
    use HasFactory;

    protected $fillable = [
        'Account Domain',
        'Account User',
        'Account Password',
        'Admin Panel Url',
        'Admin Panel User',
        'Admin Pannel Passwrord',
        'FTP User',
        'FTP Password',
        'DB Name',
        'DB Username',
        'DB Password',
        'Email Account',
        'Email Password',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dj extends Model
{
    use HasFactory;

    protected $table = 'dj';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'nick_name',
        'name',
        'email',
        'profile_picture',
        'logo',
        'about_me',
        'contact_number',
        'address',
        'web_site',
        'facebook',
        'instagram',
        'spotify',
        'youtube',
        'soundCloud',
        'tiktok',
        'password'
    ];
}

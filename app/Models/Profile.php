<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'phone', 'email', 'address', 'description', 'linkedin_link', 'github_link', 'instagram_link', 'facebook_link', 'youtube_link', 'tiktok_link'];
}

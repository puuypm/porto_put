<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
    use HasFactory;

    protected $fillable = ['name_awards', 'thn_penyelenggara', 'penyelenggara'];
}

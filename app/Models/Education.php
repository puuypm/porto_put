<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = ['nama_sekolah', 'jurusan', 'fakultas', 'tahunmasuk', 'tahunkeluar', 'gpa'];
}

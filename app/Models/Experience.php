<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = ['company_name', 'job_name', 'job_description', 'tgl_mulai', 'tgl_selesai'];
}

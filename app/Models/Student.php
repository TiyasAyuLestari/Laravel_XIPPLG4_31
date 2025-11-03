<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasFactory;


class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'nama_lengkap',
        'jenis_kelamin',
        'nisn',
    ];

}

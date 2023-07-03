<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'semester_no',
        'teacher_name',
        'sure_name',
        'nickname',
        'teacher_speciality',
        'teacher_line',
    ];

}

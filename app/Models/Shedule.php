<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'academic_year',
        'semester_number',
        'school_level',
        'teacher_name',
        'teacher_number',
        'teacher_surname',
        'teacher_line',
        'teacher_speciality',
        'day',
        'periods',
        'class_name',
        'sub_class_name',
        'status',
        'subjects'
    ];
}

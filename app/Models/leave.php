<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'acedmic_year',
        'semester_no',
        'teacher_name',
        'sure_name',
        'school_level',
        'days',
        'periods',
        'sub_class',
        'subject_teach',
        'book',
    ];
}

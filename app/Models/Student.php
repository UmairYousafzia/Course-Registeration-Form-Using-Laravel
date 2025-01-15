<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Student extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable  = [
      'department',
      'program',
      'shift',
      'semester',
      'full_name',
      'student_cnin',
      'father_name',
      'father_cnin',
      'gender',
      'country',
      'birth_date',
      'city',
      'mobile_number',
      'address',
      'email',
      'password',
      'ssc',
      'ssc_obtaine_marks',
      'ssc_total_marks',
      'hsc',
      'hsc_obtaine_marks',
      'hsc_total_marks',
      'ssc_board',
      'hsc_board',
      'ssc_year',
      'hsc_year',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    //
    protected $table = 'certificates';
    protected $fillable = [
        'course_id', 'student_id',
    ];
}

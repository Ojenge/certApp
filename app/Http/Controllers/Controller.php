<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Course;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        $data = isset($data)? $data:NULL;
    }

    public function course_data(){
        $model = new Course();
        $courses = $model->get_courses();

        foreach ($courses as $course){
            $course_names[]['id'] = $course->id;
            $course_names[]['course_name'] = $course->description;
        }

        return $courses;
    }
}

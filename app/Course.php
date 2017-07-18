<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    //
    public function get_courses(){
        $sql = "SELECT * FROM courses ";

        $data = DB::select($sql);

        $collection = collect($data);

        $sorted = $collection->sortBy('description');


        return $sorted;
    }
}

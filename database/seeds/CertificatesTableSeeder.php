<?php

use Illuminate\Database\Seeder;

class CertificatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('certificates')->insert([
            ['course_id'=>'1', 'student_id'=>'12343',],
            ['course_id'=>'1', 'student_id'=>'ASDSWWED',],
            ['course_id'=>'1', 'student_id'=>'KJUNWBW',],
            ['course_id'=>'2', 'student_id'=>'YHANKDD',],
            ['course_id'=>'2', 'student_id'=>'9875YH',],
            ['course_id'=>'2', 'student_id'=>'YHA12435',],
            ['course_id'=>'3', 'student_id'=>'PLAWE7623',],
            ['course_id'=>'3', 'student_id'=>'4567RTYU',],
            ['course_id'=>'3', 'student_id'=>'97452TGHJ',],
            ['course_id'=>'4', 'student_id'=>'QWE765',],
            ['course_id'=>'4', 'student_id'=>'678CVB',],
            ['course_id'=>'4', 'student_id'=>'45678TGH',],
            ['course_id'=>'4', 'student_id'=>'POI789',]
        ]);
    }
}

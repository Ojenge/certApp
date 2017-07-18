<?php

use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert([
            ['description'=>'Bachelor of Business Information Technology'],
            ['description'=>'Bachelor of Science in Informatics'],
            ['description'=>'Bachelor of Laws'],
            ['description'=>'Bachelor of Commerce'],
            ['description'=>'Bachelor of Science in Mathematics'],
            ['description'=>'Bachelor of Science in Actuarial Science']
        ]);
    }
}

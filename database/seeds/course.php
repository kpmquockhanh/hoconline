<?php

use Illuminate\Database\Seeder;

class course extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new \App\Course;

        $course->name = 'Miến phí';
        $course->description = 'Chả có mô tả gì';
        $course->created_at = date(now());
        $course->save();

    }
}

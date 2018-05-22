<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndex()
    {
        $data = [];

        $data['course'] = \DB::table('Course')->count();
        $data['user'] = \DB::table('users')->count();
        $data['teacher'] = \DB::table('teacher')->count();
//        dd($data);
        return view('admin.index', compact('data'));
    }

    public function getUser()
    {
        $data = \DB::table('users')->get();
        return view('admin.student', compact('data'));
    }
    public function getTeacher()
    {
        $data = \DB::table('teacher')->get();
        return view('admin.teacher', compact('data'));
    }
    public function getCourse()
    {
        $data = \DB::table('Course')->get();
        return view('admin.course', compact('data'));
    }
    public function removeCourse()
    {

    }
}

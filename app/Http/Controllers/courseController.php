<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Facades\Auth;



class courseController extends Controller
{
    public function adminIndex()
    {
//        return view('admin.index');
    }
    public function getTableAll()
    {
//        dd(\Auth::user()->id);
        $courses = Course::all();
        return view('courses', compact('courses'));
    }
    public function getTableByUser()
    {
//        dd(\Auth::user()->id);
        $courses = [];
        $courseIds = \DB::table('course_user')->where('id_user','=', Auth::guard('user')->user()->id)->get();
        foreach($courseIds as $id)
        {


            array_push($courses, Course::find($id->id_course));
        }

//        dd($courses);
//        dd($courseIds);
//        $courses = Course::where('id', )->user()->id)->get();
//        $courses = Course::all();
        return view('user.course.index',compact('courses'));
    }

    public function add($id){
        try
        {
            \DB::table('course_user')->insert([
                'id_user' => Auth::guard('user')->user()->id,
                'id_course' => $id
            ]);
        }
        catch(\Exception $e)
        {

            \Session::flash('alert', 'Bạn đã thêm khóa này, vui lòng xem lại');
            return redirect('/user');
        }
        return redirect('/user');
    }
    public function remove($id){
        try
        {
            \DB::table('course_user')->where('id_course','=', $id)->delete();

        }
        catch(\Exception $e)
        {
            dd($e);
            \Session::flash('alert', 'Không tồn tại khóa học này trong danh sách của bạn!');
            return redirect('/user');
        }
        return redirect('/user');
    }
}

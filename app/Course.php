<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'Course';

//    public function index()
//    {
//        $title = 'Danh sách quyền hạn';
//        $Course = Course::paginate(10);
//
//        return view('list.Course', compact('title', 'Course'));
//    }
//
//    public function create()
//    {
//        $title = 'Tạo quyền hạn mới';
//
//        return view('admin::account.Course.add', compact('title'));
//    }
//
//    public function store(Request $request)
//    {
//        $id = DB::table('name_Courses')->insertGetId([
//            'name'         => $request->name,
//            'display_name' => $request->display_name,
//            'http_method'  => $request->http_method == null ? 'ANY' : implode(",", $request->http_method),
//            'http_path'    => $request->http_path,
//        ]);
//        Course::create([
//            'name'                => $request->name,
//            'display_name'        => $request->display_name,
//            'name_Courses_id' => $id,
//        ]);
//
//        return redirect()->route('Course.index')->with('flash_message', 'Course: <b>' . $request->display_name . '</b> tạo thành công!');
//    }
//
//    public function edit($id)
//    {
//        $title = 'Sửa quyền hạn';
//        $Course = Course::find($id);
////        dd($Course);
////        $http_method = explode(',', $Course->http_method);
//
//        return view('admin::account.Course.edit', compact('title', 'Course'));
//    }
//
//    public function update(CourseRequest $request)
//    {
////        dd(date("Y-m-d H:i:s"));
////        Course::where('id', $request['id'])->update([
////            'name'         => $request->name,
////            'display_name' => $request->display_name
//////            'http_method'  => $request->http_method == null ? 'ANY' : implode(",", $request->http_method),
//////            'http_path'    => $request->http_path,
////        ]);
//        $Course = Course::where('id','=',$request['id'])->first();
////        $Course->name = $request->name;
//        $Course->display_name = $request->display_name;
//        $Course->description = $request->description;
//        $Course->updated_at = date("Y-m-d H:i:s");
//        $Course->save();
//
//
//        return redirect()->route('Course.index')->with('flash_message', 'Course: <b>' . $request->name . '</b> sửa thành công!');
//    }
//
//    public function destroy($id)
//    {
//        DB::delete('DELETE np.*, p.* FROM name_Courses AS np INNER JOIN Courses AS p ON np.id = p.name_Courses_id WHERE np.id = ' . $id);
//
//        return redirect()->route('Course.index')->with('flash_message', 'Xóa thành công!');
//    }
}

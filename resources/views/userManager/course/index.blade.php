@extends('layouts.app')

@section('title', 'Danh sách khóa học')

@section('content')
    <div class="container mt-5">
        <button class="btn btn-dark m-lg-3 fa-pull-right">Thêm</button>
        <table class="table table-hover table-striped border">
            <thead class="bg-dark text-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên </th>
                <th scope="col">Mô tả</th>
                <th scope="col">Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
            <tr>
                <th scope="row">{{$course->id}}</th>
                <td><div class="badge badge-success">{{$course->name}}</div></td>
                <td>{{$course->description}}</td>
                <td>
                    <span class="badge badge-primary text-center"><a class="text-light" href="#">Sửa</a></span>
                    <span class="badge badge-warning text-center"><a class="text-light" href="#">Xóa</a></span>
                    {{--<span class="badge badge-warning"><a href="">Del</a></span>--}}
                    {{--<span class="badge badge-warning"><a href="">Del</a></span>--}}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection

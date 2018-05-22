
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
                    <th scope="row" class="d-flex">{{$course->id}}</th>
                    <td><div class="badge badge-success p-3">{{$course->name}}</div></td>
                    <td>{{$course->description}}</td>
                    <td>
                       <a href="{{route('user.add', $course->id)}}" class="btn btn-outline-success">Thêm ngay</a>
                        {{--<span class="badge badge-primary text-center p-3"><a class="text-light" href="#">Sửa</a></span>--}}
                        {{--<span class="badge badge-warning text-center p-3"><a class="text-light" href="#">Xóa</a></span>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

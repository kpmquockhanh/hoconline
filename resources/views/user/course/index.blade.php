
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

            @if(!isset($courses[0]))
            <tr>
                <td colspan="4" class="text-center"><em>Bạn không có khóa học nào</em></td>
            </tr>
            @else
                @foreach($courses as $course)
                    <tr>
                        <th scope="row" class="p-3 mt-2">{{$course->id}}</th>
                        <td><div class="badge badge-success p-3">{{$course->name}}</div></td>
                        <td>{{$course->description}}</td>
                        <td>
                            {{--<span class="badge badge-primary text-center p-3"><a class="text-light" href="#">Sửa</a></span>--}}
                            <a href="{{route('user.remove', $course->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa nó không?')"><span class="badge badge-warning text-center p-3">Xóa</span></a>
                            {{--<span class="badge badge-warning"><a href="">Del</a></span>--}}
                            {{--<span class="badge badge-warning"><a href="">Del</a></span>--}}
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        @if(\Session::has('alert'))
            <script>
                alert('{{Session::get('alert')}}');
            </script>
        @endif
    </div>
    @endsection

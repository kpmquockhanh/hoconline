
@extends('layouts.app')

@section('title', 'Quản lí trang web')
{{--@section('style')--}}

{{--@endsection--}}

@section('content')
        <div class="row mt-2">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar mt-5">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('admin.index')}}">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.course')}}">
                                <span data-feather="file"></span>
                                Khóa học
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.user')}}">
                                <span data-feather="file"></span>
                                Học sinh
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.teacher')}}">
                                <span data-feather="file"></span>
                                Giáo viên
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-5">
                @yield('content-admin')
            </main>
        </div>
    @endsection

@extends('admin.layouts.app')
@section('content-admin')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">TỔNG QUAN</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>
    <div class="row py-5 text-center" style="font-size: 30px;">
        <div class="col">
            <div class="alert alert-primary py-5" >
                KHÓA HỌC : <b>{{$data['course']}}</b>
            </div>
        </div>
        <div class="col">
            <div class="alert alert-danger py-5">
                HỌC SINH : <b>{{$data['user']}}</b>
            </div>
        </div>
        <div class="col">
            <div class="alert alert-secondary py-5">
                GIÁO VIÊN : <b>{{$data['teacher']}}</b>
            </div>
        </div>
    </div>
    @endsection

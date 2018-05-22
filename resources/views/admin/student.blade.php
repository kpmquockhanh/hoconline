@extends('admin.layouts.app')
@section('content-admin')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">HỌC SINH</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Thêm</button>
                {{--<button class="btn btn-sm btn-outline-secondary">Export</button>--}}
            </div>
        </div>
    </div>
    <div class="table-responsive border">
        <table class="table table-striped table-sm mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên học sinh</th>
                <th>Email</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            @if(count($data))
            @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="" class="btn btn-success">Sửa</a>
                            <a href="" class="btn btn-danger">Xóa</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="3" class="text-center font-weight-bold">Không có bản ghi nào</td>
                </tr>
            @endif            </tbody>
        </table>
    </div>
    @endsection

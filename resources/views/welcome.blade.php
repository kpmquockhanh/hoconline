@extends('layouts.app')

@section('title')
    Trang chủ
@endsection
@section('content')
    <div class="" style="max-width:2000px;margin-top:46px">

        <!-- Automatic Slideshow Images -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slider_1.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- The Course Section -->
        <div class="container" id="band">
            <h2 class="mt-5 text-center">CÁC KHÓA HỌC HOT NHẤT</h2>
            <p class="text-center"><i>Các khóa học đang đượ ưu đại tại Devpro</i></p>
            <p class="text-justify">Tháng 5 – mùa của du lịch với biển xanh, cát vàng mời gọi đầy hấp dẫn nhưng cũng là mùa mà người sinh sống và làm việc ở Hà Nội lo sợ bởi không khí bắt đầu ngột ngạt và nắng nóng hơn. Bạn mong muốn tìm một nơi tránh nóng nhưng vẫn muốn được học tập ? Đừng lo DevPro Việt Nam sẽ đáp ứng mong muốn này của bạn.
                Bắt đầu từ tháng 5, các khóa học lập trình tại DevPro Việt Nam sẽ được tặng ưu đãi khủng thêm 50% thời lượng mà học phí vẫn không đổi; giá trị vì thế mà nhân đôi.</p>
            <div class="row w3-padding-32 row">

                @foreach($courses as $course)
                    <div class="card col-4  p-0">
                        <img class="card-img-top" src="{{$course->img}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Khóa: {{$course->name}} - ID: {{$course->id}}</h5>
                            <p class="card-text">{{$course->description}}</p>
                            <a href="
                            @auth('user')
                                {{route('user.add', $course->id)}}
                            @elseauth('admin')

                            @else
                                {{route('login')}}
                            @endauth
                                    " class="btn btn-outline-success fa-pull-right" >Thêm ngay</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
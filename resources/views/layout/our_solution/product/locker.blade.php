@extends('template/main')


@section('solution')             
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle  active" data-bs-toggle="dropdown">Others Product</a>
    <div class="dropdown-menu bg-light">
        <ul>
            <a href="/oil and gas" class="dropdown-item">Oil & Gas</a>
            <a href="/Industrial" class="dropdown-item">Industrial</a>
            <a href="/Telecominication" class="dropdown-item">Telecominication</a>
            <a href="/Building & Infrastucture" class="dropdown-item">Building & Infrastucture</a>
            <a href="/electrical utility" class="dropdown-item active">electrical utility</a>
            <a href="/transportation" class="dropdown-item">transportation</a>
            <a href="/Housing MRS" class="dropdown-item">Housing MRS</a>
            <a href="/Marshaling Kios" class="dropdown-item">Marshaling Kios</a>
            <a href="/Protection-Panel Fix & Swing Door" class="dropdown-item">Protection Panel Fix & Swing Door</a>
            <a href="/Wall-Mounting" class="dropdown-item">Wall Mounting</a>
            <a href="/Console desk" class="dropdown-item">Console desk</a>
        </ul>
    </div>
</div>
@endsection

    <style>
        .poto {
            margin-left: 20%;
        }
    </style>

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-white">
                electrical utility
            </h4>
        </div>
    </div>

    <div class="container-xxl py-5 mb-5">
        <div class="container px-lg-5 mt-5">
            <div class="row g-5 justify-content-center">
                <h1 class="text-dark text-center">Products</h1>
                <div class="col-md-6 mb-5">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3 poto" style="width: 60%; height: 70%;" src="template/img/product/locker/2jadii.png"" alt="">
                            <h5 class="text-primary text-center">Locker Staff </h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3 poto" style="width: 40%; height: 70%;" src="template/img/product/locker/3.1jadii.png" alt="">
                            <h5 class="text-primary text-center">Locker Staff </h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3 poto" style="width: 60%; height: 70%;" src="template/img/product/locker/4.jadii.png" alt="">
                            <h5 class="text-primary text-center">Locker Staff </h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-5">
                    <div class="">
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center py-3 px-3 " style="width: 70%; height: 60%;" src="template/img/product/photo product/photo-001 2/2.jadii.png" alt="">
                            <h5 class="text-primary text-center">Console Desk</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>

@endsection
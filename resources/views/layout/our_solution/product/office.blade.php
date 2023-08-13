@extends('template/main')

@section('solution')             
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle  active" data-bs-toggle="dropdown">Product</a>
    <div class="dropdown-menu bg-light">
        <ul>
            <a href="/oil and gas" class="dropdown-item">Oil & Gas</a>
            <a href="/Industrial" class="dropdown-item">Industrial</a>
            <a href="/Telecominication" class="dropdown-item">Telecominication</a>
            <a href="/Building & Infrastucture" class="dropdown-item">Building & Infrastucture</a>
            <a href="/electrical utility" class="dropdown-item">electrical utility</a>
            <a href="/Office & Equitmen" class="dropdown-item active">Office & Equitmen</a>
            <a href="/service & installation system" class="dropdown-item">Service & Installation System</a>
        </ul>
    </div>
</div>
@endsection

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-blue">
                Office & Equitmen
            </h4>
        </div>
    </div>
    <div class="container-xxl py-5 mb-5">
        <div class="container px-lg-5 mt-5">
            <div class="row g-5 justify-content-center">
                <h1 class="text-dark text-center">Products</h1>
                <div class="col-md-4">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 68%; height: 68%;" src="template/img/product/photo product/photo-001 2/2.jadii.png" alt="">
                            <h5 class="text-primary text-center">CONSOLE DESK </h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 68%; height: 68%;" src="template/img/c1.jpeg" alt="">
                            <h5 class="text-primary text-center">CONSOLE DESK </h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 68%; height: 68%;" src="template/img/c2.jpeg" alt="">
                            <h5 class="text-primary text-center">CONSOLE DESK </h5>
                        </div>
                    </div>
                </div>
    {{-- <div class="container-xxl py-5 mb-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-12 justify-content-center">
                        <h1 class="text-dark text-center">Products</h1>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center py-3 px-3" style="width: 130%; height: 200%; margin-bottom: 60px;" src="template/img/product/photo product/photo-001 2/2.jadii.png" alt="">
                                    <h5 class="mb-0">Console Desk</h5>
                                    <br>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-4 py-3 px-3" style="width: 70%; height: 100%;" src="template/img/product/photo product/photo-001 2/1.png" alt="">
                                    <h5 class="mb-0">Locker</h5>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center py-3 px-3" style="width: 48%; height: 100%;" src="template/img/product/photo product/photo-001 2/2.png" alt="">
                                    <h5 class="mb-0">Locker</h5>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center m-5">
            <a href="/contact" class="btn btn-primary">More detail product</a>
        </div>
    </div>

@endsection
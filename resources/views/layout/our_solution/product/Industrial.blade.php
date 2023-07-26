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
            <a href="/electrical utility" class="dropdown-item">electrical utility</a>
            <a href="/transportation" class="dropdown-item">transportation</a>
        </ul>
    </div>
</div>
@endsection

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-white">
                INDUSTRIAL
            </h4>
        </div>
    </div>

    <div class="container-xxl py-5 mb-5">
        <div class="container px-lg-5 mt-5">
            <div class="row g-5 justify-content-center">
                <h1 class="text-dark text-center">Products</h1>
                <div class="col-md-6">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/product/photo product/mk outdoor/1.jadii.png" alt="">
                            <h5 class="text-primary text-center">Marshaling kios</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/product/photo product/mk outdoor/1.jadii.png" alt="">
                            <h5 class="text-primary text-center">Marshaling kios</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/product/photo product/mk outdoor/1.jadii.png" alt="">
                            <h5 class="text-primary text-center">Marshaling kios</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center py-3 px-3" style="width: 95%; height: 95%;" src="template/img/product/outdoor cabin/1.jadii.png" alt="">
                            <h5 class="text-primary text-center">Outdoor Cabin</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center py-3 px-3" style="width: 95%; height: 95%;" src="template/img/product/outdoor cabin/2.jadii.png" alt="">
                            <h5 class="text-primary text-center">Outdoor Cabin</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
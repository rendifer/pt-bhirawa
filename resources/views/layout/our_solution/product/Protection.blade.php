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
            <a href="/Office & Equitmen" class="dropdown-item">Office & Equitmen</a>
        </ul>
    </div>
</div>
@endsection

<style>
    .poto {
        margin-left: 25%;
    }
    /* .poto1 {
        margin-left: 10%;
    } */
</style>

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-blue">
                Protection Panel Fix & Swing Door
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
                            <img class="align-self-center mb-3 py-3 px-3 " style="width: 100%; height: 80%;" src="template/img/product/panel server/2.jadii.png" alt="">
                            <h5 class="text-primary text-center">m</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3 poto1" style="width: 100%; height: 80%;" src="template/img/product/panel server/1.jadii.png"" alt="">
                            <h5 class="text-primary text-center">Locker Staff 12p</h5>
                        </div>
                        {{-- <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3 " style="width: 100%; height: 80%;" src="template/img/product/panel server/3.jadii.png" alt="">
                            <h5 class="text-primary text-center">Locker Staff 12p</h5>
                        </div> --}}
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3 poto" style="width: 60%; height: 70%;" src="template/img/product/panel server/4 jadi.png" alt="">
                            <h5 class="text-primary text-center">Locker Staff 12p</h5>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
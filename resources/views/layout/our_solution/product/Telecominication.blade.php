@extends('template/main')

@section('solution')             
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle  active" data-bs-toggle="dropdown">Product</a>
    <div class="dropdown-menu bg-light">
        <ul>
            <a href="/oil and gas" class="dropdown-item">Oil & Gas</a>
            <a href="/Industrial" class="dropdown-item">Industrial</a>
            <a href="/Telecominication" class="dropdown-item active">Telecominication</a>
            <a href="/Building & Infrastucture" class="dropdown-item">Building & Infrastucture</a>
            <a href="/electrical utility" class="dropdown-item">electrical utility</a>
            <a href="/Office & Equitmen" class="dropdown-item">Office & Equitmen</a>
        </ul>
    </div>
</div>
@endsection

<style>
    .build{
        margin-bottom: 43%;
    }
    .testimonial-item {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .inch {
        margin-bottom: 70px;
    }
</style>

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-blue">
                Telecominication
            </h4>
        </div>
    </div>

    <div class="container-xxl py-5 mb-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-12 justify-content-center">
                        <h1 class="text-dark text-center">Products</h1>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-4 py-3 px-3" style="width: 53%; height: 53%;" src="template/img/telecomunication/Picture1.png" alt="">
                                    <h5 class="mb-0">m</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="owl-carousel testimonial-carousel">
                                <div class="testimonial-item position-relative team-item">
                                    <img class="align-self-center py-3 px-3 inch" style="width: 100%; height: 100%;" src="template/img/telecomunication/Picture6.png" alt="">
                                    <h5 class="text-dark text-center">19 INCH RACK CABINET</h5>
                                </div>
                                <div class="testimonial-item position-relative team-item">
                                    <img class="align-self-center py-3 px-3 inch" style="width: 60%; height: 60%;" src="template/img/telecomunication/Picture7.png" alt="">
                                    <h5 class="text-dark text-center">19 INCH RACK CABINET</h5>
                                </div>
                                <div class="testimonial-item position-relative team-item">
                                    <img class="align-self-center py-3 px-3 inch" style="width: 100%; height: 100%;" src="template/img/telecomunication/Picture8.png" alt="">
                                    <h5 class="text-dark text-center">19 INCH RACK CABINET</h5>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-5 py-3 px-3" style="width: 75%; height: 75%;" src="template/img/telecomunication/Picture3.png" alt="">
                                    <h5 class="mb-0">CLOSED CABINET</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center py-3 px-3 build" style="width: 100%; height: 100%;" src="template/img/telecomunication/Picture2.png" alt="">
                                    <h5 class="mb-0">WALL MOUNTED RACK</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-4 py-3 px-3" style="width: 60%; height: 60%;" src="template/img/telecomunication/Picture5.png" alt="">
                                    <h5 class="mb-0">19 INCH RACK CABINET</h5>
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
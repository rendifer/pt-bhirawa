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
            <a href="/transportation" class="dropdown-item">transportation</a>
        </ul>
    </div>
</div>
@endsection

<style>
    .build{
        margin-bottom: 43%;
    }
</style>

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-white">
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
                                    <h5 class="mb-0">INDUSTRIAL</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="Industrial" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-4 py-3 px-3" style="width: 75%; height: 75%;" src="template/img/telecomunication/Picture4.png" alt="">
                                    <h5 class="mb-0">OIL & GAS </h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/oil and gas" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-5 py-3 px-3" style="width: 75%; height: 75%;" src="template/img/telecomunication/Picture3.png" alt="">
                                    <h5 class="mb-0">TELECOMUNICATION</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/Console-desk" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center py-3 px-3 build" style="width: 100%; height: 100%;" src="template/img/telecomunication/Picture2.png" alt="">
                                    <h5 class="mb-0">BUILD & INFRASTRUCTURE</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/Locker" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-4 py-3 px-3" style="width: 60%; height: 60%;" src="template/img/telecomunication/Picture5.png" alt="">
                                    <h5 class="mb-0">ELECTRICAL UTILITY</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/Locker" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@extends('template/main')

@section('solution')             
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle  active" data-bs-toggle="dropdown">Others Product</a>
    <div class="dropdown-menu bg-light">
        <ul>
            {{-- <h6>PRODUCTS</h6> --}}
            <a href="/Console deks" class="dropdown-item active">Console deks</a>
            <a href="/Locker" class="dropdown-item">Locker</a>
            {{-- <a href="/biomedical-packaging" class="dropdown-item">Biomedical Packaging</a>
            <a href="/specialized-boxes" class="dropdown-item">Specialized Boxes</a>
            <a href="/other-packaging-materials" class="dropdown-item">Other Packaging Materials</a> --}}
        </ul>
    </div>
</div>
@endsection

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-white">
                Console deks
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
                                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/barang-5.jpg" alt="">
                                    <h5 class="mb-0">Upskilling</h5>
                                    <br>
                                    <span>CBTA looks at the ability of each individual against the skills needed for a particular task and comes up with a targeted plan to bridge any gap.</span>
                                    <div class="col-12 mt-3">
                                        <a class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/barang-2.jpg" alt="">
                                    <h5 class="mb-0">Upskilling</h5>
                                    <br>
                                    <span>CBTA looks at the ability of each individual against the skills needed for a particular task and comes up with a targeted plan to bridge any gap.</span>
                                    <div class="col-12 mt-3">
                                        <a class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/barang-7.jpg" alt="">
                                    <h5 class="mb-0">Upskilling</h5>
                                    <br>
                                    <span>CBTA looks at the ability of each individual against the skills needed for a particular task and comes up with a targeted plan to bridge any gap.</span>
                                    <div class="col-12 mt-3">
                                        <a class="btn btn-primary text-white">More</a>
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
@extends('template/main')

@section('home')
    <a href="/" class="nav-item nav-link active">Home</a>
@endsection

@section('content')
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="template/img/icon/barang.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row" style="text-align: center;">
                                <div class="col-12 col-lg-12">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown text-white">DG PACKAGING PTE LTD</h1>
                                    <p class="fs-5 mb-5" style="color: white;">Transporting dangerous goods, biomedical and temperature sensitive packaging has never been safer or easier. Here at DG Packaging, we provide complete dangerous goods packaging and transport service.</p>
                                    <a href="" class="btn btn-danger py-3 px-5">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-12">
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-danger rounded h-100 p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon-06-primary.png" alt="">
                                    <h5 class="mb-0">Easy Process</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.2s">
                            <div class="bg-danger rounded h-100 p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon-03-primary.png" alt="">
                                    <h5 class="mb-0">Fast Delivery</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.3s">
                            <div class="bg-danger rounded h-100 p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon-04-primary.png" alt="">
                                    <h5 class="mb-0">Policy Controlling</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.4s">
                            <div class="bg-danger rounded h-100 p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon-07-primary.png" alt="">
                                    <h5 class="mb-0">Money Saving</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container" style="text-align: center;">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">OUR FEATURED PRODUCTS</h1>
                    <p class="text-white mb-5">Beyond being a provider of integrated logistics services, DG Packaging assists to appropriately repackage your dangerous goods. Secure packaging options include specialized boxes, biomedical packaging, U.N. boxes, pallets, drums, labelling and more.</p>
                    <a href="contact.html" class="btn btn-danger px-3 d-none d-lg-block" style="widows: 10%;">View Produtcs</a>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="template/img/icon/barang.jpg" alt="" style="width: 70%;">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <h1 class="display-6 mb-5">What They Say About Our Insurance</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid animated pulse infinite" src="template/img/icon/icon-06-primary.png" alt="">
                        <img class="img-fluid animated pulse infinite" src="template/img/icon/icon-06-primary.png" alt="">
                        <img class="img-fluid animated pulse infinite" src="template/img/icon/icon-06-primary.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 jus" style="margin-left: 0%;">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="bg-danger rounded h-100 p-1">
                        <div class="bg-white d-flex flex-column justify-content-center rounded h-100 py-4 px-3">
                            <img class="align-self-center mb-3" src="template/img/icon/icon-06-primary.png" alt="">
                            <h5 class="mb-0 text-center text-danger">Biomedical Services</h5>
                            <br>
                            <ul>
                                <li>
                                    <ol>packaging of class</ol>
                                </li>
                                <li>
                                    <ol>packaging of class</ol>
                                </li>
                            </ul>
                        </div>
                        </div>
                        <div class="bg-danger rounded h-100 p-1">
                        <div class="bg-white d-flex flex-column justify-content-center rounded h-100 py-4 px-3">
                            <img class="align-self-center mb-3" src="template/img/icon/icon-06-primary.png" alt="">
                            <h5 class="mb-0 text-center text-danger">Biomedical Services</h5>
                            <br>
                            <ul>
                                <li>
                                <ol>packaging of class</ol>
                                </li>
                            </ul>
                        </div>
                        </div>
                        <div class="bg-danger rounded h-100 p-1">
                        <div class="bg-white d-flex flex-column justify-content-center rounded h-100 py-4 px-3">
                            <img class="align-self-center mb-3" src="template/img/icon/icon-06-primary.png" alt="">
                            <h5 class="mb-0 text-center text-danger">Biomedical Services</h5>
                            <br>
                            <ul>
                                <li>
                                <ol>packaging of class</ol>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid animated pulse infinite" src="template/img/icon/icon-06-primary.png" alt="">
                        <img class="img-fluid animated pulse infinite" src="template/img/icon/icon-06-primary.png" alt="">
                        <img class="img-fluid animated pulse infinite" src="template/img/icon/icon-06-primary.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="">CLIENTS CHOOSE US FOR OUR HIGH VALUE SERVICES:</h4>
                    <p class="text-dark"><i class="fa-solid fa-check"></i> Dangerous Goods Repackaging Services</p>
                    <p class="text-dark"><i class="fa-solid fa-check"></i> Same day service inclusive of pickup and delivery</p>
                    <p class="text-dark"><i class="fa-solid fa-check"></i> Preparation of Dangerous Goods Declaration</p>
                    <p class="text-dark"><i class="fa-solid fa-check"></i> On-site Repacking and Inspection Services</p>
                    <p class="text-dark"><i class="fa-solid fa-check"></i> Dangerous Goods Local Pick-up and Delivery</p>      
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-danger rounded p-5">
                        <img class="img-fluid" src="template/img/icon/barang.jpg" alt="" style="width: 70%; margin-left: 19%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container" style="text-align: center;">
            <div class="row g-12">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">OUR TRUSTED CLIENTS</h1>
                    <p class="text-white mb-5">Over the years, many of the world’s biggest organisations and brands have come to entrust the transportation of their dangerous goods to us. Our vast experience combined with a global network ensures that special care is given to all goods..</p>
                    <img class="img-fluid" src="template/img/icon/icon-10-light.png" alt="">
                    <img class="img-fluid" style="margin-left: 20%;" src="template/img/icon/icon-10-light.png" alt="">
                    <img class="img-fluid" style="margin-left: 20%;" src="template/img/icon/icon-10-light.png" alt="">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s" style="margin-top: -4%;">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="template/img/icon/barang.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center" style="text-align: center;">
                                <h1 class="text-white">Find Us</h1>
                                <div class="col-lg-6 wow fadeIn mb-2" data-wow-delay="0.5s" style="min-height: 400px;">
                                    <div class="position-relative rounded overflow-hidden h-100">
                                        <iframe class="position-relative w-100 h-100"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                                        frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                                        tabindex="0"></iframe>
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

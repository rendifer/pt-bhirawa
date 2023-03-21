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
                                    <h1 class="display-3 text-dark animated slideInDown text-white">DG PACKAGING</h1>
                                    <h2 class="display-4 text-dark mb-4 animated slideInDown text-white">INDONESIA</h2>
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
                        <div class="col-sm-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon-1.png" alt="" style="width: 40%;">
                                    <h5 class="mb-0">Easy Process</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-3 wow fadeIn" data-wow-delay="0.2s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon-2.png" alt="" style="width: 40%;">
                                    <h5 class="mb-0">Fast Delivery</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-3 wow fadeIn" data-wow-delay="0.3s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon-3.png" alt="" style="width: 40%;">
                                    <h5 class="mb-0">Policy Controlling</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.4s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon-4.png" alt="" style="width: 40%;">
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
                    <a href="/dangerous-goods-un-boxes" class="btn btn-danger px-3 d-none d-lg-block" style="widows: 10%;">View Produtcs</a>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="template/img/icon/icon-5.png" alt="" style="width: 70%;">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <h2 class="mb-5 text-danger">FEATURED SERVICES</h2>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="bg-danger rounded h-100 p-1">
                            <div class="bg-white d-flex flex-column justify-content-center rounded h-100 py-3 px-3">
                                <img class="align-self-center mb-3" src="template/img/icon/icon-6.jpg" alt="" style="width: 40%;">
                                <h5 class="mb-3 text-center text-danger">DANGEROUS GOODS TRANSPORT</h5>
                                <ul>
                                    <li>Fully Licensed Fleet of DG Trucks</li>
                                    <li>SCDF Licensed</li>
                                    <li>NEA Licensed</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bg-danger rounded h-100 p-1">
                            <div class="bg-white d-flex flex-column justify-content-center rounded h-100 py-4 px-3">
                                <img class="align-self-center mb-3" src="template/img/icon/icon-7.png" alt="">
                                <h5 class="mb-3 text-center text-danger">LOGISTICS MANAGEMENT BUSINESS</h5>
                                <ul>
                                    <li>International Logistics Service</li>                                
                                    <li>Warehouse and Distribution</li>
                                </ul>                         
                            </div>
                        </div>
                        <div class="bg-danger rounded h-100 p-1">
                            <div class="bg-white d-flex flex-column justify-content-center rounded h-100 py-4 px-3">
                                <img class="align-self-center mb-3" src="template/img/icon/icon-8.png" alt="">
                                <h5 class="mb-3 text-center text-danger">CHEMICAL & SPECIALTY LOGISTIC</h5>
                                <ul>
                                    <li>Hazardous and Dangerous Goods Logistics Integrator</li>
                                    <li>Dangerous Goods Packaging Solution Provider</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bg-danger rounded h-100 p-1">
                            <div class="bg-white d-flex flex-column justify-content-center rounded h-100 py-3 px-3">
                                <img class="align-self-center mb-3" src="template/img/icon/icon-9.png" alt="">
                                <h5 class="mb-3 text-center text-danger">Biomedical SERVICES</h5>
                                <ul>
                                    <li>IATA approved DG packaging services</li>
                                    <li>Packaging of Class 6.2</li>
                                    <li>Cold room packaging services</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bg-danger rounded h-100 p-1">
                            <div class="bg-white d-flex flex-column justify-content-center rounded h-100 py-4 px-3">
                                <img class="align-self-center mb-3" src="template/img/icon/icon-10.png" alt="">
                                <h5 class="mb-3 text-center text-danger">TEMPERATURE SENSITIVE PACKAGING</h5>
                                <ul>
                                    <li>Validated -2°C to -8°C Coolpac kits available</li>
                                    <li>Temperature tested performance reports available on request</li>
                                </ul>
                            </div>
                        </div>
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
                    <p class="text-dark"><i class="fa-solid fa-check"></i> International Transport of Dangerous Goods by Air</p>
                    <p class="text-dark"><i class="fa-solid fa-check"></i> Decanting and Palletizing Services</p>
                    <p class="text-dark"><i class="fa-solid fa-check"></i> Provision of Dry Ice & Gel Packs for Temperature Control</p>
                    <p class="text-dark"><i class="fa-solid fa-check"></i> In-house Dangerous Goods Safety Advisors</p>      
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="rounded">
                        <img class="img-fluid" src="template/img/icon/gambar-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light">
        <div class="container-fluid appointment2 wow fadeIn" data-wow-delay="0.1s">
            <div class="container skew p-5" style="text-align: center;">
                <div class="row g-12">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="display-6 text-white mb-5">OUR TRUSTED CLIENTS</h1>
                        <p class="text-white mb-5">Over the years, many of the world’s biggest organisations and brands have come to entrust the transportation of their dangerous goods to us. Our vast experience combined with a global network ensures that special care is given to all goods.</p>
                        <div class="row g-12">
                            <div class="col-sm-6" data-wow-delay="0.1s">
                                <img class="img-fluid m-5" style="width: 55%;" src="template/img/icon/rpx.png" alt="">
                            </div>
                            <div class="col-sm-6" data-wow-delay="0.1s">
                                <img class="img-fluid" style="width: 55%;" src="template/img/icon/gambar-4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light" data-wow-delay="0.1s">
        <div class="container">
            <div class="row hazmat">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="text-danger">DG PACKAGING INDONESIA,<br> PACKAGING EXPERT;</h1>
                    <p class="text-dark">Our first priority At DG Packaging Indonesia, we make it point to prioritize safety excellence in every aspect of our business. Our team’s passion, commitment and contribution, are some of the driving factors here that have propelled us to the stage of global success. Our organization’s commitment to good corporate governance sets out several factors that involve us going beyond what is required of us. We don’t do good, we do great. Interested to find out how we can safely and timely transport your goods? Talk to our consultants to find out more.</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-danger py-3 px-5" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-home py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container" style="text-align: center;">
            <div class="row g-12 ">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="text-white">Find Us</h1>
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="position-relative rounded overflow-hidden h-100">
                            <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d991.5294379190411!2d106.9773814!3d-6.2482108!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d7d65c78e09%3A0xb90fbb4c7d103f12!2sDG%20Packaging%20Indonesia%20-%20PT.%20Daya%20Guna%20Perkasa!5e0!3m2!1sid!2sid!4v1679394655666!5m2!1sid!2sid"
                            frameborder="0" style="min-height: 700px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
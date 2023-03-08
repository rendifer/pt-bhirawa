@extends('template/main')

@section('solution')             
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Our Solution</a>
        <div class="dropdown-menu bg-light">
            <ul>
                <h6>SERVICES</h6>
                <a href="/Dangerous-Goods-Packaging-Service" class="dropdown-item">Dangerous Goods Packaging Service</a>
                <a href="/biomedical-service" class="dropdown-item">Biomedical Services</a>
                <a href="/Temperature-Sensitive-Packaging" class="dropdown-item ">Temperature Sensitive Packaging</a>
                <a href="/lithium-batteries-shipping" class="dropdown-item">Lithium Batteries Shipping</a>
                <a href="/Dangerous-Goods-Training" class="dropdown-item">Dangerous Goods Training</a>
            </ul>
            <ul>
                <h6>PRODUCTS</h6>
                <a href="/dangerous-goods-un-boxes" class="dropdown-item">UN Boxes</a>
                <a href="/dangerous-goods-classification" class="dropdown-item active">DG Labels and Markings</a>
                <a href="/biomedical-packaging" class="dropdown-item">Biomedical Packaging</a>
                <a href="/specialized-boxes" class="dropdown-item">Specialized Boxes</a>
                <a href="/other-packaging-materials" class="dropdown-item">Other Packaging Materials</a>
            </ul>
        </div>
    </div>
@endsection

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-white">
                Dangerous Goods Classification
            </h4>
        </div>
    </div>

    <div class="container-fluid overflow-hidden mb-5 bg-white">
        <div class="container px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 facts-text wow fadeIn mt-5" data-wow-delay="0.1s">
                    <div class="h-100 px-4 ps-lg-0">
                        <h3 class="text-danger mb-4">DANGEROUS GOODS LABELS</h3>
                        <p class="text-dark mb-5">
                            Do check the UN GHS regulations to find the appropriate label for your dangerous goods. Our labels meet the standards of 49 CFR, ICAO and other international air regulations. They are also made with strong adhesives that make it suitable to stick on different surfaces.
                        </p>
                        <p class="text-dark mb-3">
                            *Hover over the individual images for more description.
                        </p>
                        <img class="align-self-center mb-3 py-3 px-3" style="width: 100%;" src="template/img/icon/barang-1.jpg" alt="">
                        <img class="align-self-center mb-3 py-3 px-3" style="width: 100%;" src="template/img/icon/barang-2.jpg" alt="">
                    </div>
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
                                <div class="container py-5 text-center bg-light">
                                    <span class="text-dark">EXPERT ADVICE FOR</span>
                                    <h3 class="animated slideInDown mb-4 text-danger">DANGEROUS GOODS DECLARATION</h3>
                                    <p class="text-dark">Need expert advice on the labels applicable for your goods? Consult our team today to get precise recommendations on the combination of DG labels needed when transporting your goods.</p>
                                    <div class="col-12 col-lg-12" style="text-align: center;" data-wow-delay="0.5s">
                                        <a href="/contact" class="btn btn-danger">Contact Us</a>
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
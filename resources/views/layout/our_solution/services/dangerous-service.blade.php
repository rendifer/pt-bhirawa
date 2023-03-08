@extends('template/main')

@section('solution')             
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Our Solution</a>
        <div class="dropdown-menu bg-light">
            <ul>
                <h6>SERVICES</h6>
                <a href="/Dangerous-Goods-Packaging-Service" class="dropdown-item active">Dangerous Goods Packaging Service</a>
                <a href="/biomedical-service" class="dropdown-item">Biomedical Services</a>
                <a href="/Temperature-Sensitive-Packaging" class="dropdown-item">Temperature Sensitive Packaging</a>
                <a href="/lithium-batteries-shipping" class="dropdown-item">Lithium Batteries Shipping</a>
                <a href="/Dangerous-Goods-Training" class="dropdown-item">Dangerous Goods Training</a>
            </ul>
            <ul>
                <h6>PRODUCTS</h6>
                <a href="/dangerous-goods-un-boxes" class="dropdown-item">UN Boxes</a>
                <a href="/dangerous-goods-classification" class="dropdown-item">DG Labels and Markings</a>
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
            <h4 class="display-6 animated slideInDown mb-4 text-white">Dangerous Goods Packaging Service</h4>
        </div>
    </div>

    <div class="container-fluid overflow-hidden mb-5 bg-white">
        <div class="container px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 facts-text wow fadeIn mt-5" data-wow-delay="0.1s">
                    <div class="h-100 px-4 ps-lg-0">
                        <span>THE CHALLENGE OF</span>
                        <h3 class="text-danger mb-4">PACKING DANGEROUS GOODS</h3>
                        <p class="text-dark mb-3">
                            Dangerous goods have specific packing requirements that ensure a safe transportation to their new location. Also known as hazmat logistics, the transportation of these materials is governed by the IATA Dangerous Goods regulations as well as the International Maritime Dangerous Goods and the International Carraige of Dangerous Goods by Road.
                        </p>
                        <p class="text-dark mb-3">
                            Recognising the goods being transported, their properties and applicable regulations followed by packaging them to meet these standards require specialist skills.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="position-relative rounded overflow-hidden h-100"
                        style="min-height: 300px"
                    >
                        <img
                            class="position-absolute w-80 h-100"
                            src="template/img/icon/box2.jpg"
                            alt=""
                            style="object-fit: cover"
                        />
                    </div>
                </div>
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <span>WE PROVIDE COMPREHENSIVE</span>
                    <h2 class="mb-3 text-danger">
                        HAZARDOUS PACKING
                    </h2>
                    <p class="mb-4">
                        DGP has a professional team that is dedicated to providing you with the highest level of services possible – encompassing all areas of Dangerous Goods handling, including specialized packaging and transportation.
                    </p>
                    <p class="mb-4">
                        The IATA Dangerous Goods regulations serve as the most trusted source for information pertaining to the transport of dangerous goods. It is recognized by more than 200 airlines in the world. All of DG Packaging’s solutions are in accordance with IATA Dangerous Goods regulations, which keep your goods, the logistics providers and yourself safe.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-xxl py-5 bg-light mb-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-3 text-danger">
                        UN CERTIFIED PACKAGING FOR DANGEROUS GOODS
                    </h3>
                    <p class="mb-4">
                        Our services include
                    </p>
                    <div>
                        <li>Dangerous Goods Packaging, Marking and Labelling</li>
                        <li>Preparation of Dangerous Goods Declaration </li>
                        <li>On-site Repacking and Inspection Services </li>
                        <li>Hazardous materials Local Pick-up and Delivery </li>
                        <li>Decanting , redrumming and Palletizing Services</li>
                        <li>Provision of Dry Ice & Gel Packs for Temperature Control</li>
                        <li>Limited quantity packing </li>
                        <li>In-house Dangerous Goods Safety Advisors</li>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="position-relative rounded overflow-hidden h-100"
                        style="min-height: 400px"
                    >
                        <img
                            class="position-absolute w-100 h-100"
                            src="template/img/icon/barang.jpg"
                            alt=""
                            style="object-fit: cover"
                        />
                    </div>
                </div>
                <div class="col-12 col-lg-12" style="text-align: center;" data-wow-delay="0.5s">
                    <a href="/contact" class="btn btn-danger">Contact Us</a>
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
                                    <span class="text-dark">WHY CHOOSE US FOR</span>
                                    <h3 class="animated slideInDown mb-4 text-danger">HAZMAT LOGISTICS</h3>
                                    <p class="text-dark">DG Packaging’s strong compliance with international regulations gives our clients’ confidence in our dangerous goods packaging solutions. From understanding the properties of the goods and the environment (temperature, humidity, sterilization), to our strong logistics expertise, we ensure that your volatile goods are transported safely. With our assistance, you can rest easy knowing that no hazards or unreasonable delays will be encountered.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
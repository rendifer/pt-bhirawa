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
                <a href="/dangerous-goods-classification" class="dropdown-item">DG Labels and Markings</a>
                <a href="/biomedical-packaging" class="dropdown-item active">Biomedical Packaging</a>
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
                Biomedical Packaging
            </h4>
        </div>
    </div>

    <div class="container-xxl">
        <div class="container">
            <div class="row g-5 mt-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="position-relative rounded overflow-hidden h-100"
                        style="min-height: 400px"
                    >
                        <img
                            class="position-absolute h-70 w-100"
                            src="template/img/icon/barang-3.jpg"
                            alt=""
                            style="object-fit: cover;"
                        />
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="">
                        THE NEED FOR
                    </span>
                    <h2 class="mb-3 text-danger">
                        4GV PACKAGING
                    </h2>
                    <p class="mb-3">
                        With an exceptionally cold temperature of -78.5 degree Celcius (-109.3 degrees Fahrenheit), dry ice & equivalent cold gel packs are used to support frozen or cold products. These temperature sensitive goods include medical supplies which are prone to a compromise in quality or function when exposed to heat.
                    </p>
                    <p class="mb-3">
                        Another benefit of using dry ice or cold gel packs is that no liquid waste is created when heat is applied to the packages. Dry ice goes through sublimation when heat is applied, transforming directly into gas from solid. On the other hand, gel packs are designed to contain all chemicals within their bodies, hence your goods will not come in contact with the chemicals. 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <span>WE PROVIDE COMPREHENSIVE</span>
                <h2 class="text-danger">PACKAGING SOLUTIONS</h2>
            </div>
            <div class="row g-6">
                <div class="col-lg-6 col-md-6 wow fadeInUp mb-3" data-wow-delay="0.1s">
                    <div class="team-item border-top border-5 border-danger rounded shadow overflow-hidden" style="padding-bottom: 19%;">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4" src="template/img/icon/barang-4.jpg" style="width: 60%;" alt="">
                            <h4 class="text-danger">DGP PATHOPAK 1LTR, 2LTR AND 3LTR</h4>
                        </div>
                        <div class="p-4">
                            <ul>
                                <li>Supplied complete ready to ship</li>
                                <li>UN certified for infectious/diagnostic specimens</li>
                                <li>Strong, durable and highly protective</li>
                                <li>Low cost</li>
                                <li>Easy to use</li>
                                <li>Ideal for shipping a wide range of primary containers including blood tubes, vials, swabs, universal pots and PETRI dishes</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item border-top border-5 border-danger rounded shadow overflow-hidden">
                        <div class="text-center">
                            <img class="justify-content-center img-fluid rounded-circle mb-4" src="template/img/icon/barang-5.jpg" style="width: 60%;" alt="">
                            <h4 class="text-danger">DGP BIOTHERM 5,10,25,45,70</h4>
                        </div>
                        <div class="p-4">
                            <ul>
                                <li>Re-usable, low cost and highly effective</li>
                                <li>Ideal for shipping a wide range of dry ice or temperature controlled specimens</li>
                                <li>Carry handle encourages careful transportation</li>
                                <li>Replacement outer boxes available</li>
                                <li>Temperature tested performance reports available on request</li>
                                <li>A comprehensive validating service is available.</li>
                                <li>Validated -2°C to -8°C Coolpac kits available</li>
                                <li>Supplied complete ready to ship</li>
                                <li>Can be used with DGP PATHOPAK products for diagnostic and infectious shipments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div>
                        <span>MORE ABOUT</span>
                        <h3 class="mb-3 text-danger">
                            DRY ICE PACKAGING
                        </h3>
                        <p>
                            The use of dry ice and cold gel packs involves much planning and expertise when packing. Considerations given include:
                        </p>
                        <ul>
                            <li>Calculating the amount of dry ice used. As a rule of thumb, 0.45kg of dry ice sublimate every 24 hours.</li>
                        </ul>
                        <ul>
                            <li>The density of your external packaging. The denser your packaging is, the less heat is introduced to the contents within.</li>
                        </ul>
                        <ul>
                            <li>Avoiding the use of air tight containers. The release of carbon dioxide from dry ice means that an air passage is required to allow its release.</li>
                        </ul>
                        <ul>
                            <li>Proper labelling complete with the type of temperature sensitive packaging used and the amount of dry ice or gel packs used.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="position-relative rounded overflow-hidden h-100"
                        style="min-height: 400px"
                    >
                        <img
                            class="position-absolute w-100 h-100"
                            src="template/img/icon/barang-6.jpg"
                            alt=""
                            style="object-fit: cover"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
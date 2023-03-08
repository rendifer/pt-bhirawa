@extends('template/main')

@section('solution')             
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Our Solution</a>
        <div class="dropdown-menu bg-light">
            <ul>
                <h6>SERVICES</h6>
                <a href="/Dangerous-Goods-Packaging-Service" class="dropdown-item">Dangerous Goods Packaging Service</a>
                <a href="/biomedical-service" class="dropdown-item">Biomedical Services</a>
                <a href="/Temperature-Sensitive-Packaging" class="dropdown-item active">Temperature Sensitive Packaging</a>
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
            <h4 class="display-6 animated slideInDown mb-4 text-white">Temperature Sensitive Packaging</h4>
        </div>
    </div>

    <div class="container-fluid overflow-hidden mb-5 bg-white">
        <div class="container px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 facts-text wow fadeIn mt-5" data-wow-delay="0.1s">
                    <div class="h-100 px-4 ps-lg-0">
                        <span>THE CHALLENGE OF</span>
                        <h3 class="text-danger mb-4">COLD CHAIN LOGISTICS</h3>
                        <p class="text-dark mb-3">
                            Many products are temperature sensitive, perishing at temperatures outside the recommended range. Common temperature sensitive goods include lab samples, vaccines, virus diagnostic test kits, biomedical materials and culture packs. When not specially packaged and planned for, these materials are likely to suffer irreversible damage, rendering them unfit for their intended use. This is why special packaging needs to be provided to ensure that their temperature remains within the safety range for the duration of the transportation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="position-relative rounded overflow-hidden h-100"
                        style="min-height: 300px"
                    >
                        <img
                            class="position-absolute w-100 h-100"
                            src="template/img/icon/box5.jpg"
                            alt=""
                            style="object-fit: cover"
                        />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <span>WE PROVIDE COMPREHENSIVE</span>
                    <h2 class="mb-3 text-danger">
                        INSULATED PACKAGING
                    </h2>
                    <p class="mb-4">
                        DG Packaging offers expert temperature controlled packaging solutions. These packaging technologies create an insulation, which is essentially a barrier that resists heat transfer to or from your product. This is achieved through insulating materials, polystyrene foam, polyurethane foam, vacuum insulated packs, gel packs, dry ice, phase change material, refrigerant packs, drum heaters and heating blankets. Oftentimes, DG Packaging experts advise on the usage of a combination of these solutions in order to offer flexibility and adaptability to potential unforeseen situations.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-xxl py-5 bg-light mb-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div>
                        <span>CUSTOM PACKAGING FOR</span>
                        <h3 class="mb-3 text-danger">
                            TEMPERATURE SENSITIVE GOODS
                        </h3>
                        <ul>
                            <li>Re-usable, low cost and highly effective</li>
                        </ul>
                        <ul>
                            <li>Ideal for shipping a wide range of dry ice or temperature controlled specimens</li>
                        </ul>
                        <ul>
                            <li>Carry handle encourages careful transportation</li>
                        </ul>
                        <ul>
                            <li>Replacement outer boxes available</li>
                        </ul>
                        <ul>
                            <li>Temperature tested performance reports available on request </li>
                        </ul>
                        <ul>
                            <li>A comprehensive validating service is available.</li>
                        </ul>
                        <ul>
                            <li>Validated -2°C to -8°C Coolpac kits available</li>
                        </ul>
                        <ul>
                            <li>Supplied complete ready to ship</li>
                        </ul>
                        <ul> 
                            <li>Can be used with DGP PATHOPAK products for diagnostic and infectious shipments</li>
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
                            src="template/img/icon/box6.jpg"
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
                                    <h3 class="animated slideInDown mb-4 text-danger">INSULATED & REFRIGERANT SUPPORTED PACKAGING</h3>
                                    <p class="text-dark">
                                        DG Packaging provides a strong understanding of insulating materials and refrigerants in order to create suitable temperature sensitive packaging. Our solutions are in line with IATA’s regulatory requirements and take into account the characteristics of your goods and environment of the transit corridors. Through any international shipment, air logistics or foreseeable delays at any stopover, you can be confident that your products remain within the safe temperature range.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
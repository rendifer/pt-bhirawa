@extends('template/main')

@section('solution')             
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Others Product</a>
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
                <a href="/biomedical-packaging" class="dropdown-item">Biomedical Packaging</a>
                <a href="/specialized-boxes" class="dropdown-item">Specialized Boxes</a>
                <a href="/other-packaging-materials" class="dropdown-item active">Other Packaging Materials</a>
            </ul>
        </div>
    </div>
@endsection

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-white">                   
                Other Packaging Materials
            </h4>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="text-dark">OTHER PACKAGING SOLUTIONS</h2>
            </div>
            <div class="row g-6" style="margin-top: -5%;">
                <div class="col-lg-4 col-md-6 wow fadeInUp mb-3" data-wow-delay="0.1s">
                    <div class="team-item border-top border-5 border-danger rounded shadow overflow-hidden">
                        <div class="text-center">
                            <img class="mb-3" src="template/img/icon/barang-11.jpg" style="width: 100%;" alt="">
                            <h4 class="text-dark">INNER PACKAGING</h4>
                        </div>
                        <div class="p-1" style="">
                            <ul>
                                <li>Separate contents within your packaging with additional containment to separate contents</li>
                                <li>Prevent any spills from affecting the contents of your package</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp mb-3" data-wow-delay="0.3s">
                    <div class="team-item border-top border-5 border-danger rounded shadow overflow-hidden pb-5">
                        <div class="text-center">
                            <img class="mb-3" src="template/img/icon/barang-12.jpg" style="width: 100%;" alt="">
                            <h4 class="text-dark">UN PLASTIC STEEL DRUMS</h4>
                        </div>
                        <div class="p-1" style="">
                            <ul>
                                <li>Leak-proof airtight and safety seals</li>
                                <li>Strong body to withstand impact during handing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp mb-3" data-wow-delay="0.3s">
                    <div class="team-item border-top border-5 border-danger rounded shadow overflow-hidden" style="padding-bottom: 21%;">
                        <div class="text-center">
                            <img class="mb-3" src="template/img/icon/barang-13.jpg" style="width: 100%;" alt="">
                            <h4 class="text-dark">STYROFOAM CHIPS</h4>
                        </div>
                        <div class="p-1" style="">
                            <ul>
                                <li>DGP Absorbent Mat</li>
                                <li>Vermiculite</li>
                            </ul>
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
                    <div>
                        <span>CAN’T FIND YOUR DESIRED PRODUCT?</span>
                        <h3 class="mb-3 text-dark">
                            CONSULT OUR PACKAGING EXPERTS
                        </h3>
                        <p>
                            DG Packaging provides a range of transport solutions for dangerous goods that meet the standards imposed by the United Nations. We follow and provide for transport needs as detailed by the UN ratings for shipping hazadous materials.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="position-relative rounded overflow-hidden h-100"
                        style="min-height: 400px"
                    >
                        <img
                            class="position-absolute w-100 h-100"
                            src="template/img/icon/barang-14.jpg"
                            alt=""
                            style="object-fit: cover"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <div class="mb-2">
                            <h4 class="text-dark">Package Type:</h4>
                        </div>
                        <div class="" style="font-size: 15px;">
                            <span>1 — Drums/Pails</span><br>
                            <span>2 — Barrels</span><br>
                            <span>3 — Jerricans</span><br>
                            <span>4 — Boxes</span><br>
                            <span>5 — Bags</span><br>
                            <span>6 — Composite</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden pb-3">
                        <div class="mb-2">
                            <h4 class="text-dark">Material:</h4>
                        </div>
                        <div class="" style="font-size: 15px;">
                            <span>A – Steel</span><br>
                            <span>B — Aluminum</span><br>
                            <span>C — Natural Wood</span><br>
                            <span>D — Plywood</span><br>
                            <span>F — Reconstituted Wood</span><br>
                            <span>G — Fibreboard</span><br>
                            <span>H — Plastic</span><br>
                            <span>L — Textile</span><br>
                            <span>M — Paper</span><br>
                            <span>N — Metal (other)</span><br>
                            <span>P — Glass Stoneware or Porcelain</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <div class="mb-2">
                            <h4 class="text-dark">Category:</h4>
                        </div>
                        <div class="" style="font-size: 15px;">
                            <span>1 — Closed Head</span><br>
                            <span>2 — Open Head</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <div class="mb-2">
                            <h4 class="text-dark">Packaging Group:</h4>
                        </div>
                        <div class="" style="font-size: 15px;">
                            <span>X — Meets group I, II, and III’s test</span><br>
                            <span>Y — Meets group II, and III’s test</span><br>
                            <span>Z — Meets III’s test</span>
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
                    <div>
                        <h3 class="mb-3 text-dark">
                            Density or Specific Gravity:
                        </h3>
                        <span>Density — For solids that have inner packagings they need to be marked with the maximum gross mass (weight) in kilograms.</span><br>
                        <span>Specific Gravity — Stand alone packagings meant to hold liquids need to be marked with the specific gravity rounded down to the first decimal.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
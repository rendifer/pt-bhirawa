@extends('template/main')

@section('solution')
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Others Product</a>
        <div class="dropdown-menu bg-light">
            <ul>
                <h6>SERVICES</h6>
                <a href="/Dangerous-Goods-Packaging-Service" class="dropdown-item">Dangerous Goods Packaging Service</a>
                <a href="/biomedical-service" class="dropdown-item">Biomedical Services</a>
                <a href="/Temperature-Sensitive-Packaging" class="dropdown-item">Temperature Sensitive Packaging</a>
                <a href="/lithium-batteries-shipping" class="dropdown-item">Lithium Batteries Shipping</a>
                <a href="/Dangerous-Goods-Training" class="dropdown-item active">Dangerous Goods Training</a>
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
            <h4 class="display-6 animated slideInDown mb-4 text-white">Dangerous Goods Training</h4>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                    class="position-relative rounded overflow-hidden h-100"
                    style="min-height: 200px"
                >
                    <img
                        class="position-absolute"
                        src="template/img/icon/gambar1.jpg"
                        alt=""
                        style="object-fit: cover; width: 100%;"
                    />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <span>WE PROVIDE</span>
                    <h2 class="mb-3 text-dark">
                        DANGEROUS GOODS TRAINING
                    </h2>
                    <p class="mb-4">
                        DG Training Pte Ltd (DGT) was formed and based in Indonesian as a contributor to the training and upskilling scene for the dangerous goods industry which encompasses sectors from aviation, manufacturing and freight forwarding. The company reconciled over 20 years of experience in dangerous goods handling and management from multiple subject matter experts to build a learning community in hope to make learning and upskilling accessible and cultured among entities and professionals.
                    </p>
                    <p class="mb-4">
                        The core business of DGT has been heavily involved in excellent reasoning behind the evolution of the dangerous goods regulations, extensive bandwidth of industry network among airlines, forwarders and shippers and continuous observation on industries’ risk assessment against business and market development so as to ensure that knowledge delivery and operational empowerment is relevant and effective.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 mb-5 bg-light">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-12 justify-content-center">
                        <h3 class="text-dark text-center">Why is CBTA so important?</h3>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center py-4 px-3">
                                    <img class="align-self-center mb-3 bg-danger" style="border-radius: 50%; width: 25%;" src="template/img/icon/gambar2.png" alt="">
                                    <h5 class="mb-0">Upskilling</h5>
                                    <br>
                                    <span>CBTA looks at the ability of each individual against the skills needed for a particular task and comes up with a targeted plan to bridge any gap.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center  py-4 px-3">
                                    <img class="align-self-center mb-3 bg-danger" style="border-radius: 50%; width: 25%;" src="template/img/icon/gambar3.png" alt="">
                                    <h5 class="mb-0">Compliance</h5>
                                    <br>
                                    <span>Organizations see immediate benefits from CBTA. It ensures competency in all personnel and keeps industry standards at the forefront of operational processes.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center  py-4 px-3">
                                    <img class="align-self-center mb-3 bg-danger" style="border-radius: 50%; width: 25%;" src="template/img/icon/gambar4.png" alt="">
                                    <h5 class="mb-0">Get Better</h5>
                                    <br>
                                    <span>CBTA is an essential tool in the industry’s determination to build back better.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center py-4 px-3">
                                    <img class="align-self-center mb-3 bg-danger" style="border-radius: 50%; width: 25%;" src="template/img/icon/gambar5.png" alt="">
                                    <h5 class="mb-0">Accreditation</h5>
                                    <br>
                                    <span>DGT is a CBTA Center, with global accreditation by IATA for recognizing compliance with CBTA training provisions.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center  py-4 px-3">
                                    <img class="align-self-center mb-3 bg-danger" style="border-radius: 50%; width: 25%;" src="template/img/icon/gambar6.png" alt="">
                                    <h5 class="mb-0">Recognition</h5>
                                    <br>
                                    <span>DGT is recognized for meeting global standards in dangerous goods training.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center  py-4 px-3">
                                    <img class="align-self-center mb-3 bg-danger" style="border-radius: 50%; width: 25%;" src="template/img/icon/gambar7.png" alt="">
                                    <h5 class="mb-0">Be Qualified</h5>
                                    <br>
                                    <span>Our participants will gain internationally recognized qualifications together with co-branded IATA course certificates.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="justify-content-center" style="text-align: center;">
                        <a href="/" class="btn btn-primary mb-3">VIEW ALL COURSES</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

@endsection
@extends('template/main')

@section('about')
    <a href="/about" class="nav-item nav-link active">About Us</a>
@endsection

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-white">
                About Us
            </h4>
        </div>
    </div>

    <div class="container-fluid overflow-hidden bg-light">
        <div class="container px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 facts-text wow fadeIn mt-5" data-wow-delay="0.1s">
                    <div class="h-100 px-4 ps-lg-0">
                        <h3 class="text-danger mb-4">DG PACKAGING GROUP OF COMPANIES</h3>
                        <p class="text-dark mb-3">
                            Established by a global network of professionals with years of specialized experience in the Dangerous Goods field, DG Packaging Group is committed to providing total solutions on Dangerous Goods, Biomedical and Temperature Sensitive Packaging. Additionally, we possess expertise in the Repacking and Integrated Logistics Services for chemical, pharmaceutical and biomedical industries.
                        </p>
                        <p class="text-dark mb-3">
                            Our specialized teams of Dangerous Goods experts are certified in all aspects of transportation regulations. The in-house Dangerous Goods Safety Advisor and certified Dangerous Goods Instructors are our primary resources to supplement our knowledge management system and our regulatory compliance skills.
                        </p>
                        <p class="text-dark mb-5">
                            With our close network of experts all around the globe, you, our customer, can rest assured that your Dangerous Goods shipments are not only serviced with the right packaging, but also shipped in accordance with the right regulations and the right safety practices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light bg-safety">
        <div class="container-fluid safety mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container skew p-5" style="text-align: center;">
                <div class="row g-12">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="text-white mb-5">Safety, Our First Priority</h1>
                        <p class="text-white mb-5">At DG Packaging, we believe that safety is our number one priority when delivering dangerous goods to our customers. Over the years, many of the world’s biggest organisations and brands have come to entrust us with the transportation of their goods. With our vast experience combined with a global network, we ensure that special care is provided to all goods. </p>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-12 justify-content-center">
                        <div class="col-sm-6 wow fadeIn mb-5" data-wow-delay="0.1s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded px-3 h-100" style="padding-bottom: 11%;">
                                    <img class="align-self-center mb-3 bg-white" src="template/img/icon/about1.png" alt="" style="width: 25%; margin-top: -10%;">
                                    <h5 class="mb-0 text-danger">CORPORATE VISION</h5>
                                    <br>
                                    <span>DG Packaging Group aims to be a leading multinational corporation specialized in the packaging, declaration, consulting and integrated logistics of Dangerous Goods.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3 h-100">
                                    <img class="align-self-center mb-3 bg-white" src="template/img/icon/about2.png" alt="" style="width: 25%; margin-top: -15%;">
                                    <h5 class="mb-0 text-danger">Fast Delivery</h5>
                                    <br>
                                    <span>DG Packaging Group is highly committed to serving our customers with the highest quality Dangerous Goods UN Tested Approved Packaging and integrated logistics services at competitive pricing. A strong dedication to not only safety compliance, but safety excellence forms the baseline working philosophy throughout all levels of the organization.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
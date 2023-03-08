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
                <a href="/dangerous-goods-un-boxes" class="dropdown-item active">UN Boxes</a>
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
            <h4 class="display-6 animated slideInDown mb-4 text-white">
                Dangerous Goods UN Boxes
            </h4>
        </div>
    </div>

    <div class="container-fluid overflow-hidden mb-5 bg-white">
        <div class="container px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 facts-text wow fadeIn mt-5" data-wow-delay="0.1s">
                    <div class="h-100 px-4 ps-lg-0">
                        <span>PROVISION OF</span>
                        <h3 class="text-danger mb-4">UN CERTIFIED BOXES</h3>
                        <p class="text-dark mb-3">
                            DG Packaging provides an extensive range of “4G/4GV/4GU” UN certified boxes which have been passed through the UN Performance Tests and are all suitable for multimodal transport of various classes of Dangerous Goods. Our UN certified boxes are available as standard sizes ranging from X9 to X60. These customized sizes can be manufactured upon customer’s request.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="position-relative rounded overflow-hidden h-100"
                        style="min-height: 400px"
                    >
                        <img
                            class="position-absolute w-100 h-100"
                            src="template/img/icon/box1.jpg"
                            alt=""
                            style="object-fit: cover"
                        />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mb-3 text-danger">
                        4GV PACKAGING
                    </h2>
                    <p class="mb-4">
                        4GV packaging is a variation which uses inner packing – bottles, jars, containers, cans & more, coupled with UN certified cardboard boxes. These cardboard boxes have been tested and proven safe to use with a range of different inner packaging materials. In this case, the specific combination of packaging and its contents need not be tested in its final assembled combination for transport.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid overflow-hidden mb-5 bg-white">
        <div class="container px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 facts-text wow fadeIn mt-5" data-wow-delay="0.1s">
                    <div class="h-100 px-4 ps-lg-0">
                        <h3 class="text-danger mb-4">UN 4G HAZMAT / FIBREBOARD BOX</h3>
                        <p class="text-dark mb-3">
                            UN 4G boxes are characterised by their double walls which hold and transport dangerous goods. Depending on the nature of goods being shipped, different types of UN 4G boxes may be used. For example, different boxes will be used to ship heavy duty batteries as opposed to adhesives. The designation of 4G alerts logistics personnel as to the contents of the hazmat box.
                        </p>
                        <p class="text-dark mb-3">
                            4G fibreboard boxes meet UN requirements under ICAO & IATA. Depending on the commodity being transported, different 4G fibreboard boxes are used. These include: battery shippers, metal paint cans, plastic jugs, plastic jerrican, drum pails, aerosol can and more. It should be noted that for a package to receive the 4G label, both the package and its contents must have been tested together beforehand.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid overflow-hidden mb-5 bg-white">
        <div class="container px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 facts-text wow fadeIn mt-5" data-wow-delay="0.1s">
                    <div class="h-100 px-4 ps-lg-0">
                        <span>VIEW OUR</span>
                        <h3 class="text-danger mb-4">DANGEROUS GOODS UN BOXES SPECIFICATIONS</h3>
                        <p class="text-dark mb-3">
                            We offer a range of materials and products for dangerous goods packaging which include U.N. boxes, hazardous labels as well as absorbent materials such as vermiculite.
                        </p>
                        <p class="text-dark mb-3">
                            Here are some sizes of certified U.N Fibreboard Boxes(4G/4GV) for dangerous goods packaging which are available:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-lg-5 mt-5">
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item position-relative team-item">
                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/icon/box9.jpg" alt="">
                    <h5 class="text-danger text-center">UN 4GV X9</h5>
                </div>
                <div class="testimonial-item position-relative team-item">
                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/icon/box11.jpg" alt="">
                    <h5 class="text-danger text-center">UN 4GV X11</h5>
                </div>
                <div class="testimonial-item position-relative team-item">
                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/icon/box21.jpg" alt="">
                    <h5 class="text-danger text-center">UN 4GV X21</h5>
                </div>
                <div class="testimonial-item position-relative team-item">
                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/icon/box25.jpg" alt="">
                    <h5 class="text-danger text-center">UN 4GV X25</h5>
                </div>
                <div class="testimonial-item position-relative team-item">
                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/icon/box30.jpg" alt="">
                    <h5 class="text-danger text-center">UN 4GV X30</h5>
                </div>
                <div class="testimonial-item position-relative team-item">
                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/icon/box35.jpg" alt="">
                    <h5 class="text-danger text-center">UN 4GV X35</h5>
                </div>
                <div class="testimonial-item position-relative team-item">
                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/icon/box51.jpg" alt="">
                    <h5 class="text-danger text-center">UN 4GV X51</h5>
                </div>
                <div class="testimonial-item position-relative team-item">
                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/icon/box52.jpg" alt="">
                    <h5 class="text-danger text-center">UN 4GV X52</h5>
                </div>
                <div class="testimonial-item position-relative team-item">
                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/icon/box60.jpg" alt="">
                    <h5 class="text-danger text-center">UN 4GV X60</h5>
                </div>
            </div>
            <img class="align-self-center mb-3 py-3 px-3" style="width: 100%;" src="template/img/icon/table.jpg" alt="">
        </div>
    </div>

@endsection
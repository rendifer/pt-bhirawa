@extends('template/main')

@section('contact')
    <a href="/contact" class="nav-item nav-link active">Contact Us</a>
@endsection

@section('content')
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-white">
                Contact Us
            </h4>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-danger">REACH US</h2>
                    <div class="row g-12">
                        <div class="col-sm-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded px-3 py-3">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon_1.png" alt="" style="width: 42%;">
                                    <h5 class="mb-0  text-danger">ADDRESS</h5>
                                    <p>Ruko kali malang square, Jl.KH Noer Ali Blok E.22, RT.007/RW.003, Pekayon Jaya, Bekasi Selatan, Bekasi City, West Java 17148</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-3 wow fadeIn" data-wow-delay="0.2s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded px-3" style="padding-bottom: 45%; padding-top: 6%;">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon_2.png" alt="" style="width: 42%;">
                                    <h5 class="mb-0  text-danger">EMAIL</h5>
                                    <p>chris@dg-idpackaging.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-3 wow fadeIn" data-wow-delay="0.3s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded px-3" style="padding-bottom: 45%; padding-top: 6%;">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon_3.png" alt="" style="width: 42%;">
                                    <h5 class="mb-0  text-danger">PHONE</h5>
                                    <p>+62 852-1694-1433</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.4s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded px-3" style="padding-bottom: 61%; padding-top: 6%;">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon_4.png" alt="" style="width: 42%;">
                                    <h5 class="mb-0  text-danger">SOCIAL MEDIA</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h3 class="mb-5 text-danger">NEED HELP? CONTACT US!</h3>
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
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d991.5294379190411!2d106.9773814!3d-6.2482108!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d7d65c78e09%3A0xb90fbb4c7d103f12!2sDG%20Packaging%20Indonesia%20-%20PT.%20Daya%20Guna%20Perkasa!5e0!3m2!1sid!2sid!4v1679394655666!5m2!1sid!2sid"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
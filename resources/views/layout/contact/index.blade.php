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
                    <h2 class="text-dark">REACH US</h2>
                    <div class="row g-12">
                        <div class="col-sm-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded px-3 py-3">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon_1.png" alt="" style="width: 42%;">
                                    <h5 class="mb-0  text-dark">ADDRESS</h5>
                                    <p>Ruko kali malang square, Jl.KH Noer Ali Blok E.22, RT.007/RW.003, Pekayon Jaya, Bekasi Selatan, Bekasi City, West Java 17148</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-3 wow fadeIn" data-wow-delay="0.2s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded px-3" style="padding-bottom: 45%; padding-top: 6%;">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon_2.png" alt="" style="width: 42%;">
                                    <h5 class="mb-0  text-dark">EMAIL</h5>
                                    <p>chris@dg-idpackaging.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-3 wow fadeIn" data-wow-delay="0.3s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded px-3" style="padding-bottom: 45%; padding-top: 6%;">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon_3.png" alt="" style="width: 42%;">
                                    <h5 class="mb-0  text-dark">PHONE</h5>
                                    <p>+62 852-1694-1433</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.4s">
                            <div class="bg-danger rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded px-3" style="padding-bottom: 61%; padding-top: 6%;">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon_4.png" alt="" style="width: 42%;">
                                    <h5 class="mb-0  text-dark">SOCIAL MEDIA</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <h3 class="mb-5 text-dark">NEED HELP? CONTACT US!</h3>
                    <form id="myForm" method="post" action="{{ route('contactUs') }}" >
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nama" placeholder="Your Name" name="nama">
                                    <label for="name">Your Name</label>
                                    @if ($errors->has('nama'))
                                        <span class="text-dark">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                                    <label for="email">Your Email</label>
                                    @if ($errors->has('email'))
                                        <span class="text-dark">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                                    <label for="subject">Subject</label>
                                    @if ($errors->has('subject'))
                                        <span class="text-dark">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                    @if ($errors->has('message'))
                                        <span class="text-dark">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3965.7937291979865!2d106.50316469371319!3d-6.2908197027734385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4207cf06758343%3A0x103107f0201610a5!2sPG53%2BM7G%2C%20Kutruk%2C%20Kec.%20Jambe%2C%20Kabupaten%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1688540858778!5m2!1sid!2sid" 
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@extends('template/main')

@section('contact')
    <a href="/contact" class="nav-item nav-link active">Contact Us</a>
@endsection

<style>
    /* Custom CSS to make the top and bottom borders even */
    .row.g-12 [class^="col"] {
        border-top: 1px solid #dee2e6;
        border-bottom: 1px solid #dee2e6;
        padding-top: 10px; /* Adjust this value as needed */
        padding-bottom: 10px; /* Adjust this value as needed */
    }
</style>

@section('content')
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-blue">
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
                            <div class="bg-primary rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center rounded px-3 py-3">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon_1.jpg" alt="" style="width: 42%;">
                                    <h5 class="mb-0  text-dark">FACTORY</h5>
                                    <p>kawasan industri Tigaraksa Sentosa Jl.Raya Kutruk,Kecamatan Jambe . Kabupaten Tangerang</p>
                                    <h5 class="mb-0  text-dark">OFFICE</h5>
                                    <p>Perumahan Taman Royal 1,Cluster Cendana. Jl.Cendana III No.02 Tanah Tinggi Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-3 wow fadeIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center rounded px-3" style="padding-bottom: 26%; padding-top: 6%;">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon_2.png" alt="" style="width: 42%;">
                                    <h5 class="mb-0  text-dark">EMAIL ADMIN</h5>
                                    <p><a href="mailto:sales@ptbhima.com">sales@ptbhima.com</a></p>
                                    <h5 class="mb-0  text-dark">EMAIL SALES</h5>
                                    <span><a href="mailto:ms4_pti@yahoo.com">ms4_pti@yahoo.com</a></span>
                                    <span><a href="mailto:dhony46@yahoo.com">dhony46@yahoo.com</a></span>
                                    <span><a href="mailto:sudianideni@ptbhima.com">sudianideni@ptbhima.com</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-3 wow fadeIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center rounded px-3" style="padding-bottom: 10%; padding-top: 6%;">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon_3.png" alt="" style="width: 42%;">
                                    <h5 class="mb-0  text-dark">PHONE SALES</h5>
                                    <span><b>DENI SUDAENI :</b><a href="https://wa.me/+6282114780437"> 0821-1478-0437</a> </span>
                                    <span><b>DHONI FAJAR :</b><a href="https://wa.me/+6285692414038"> 0856-9241-4038</a> </span>
                                    <span><b>BASONI SAIB :</b><a href="https://wa.me/+6287885081636"> 0878-8508-1636</a> </span>
                                    <span><b>MASFAR NOERDIN:</b><a href="https://wa.me/+628159920741"> 0815-9920-741</a> </span>
                                    <br>
                                    <h5 class="mb-0  text-dark">SALES ADMIN</h5>
                                    <p><b>SALES ADMIN : </b><a href="https://wa.me/+6289662027907"> 0896-6202-7907</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded p-1">
                                <div class="bg-white d-flex flex-column justify-content-center rounded px-3" style="padding-bottom: 47%; padding-top: 6%;">
                                    <img class="align-self-center mb-3" src="template/img/icon/icon_4.jpg" alt="" style="width: 60%;">
                                    <h5 class="mb-0  text-dark">SOCIAL MEDIA</h5>
                                    <p>pt.bhima metal mandiri </p>
                                    <p>pt.bhima metal mandiri.co.id</p>
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
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253810.80143529744!2d106.19826793670654!3d-6.290814037399815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4207cc6c4d1ab9%3A0x91646f8dfe6b0345!2sPT.%20Bhirawa%20Metal%20Mandiri!5e0!3m2!1sen!2sid!4v1691142187856!5m2!1sen!2sid" 
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       
                    </div>
                    <
            </div>
        </div>
    </div>

@endsection
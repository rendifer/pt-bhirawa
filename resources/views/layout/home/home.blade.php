@extends('template/main')

@section('home')
    <a href="/" class="nav-item nav-link active">Home</a>
@endsection

<style>
    .blue-text {
      color: rgb(243, 243, 248);
      background-color: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(5px);
    }
    .ptbhirawa {
        margin-top: -25%;
        text-align: center;
    }
    .more {
        text-align: center;
    }
</style>

@section('content')

    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="template/img/bg.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-12 text-center ">
                                    <h1 class="display-3 text-dark animated slideInDown ptbhirawa">PT. BHIRAWA METAL MANDIRI</h1>
                                    <a href="#details" class="btn btn-primary py-3 px-5 more">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-12" id="details">
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 mb-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-12 justify-content-center">
                        <h1 class="text-dark text-center">Products</h1>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/product/free standing/1 jadii.png" alt="">
                                    <h5 class="mb-0">Upskilling</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/Console-desk" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/product/hausing mrs/1jadi.png" alt="">
                                    <h5 class="mb-0">Upskilling</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/Console-desk" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/product/hausing trafo/1jadii.png" alt="">
                                    <h5 class="mb-0">Upskilling</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/Console-desk" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/product/panel server/1.jadii.png" alt="">
                                    <h5 class="mb-0">Upskilling</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/Locker" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-4 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/product/photo product/1.jadii.png" alt="">
                                    <h5 class="mb-0">Upskilling</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/Locker" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-4 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/product/panel mcc/1jadi.png" alt="">
                                    <h5 class="mb-0">Upskilling</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/Locker" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">Tisco Metal Manufacturing Co., Ltd</h1>
                    <p class="text-white mb-5">
                        Engineering yang profesional, Proses fabrikasi lembaran logam presisi sesuai spesifikasi; permesinan handal; Finishing dan Assembling yang berkualitas serta Quality Control yang ketat sesuai pengalaman kami dalam industri metalsheet guna mendukung dan memberikan kepuasan kepada para Pelanggan.
                    </p>
                    <div class="col-12">
                        <a href="/about" class="btn btn-primary text-white">View More</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn bg-blue" data-wow-delay="0.5s">
                    <img class="img-fluid" src="template/img/bg.png" alt="" >
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-dark">MAIN PRODUCTS</h1>
                    <h4 class="text-dark">Our products:</h4>
                    <p class="text-dark mb-5">
                        We are a large enterprise, with our own manufacturing plant, the main products are: carbon steel coil, carbon steel plate, seamless steel pipe, galvanized coil and so on. It is widely used in pipeline, chemical industry, aerospace, electric power, decoration, food processing, catering, brewing, machinery hardware, bridge construction and other fields. The company has more than 2000 employees, including 16 senior engineers and assistants, 20 engineering and technical personnel, 20 technical personnel. Our company provides heat treatment, CNC machining, testing, packaging and a series of processing technology.
                        We pay more attention to quality and after-sale service.Our products are widely used in the Chinese market, with a comprehensive annual production capacity of more than 200,000 tons.
                    <div class="col-12">
                        <a href="/about" class="btn btn-primary text-white">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid bg-light" data-wow-delay="0.1s">
        <div class="container">
            <div class="row hazmat">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="text-dark">PT. BHIRAWA METAL MANDIRI,</h1>
                    <h1 class="text-dark"> ENCLOUSURE & METALSHEET PRODUCTS;</h1>
                    <p class="text-dark">untuk mendukung kebutuhan anda,kami dengan senang hati akan memberikan harga yang kompetitive dari waktu delivery yag terbaik.silahkan kirimkan kebutuhan anda kepada kami.</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
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
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row">
        <h1 class="text-black text-center">Find Us</h1>
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                <div class="overflow-hidden h-100">
                    <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3965.7937291979865!2d106.50316469371319!3d-6.2908197027734385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4207cf06758343%3A0x103107f0201610a5!2sPG53%2BM7G%2C%20Kutruk%2C%20Kec.%20Jambe%2C%20Kabupaten%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1688540858778!5m2!1sid!2sid" 
                            frameborder="0" style="min-height: 500px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
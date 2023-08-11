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
    .oil{
        margin-bottom: 95px;
    }

    /* Hindari pemisahan baris pada elemen slideshow */
    #slideshow {
        white-space: nowrap;
    }
    #slideshowContainer {
        overflow: hidden; /* Tambahkan properti ini untuk menghindari gambar yang melampaui konten */
    }
    .slideshow-container {
    overflow: hidden;
    width: 100%;
    }

    .slideshow {
        display: flex;
        transition: transform 2s ease; /* Animasi transisi 2 detik dengan efek 'ease' (lebih lembut) */
    }
    @media (max-width: 600px) {
        .slideshow img {
            flex: 0 0 15%;
        }
    }
</style>
  

@section('content')

    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="template/img/1 jadi.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-12 text-center ">
                                    <h1 class="display-3 text-dark animated slideInDown ptbhirawa text-white">PT. BHIRAWA METAL MANDIRI</h1>
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

    <div class="container-xxl mb-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-12 justify-content-center">
                        <h1 class="text-dark text-center">Products</h1>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center py-3 px-3" style="width: 80%; height: 80%;" src="template/img/industrial/Picture5.png" alt="">
                                    <h5 class="mb-0">INDUSTRIAL</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="Industrial" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center py-3 px-3 oil" style="width: 100%; height: 100%;" src="template/img/oil/Picture2.png" alt="">
                                    <h5 class="mb-0">OIL & GAS </h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/oil and gas" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-5 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/telecomunication/Picture2.png" alt="">
                                    <h5 class="mb-0">TELECOMUNICATION</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/Telecominication" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/building/Picture1.png" alt="">
                                    <h5 class="mb-0">BUILD & INFRASTRUCTURE</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/Building & Infrastucture" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center mb-2 py-3 px-3" style="width: 60%; height: 60%;" src="template/img/electrical/Picture2.png" alt="">
                                    <h5 class="mb-0">ELECTRICAL UTILITY</h5>
                                    <br>

                                    <div class="col-12 mt-3">
                                        <a href="/electrical utility" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                                    <img class="align-self-center py-3 px-3" style="width: 130%; height: 200%; margin-bottom: 53%;" src="template/img/product/photo product/photo-001 2/2.jadii.png" alt="">
                                    <h5 class="mb-0">Office & Equitmen</h5>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <a href="/Office & Equitmen" class="btn btn-primary text-white">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <div class="container-fluid appointment  py-5 wow fadeIn" data-wow-delay="0.1s">
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
    </div> --}}

    <div class="container-fluid bg-light" data-wow-delay="0.1s">
        <div class="container">
            <div class="row hazmat">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="text-dark">PT. BHIRAWA METAL MANDIRI</h1>
                    <h1 class="text-dark"> Enclousure & MetalSheet Manufacturer </h1>
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
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                                    <label for="subject">Subject</label>
                                    @if ($errors->has('subject'))
                                        <span class="text-dark">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="notel" placeholder="Your Phone" name="notel">
                                    <label for="notel">Your Phone</label>
                                    @if ($errors->has('notel'))
                                        <span class="text-dark">{{ $errors->first('notel') }}</span>
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

    <div class="container-fluid bg-white mb-3" data-wow-delay="0.1s">
        <div class="container">
            <div class="row hazmat">
                <div class="col-lg-12 wow fadeIn text-center mb-3" data-wow-delay="0.3s">
                    <h2 class="text-dark">Our Clients</h2>
                    <h2 class="text-primary">PT. BHIRAWA METAL MANDIRI</h2>
                </div>
                <div class="col-lg-12 wow fadeIn text-center" data-wow-delay="0.3s">
                    <div class="">
                        <div id="slideshowContainer" class="slideshow-container">
                            <div id="slideshow" class="slideshow">
                                <img src="template/img/client/1.jpg" class="m-5 slide" width="7%" height="100%" alt="">
                                <img src="template/img/client/2.jpg" class="m-5 slide" width="7%" height="100%" alt="">
                                <img src="template/img/client/3.jpg" class="m-5 slide" width="7%" height="100%" alt="">
                                <img src="template/img/client/4.jpg" class="m-5 slide" width="7%" height="100%" alt="">
                                <img src="template/img/client/5.jpg" class="m-5 slide" width="7%" height="100%" alt="">
                                <img src="template/img/client/6.jpg" class="m-5 slide" width="7%" height="100%" alt="">
                                <img src="template/img/client/7.jpg" class="m-5 slide" width="7%" height="100%" alt="">
                                <img src="template/img/client/8.jpg" class="m-5 slide" width="7%" height="100%" alt="">
                                <img src="template/img/client/9.jpg" class="m-5 slide" width="7%" height="100%" alt="">
                                <img src="template/img/client/11.png" class="m-5 slide" width="7%" height="100%" alt="">
                            </div>
                        </div>                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container-fluid wow fadeIn" data-wow-delay="0.1s">
        <div class="row">
        <h1 class="text-black text-center mb-5">Find Us</h1>
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                <div class="overflow-hidden h-100">
                    <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253810.80143529744!2d106.19826793670654!3d-6.290814037399815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4207cc6c4d1ab9%3A0x91646f8dfe6b0345!2sPT.%20Bhirawa%20Metal%20Mandiri!5e0!3m2!1sen!2sid!4v1691142187856!5m2!1sen!2sid"
                            frameborder="0" style="min-height: 500px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mendapatkan elemen slideshow dan container
        var slideshowContainer = document.getElementById("slideshowContainer");
        var slideshow = document.getElementById("slideshow");
        
        // Fungsi untuk menggerakkan gambar ke kiri
        function moveLeft() {
            var imageWidth = slideshow.children[0].offsetWidth;
            slideshow.style.transform = "translateX(-" + imageWidth + "px)";
            
            setTimeout(function () {
                slideshow.style.transition = "none";
                slideshow.appendChild(slideshow.children[0]);
                slideshow.style.transform = "translateX(0)";
                setTimeout(function () {
                    slideshow.style.transition = "transform 2s ease"; // Ganti 2 dengan durasi animasi yang diinginkan
                }, 50);
            }, 2000); // Ganti 2000 dengan kecepatan animasi yang diinginkan (dalam milidetik)
        }
    
        // Fungsi untuk memulai animasi marquee
        function startMarquee() {
            setInterval(moveLeft, 2500); // Ganti 2500 dengan kecepatan animasi yang diinginkan (dalam milidetik)
        }
    
        // Mulai animasi marquee setelah semua gambar terload
        window.onload = startMarquee;
    </script>
    
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PT BHIRAWA METAL MANDIRI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet"> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('template/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .navbar-brand img {
          width: 150px;
          height: 100px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <img class="img-fluid me-3" src="template/img/logo2.png" alt="">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto rounded pe-4 py-3 py-lg-0">
                @section('home')
                    <a href="/" class="nav-item nav-link">Home</a>
                @show
                @section('about')
                    <a href="/about" class="nav-item nav-link">About Us</a>
                @show
                @section('Carrier')
                    <a href="#" class="nav-item nav-link">Carrier</a>
                @show
                @section('Services')
                    <a href="#" class="nav-item nav-link">Services</a>
                @show
                @section('project')
                    <a href="#" class="nav-item nav-link">project Reference</a>
                @show
                @section('solution')    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
                        <div class="dropdown-menu bg-light">
                            <ul>
                                {{-- <h6>PRODUCTS</h6> --}}
                                <a href="/oil and gas" class="dropdown-item">Oil & Gas</a>
                                <a href="/Industrial" class="dropdown-item">Industrial</a>
                                <a href="/Telecominication" class="dropdown-item">Telecominication</a>
                                <a href="/Building & Infrastucture" class="dropdown-item">Building & Infrastucture</a>
                                <a href="/electrical utility" class="dropdown-item">electrical utility</a>
                                <a href="/transportation" class="dropdown-item">transportation</a>
                            </ul>
                        </div>
                    </div>
                @show
                @section('contact')
                    <a href="/contact" class="nav-item nav-link">Contact Us</a>
                @show
                <a href="template/file/katalog-produk.pdf" download class="btn btn-primary nav-item nav-link text-white ms-" style="margin-left: 5px"
                ><span>katalog product</span>
                <i class="fas fa-download"></i>
              </a>
            </div>
        </div>
    </nav>

    @yield('content')

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog col-sm-4">
          <div class="modal-content">
            <div class="modal-header" style="background-color: green;">
                <h5 class="modal-title text-white" id="staticBackdropLabel"><i class="fa-brands fa-whatsapp"></i>   Start a Conversation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="margin-top: -2%;">The team typically replies in a few minutes</p>
                <a href="https://wa.me/+628971413088/">
                    <div class="border-5 border-start border-success" style="background-color: rgba(245, 239, 239, 0.93);">
                        <img src="template/img/icon/wa.png" style="width: 55px; margin: 10px;" alt="">DG Packaging
                        {{-- <img src="template/img/icon/icon-wa.png" class="" style="width: 30px; margin-left: 30%" alt=""> --}}
                    </div>
                </a>
                <a href="https://wa.me/+628971413088/">
                    <div class="mt-2 border-5 border-start border-success" style="background-color: rgba(245, 239, 239, 0.93);">
                        <img src="template/img/icon/wa.png" style="width: 55px; margin: 10px;" alt="">DG Packaging
                        {{-- <img src="template/img/icon/icon-wa.png" style="width: 30px; margin-left: 30%" alt=""> --}}
                    </div>
                </a>
            </div>
          </div>
        </div>
    </div>

    <div class="container-fluid appointment footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <img class="img-fluid me-3 logo2" src="template/img/logo1.png" alt="">
                    <!-- <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <h6 class="text-light">Factory</h6>
                    
                    <p><i class="fa fa-map-marker-alt me-3"></i>kawasan industri Tigaraksa Sentosa Jl.Raya Kutruk,Kecamatan Jambe . Kabupaten Tangerang </p>
                    <h6 class ="text-light">operational hour</h6>
                    <p><i class="fa-sharp fa-regular fa-clock me-3"></i>08.00 WIB - 17.00 WIB</p>
                    <h6 class="text-light">Office</h6>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Perumahan Taman Royal 1,Cluster Cendana. Jl.Cendana III No.02 Tanah Tinggi Tangerang </p>
                    <h6 class="text-light">Nomor telfon sales</h6>
                    <p><i class="fa fa-phone-alt me-3"></i><a href="tel:+622188965802">0812 9492 512 </a></p>

                    <p><i class="fa-brands fa-whatsapp me-3"></i><a href="https://wa.me/+62818880390/">0812 1478 0437</a></p>
                    <p><i class="fa fa-envelope me-3"></i><a href="mailto:chris@dg-idpackaging.com">chris@dg-idpackaging.com</a></p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="/">Home</a>
                    <a class="btn btn-link" href="/about">About Us</a>
                    <a href="#" class="btn btn-link">Carrier</a>
                    <a href="#" class="btn btn-link">Services</a>
                    <a href="#" class="btn btn-link">project Reference</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="btn btn-link nav-link" data-bs-toggle="dropdown">Product</a>
                        <div class="dropdown-menu bg-light">
                            <ul>
                                <a href="/oil and gas" class="dropdown-item">Oil & Gas</a>
                                <a href="/Industrial" class="dropdown-item">Industrial</a>
                                <a href="/Telecominication" class="dropdown-item">Telecominication</a>
                                <a href="/Building & Infrastucture" class="dropdown-item">Building & Infrastucture</a>
                                <a href="/electrical utility" class="dropdown-item">electrical utility</a>
                                <a href="/transportation" class="dropdown-item">transportation</a>
                            </ul>
                        </div>
                    </div>
                    <a class="btn btn-link" href="/contact">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright appointment text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                         Copyright 2023 &copy; PT. BHIRAWA METAL MANDIRI &#8211; 
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <a href="#" class="btn-lg-square whatsapp" data-bs-toggle="modal" data-bs-target="#myModal">
        <img src="template/img/icon/wa.png" alt="" class="wa-img">
    </a> --}}

    {{-- <a href="https://wa.me/+62818880390/" class="btn-lg-square whatsapp2" target="_blank">
        <img src="template/img/icon/wa.png" alt="" class="wa-img2">
        <span>Need Help? <b>Chat With Us</b></span>
    </a> --}}
     
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>

    <script src="{{ asset('template2/lib/wow2/wow.min.js') }}"></script>
    <script src="{{ asset('template2/lib/easing2/easing.min.js') }}"></script>
    <script src="{{ asset('template2/lib/waypoints2/waypoints.min.js') }}"></script>
    <script src="{{ asset('template2/lib/counterup2/counterup.min.js') }}"></script>
    <script src="{{ asset('template2/lib/owlcarousel2/owl.carousel.min.js') }}"></script>

    {{-- <script src="{{ asset('template2/js/main2.js') }}"></script> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>
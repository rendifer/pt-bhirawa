<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dangerous Goods Packaging Indonesia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('template/img/favicon.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet"> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('template/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('template2/img/favicon.ico') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('template2/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template2/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('template2/css/style.css') }}" rel="stylesheet"> --}}
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <img class="img-fluid me-3" src="template/img/icon/logo.png" alt="">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto bg-light rounded pe-4 py-3 py-lg-0">
                @section('home')
                    <a href="/" class="nav-item nav-link">Home</a>
                @show
                @section('about')
                    <a href="/about" class="nav-item nav-link">About Us</a>
                @show
                @section('solution')             
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Solution</a>
                        <div class="dropdown-menu bg-light">
                            <ul>
                                <h6>SERVICES</h6>
                                <a href="/Dangerous-Goods-Packaging-Service" class="dropdown-item">Dangerous Goods Packaging Service</a>
                                <a href="/biomedical-service" class="dropdown-item">Biomedical Services</a>
                                <a href="/Temperature-Sensitive-Packaging" class="dropdown-item">Temperature Sensitive Packaging</a>
                                <a href="/lithium-batteries-shipping" class="dropdown-item">Lithium Batteries Shipping</a>
                                <a href="/Dangerous-Goods-Training" class="dropdown-item">Dangerous Goods Training</a>
                            </ul>
                            <ul>
                                <h6>PRODUCTS</h6>
                                <a href="/dangerous-goods-un-boxes" class="dropdown-item">UN Boxes</a>
                                <a href="#" class="dropdown-item">DG Labels and Markings</a>
                                <a href="#" class="dropdown-item">Biomedical Packaging</a>
                                <a href="#" class="dropdown-item">Specialized Boxes</a>
                                <a href="#" class="dropdown-item">Other Packaging Materials</a>
                            </ul>
                        </div>
                    </div>
                @show
                @section('contact')
                    <a href="/contact" class="nav-item nav-link">Contact Us</a>
                @show
            </div>
        </div>
    </nav>

    @yield('content')

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color: green;">
                <h5 class="modal-title text-white" id="staticBackdropLabel"><i class="fa-brands fa-whatsapp"></i>   Start a Conversation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="margin-top: -2%;">The team typically replies in a few minutes</p>
                <div style="background-color: rgba(245, 239, 239, 0.93);">
                    <a href="https://wa.me/+628971413088/">
                        <img src="template/img/icon/wa.png" style="width: 55px; margin: 10px;" alt="">08971413088
                    </a>
                    <img src="template/img/icon/icon-wa.png" style="width: 30px; margin-left: 40%" alt="">
                </div>
                <div class="mt-2" style="background-color: rgba(245, 239, 239, 0.93);">
                    <a href="https://wa.me/+628971413088/">
                        <img src="template/img/icon/wa.png" style="width: 55px; margin: 10px;" alt="">08971413088
                    </a>
                    <img src="template/img/icon/icon-wa.png" style="width: 30px; margin-left: 40%" alt="">
                </div>
            </div>
          </div>
        </div>
    </div>

    {{-- <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s" style="margin-top: -4%;">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="template/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container py-5">
                            <div class="row g-5">
                                <div class="col-lg-3 col-md-6">
                                    <h1 class="text-white mb-4"><img class="img-fluid me-3" src="template/img/icon/icon-02-light.png" alt="">Insure</h1>
                                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita</p>
                                    <div class="d-flex pt-2">
                                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <h5 class="text-light mb-4">Address</h5>
                                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <h5 class="text-light mb-4">Quick Links</h5>
                                    <a class="btn btn-link" href="">About Us</a>
                                    <a class="btn btn-link" href="">Contact Us</a>
                                    <a class="btn btn-link" href="">Our Services</a>
                                    <a class="btn btn-link" href="">Terms & Condition</a>
                                    <a class="btn btn-link" href="">Support</a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <h5 class="text-light mb-4">Newsletter</h5>
                                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                                    <div class="position-relative mx-auto" style="max-width: 400px;">
                                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                                        <button type="button" class="btn btn-dark py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid copyright bg-danger text-white">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                        &copy; <a href="#" class="text-white">Your Site Name</a>, All Right Reserved.
                                    </div>
                                    <div class="col-md-6 text-center text-md-end">
                                        Designed By <a href="https://htmlcodex.com" class="text-white">HTML Codex</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid appointment footer wow fadeIn" data-wow-delay="0.1s" style="background-image: template/img/icon/icon-02-light.png">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <img class="img-fluid me-3" src="template/img/icon/logo.png" alt="">
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                {{-- <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-dark py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="container-fluid copyright appointment text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                         Copyright 2023 &copy; DG PACKAGING PTE LTD
                    </div>
                    {{-- <div class="col-md-6 text-center text-md-end">
                        Designed By <a href="https://htmlcodex.com" class="text-white">HTML Codex</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <a type="button" style="margin-bottom: 15%;" class="btn btn-success btn-lg-square whatsapp" data-bs-toggle="modal" data-bs-target="#myModal">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
     
    <a href="#" class="btn btn-lg btn-danger btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template2/lib/wow2/wow.min.js') }}"></script>
    <script src="{{ asset('template2/lib/easing2/easing.min.js') }}"></script>
    <script src="{{ asset('template2/lib/waypoints2/waypoints.min.js') }}"></script>
    <script src="{{ asset('template2/lib/counterup2/counterup.min.js') }}"></script>
    {{-- <script src="{{ asset('template2/lib/owlcarousel2/owl.carousel.min.js') }}"></script> --}}

    <script src="{{ asset('template2/js/main2.js') }}"></script>
</body>

</html>
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
        .flag-icon {
            width: 20px;
            height: 20px;
            display: inline-block;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .kosong{
            margin-top: -0%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <h5 class="" style="color: #14056a;">PT. BHIRAWA METAL MANDIRI</h5>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto rounded pe-4 py-3 py-lg-0">
                @section('home')
                    <a href="/" class="nav-item nav-link">{{ GoogleTranslate::trans('Home',\App::getLocale()) }}</a>
                @show
                @section('about')
                    <a href="/about" class="nav-item nav-link"> {{ GoogleTranslate::trans('About Us',\App::getLocale()) }}</a>
                @show
                @section('Carrier')
                    <a href="Carrier" class="nav-item nav-link"> {{ GoogleTranslate::trans('Career',\App::getLocale()) }}</a>
                @show
                @section('Services')
                    <a href="services" class="nav-item nav-link"> {{ GoogleTranslate::trans('Service',\App::getLocale()) }}</a>
                @show
                @section('project')
                    <a href="project-reference" class="nav-item nav-link"> {{ GoogleTranslate::trans('Project Reference',\App::getLocale()) }}</a>
                @show
                @section('solution')    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> {{ GoogleTranslate::trans('Product',\App::getLocale()) }}</a>
                        <div class="dropdown-menu bg-light">
                            <ul>
                                {{-- <h6>PRODUCTS</h6> --}}
                                <a href="/oil and gas" class="dropdown-item"> {{ GoogleTranslate::trans('Oil & Gas',\App::getLocale()) }}</a>
                                <a href="/Industrial" class="dropdown-item"> {{ GoogleTranslate::trans('Industrial',\App::getLocale()) }}</a>
                                <a href="/Telecominication" class="dropdown-item"> {{ GoogleTranslate::trans('Telecominication',\App::getLocale()) }}</a>
                                <a href="/Building & Infrastucture" class="dropdown-item"> {{ GoogleTranslate::trans('Building & Infrastucture',\App::getLocale()) }}</a>
                                <a href="/electrical utility" class="dropdown-item"> {{ GoogleTranslate::trans('electrical utility',\App::getLocale()) }}</a>
                                <a href="/Office & Equitmen" class="dropdown-item"> {{ GoogleTranslate::trans('office & equitment',\App::getLocale()) }}</a>
                                <a href="/service & installation system" class="dropdown-item"> {{ GoogleTranslate::trans('Service & Installation System',\App::getLocale()) }}</a>
                            </ul>
                        </div>
                    </div>
                @show
                @section('contact')
                    <a href="/contact" class="nav-item nav-link"> {{ GoogleTranslate::trans('Contact Us',\App::getLocale()) }}</a>
                @show
                {{-- <a href="template/file/katalog-produk.pdf" download class="btn btn-primary nav-item nav-link text-white ms-" style="margin-left: 5px"
                    ><span>katalog product</span>
                    <i class="fas fa-download"></i>
                </a> --}}
                <div class="">
                    <select class="form-select changeLanguage">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : ''}}>
                            <span class="flag-icon" style="background-image: url('template/img/en.jpg');" alt="English Flag"></span>
                            <i class="fa-sharp fa-solid fa-flag"></i>
                            English
                        </option>
                        <option value="in" {{ session()->get('locale') == 'in' ? 'selected' : ''}}>
                            <span class="flag-icon" style="background-image: url('template/img/in.png');" alt="Indonesian Flag"></span>
                            Indonesia
                        </option>
                    </select>               
                </div>                
            </div>
        </div>
    </nav>

    @yield('content')

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
                    <h5 class="text-light mb-4"><u> {{ GoogleTranslate::trans('Address',\App::getLocale()) }} </u></h5>
                    <h6 class="text-light">{{ GoogleTranslate::trans('Office',\App::getLocale()) }}</h6>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Perumahan Taman Royal 1,Cluster Cendana. Jl.Cendana III No.02 Tanah Tinggi Tangerang </p>                      
                    <p><i class="fa-solid fa-phone me-3"></i><a href="tel:+622155719624" class="text-light">(021- 5571- 9624) </a></p>
                    <h6 class="text-light">{{ GoogleTranslate::trans('Factory',\App::getLocale()) }}</h6>
                    <p><i class="fa fa-map-marker-alt me-3"></i>kawasan industri Tigaraksa Sentosa Jl.Raya Kutruk,Kecamatan Jambe . Kabupaten Tangerang </p>
                    <h6 class ="text-light">{{ GoogleTranslate::trans('Operational Hour',\App::getLocale()) }}</h6>
                    <p><i class="fa-solid fa-calendar-days me-3"></i>Senin - Jum'at</p>
                    <p><i class="fa-sharp fa-regular fa-clock me-3"></i>08.00 WIB - 17.00 WIB</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4"><u> {{ GoogleTranslate::trans('Quick Links',\App::getLocale()) }} </u></h5>
                    <a class="btn btn-link" href="/">{{ GoogleTranslate::trans('Home',\App::getLocale()) }}</a>
                    <a class="btn btn-link" href="/about"> {{ GoogleTranslate::trans('About Us',\App::getLocale()) }}</a>
                    <a href="Carrier" class="btn btn-link"> {{ GoogleTranslate::trans('Career',\App::getLocale()) }}</a>
                    <a href="services" class="btn btn-link"> {{ GoogleTranslate::trans('Service',\App::getLocale()) }}</a>
                    <a href="project-reference" class="btn btn-link"> {{ GoogleTranslate::trans('Project Reference',\App::getLocale()) }}</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="btn btn-link nav-link" data-bs-toggle="dropdown"> {{ GoogleTranslate::trans('Product',\App::getLocale()) }}</a>
                        <div class="dropdown-menu bg-light">
                            <ul>
                                <a href="/oil and gas" class="dropdown-item"> {{ GoogleTranslate::trans('Oil & Gas',\App::getLocale()) }}</a>
                                <a href="/Industrial" class="dropdown-item"> {{ GoogleTranslate::trans('Industrial',\App::getLocale()) }}</a>
                                <a href="/Telecominication" class="dropdown-item"> {{ GoogleTranslate::trans('Telecominication',\App::getLocale()) }}</a>
                                <a href="/Building & Infrastucture" class="dropdown-item"> {{ GoogleTranslate::trans('Building & Infrastucture',\App::getLocale()) }}</a>
                                <a href="/electrical utility" class="dropdown-item"> {{ GoogleTranslate::trans('Electrical Utility',\App::getLocale()) }}</a>
                                <a href="/Office & Equitmen" class="dropdown-item"> {{ GoogleTranslate::trans('Office & Equitmen',\App::getLocale()) }}</a>
                                <a href="/service & installation system" class="dropdown-item"> {{ GoogleTranslate::trans('Service & Installation System',\App::getLocale()) }}</a>
                            </ul>
                        </div>
                    </div>
                    <a class="btn btn-link" href="/contact"> {{ GoogleTranslate::trans('Contact Us',\App::getLocale()) }}</a>
                </div>
                <div class="col-lg-4 col-md-6">

                </div>
                <div class="col-lg-4 col-md-6 kosong">
                    <h6 class="text-light">{{ GoogleTranslate::trans('Phone Sales',\App::getLocale()) }} </h6>
                    <p><i class="fa-brands fa-whatsapp me-3"></i><a href="https://wa.me/+6282114780437" class ="text-light">0821-1478-0437 (DENI)</a></p>
                    <p><i class="fa-brands fa-whatsapp me-3"></i><a href="https://wa.me/+6285692414038" class ="text-light">0856-9241-4038 (DHONY)</a></p>
                    <p><i class="fa-brands fa-whatsapp me-3"></i><a href="https://wa.me/+6287885081636" class ="text-light">0878-8508-1636 (BASONI)</a></p>
                    <p><i class="fa-brands fa-whatsapp me-3"></i><a href="https://wa.me/+628159920741" class ="text-light">0815-9920-741 (MASFAR)</a></p>
                    <h6 class="text-light">Email</h6>
                    <p><i class="fa fa-envelope me-3"></i><a href="mailto:sales@ptbhima.com" class ="text-light" >sales@ptbhima.com</a></p>
                </div>
                <div class="col-lg-4 col-md-6 kosong">
                    <h6 class="text-light"> {{ GoogleTranslate::trans('Phone Sales Admin',\App::getLocale()) }}</h6>
                    <p><i class="fa-brands fa-whatsapp me-3"></i><a href="https://wa.me/+6289662027907" class ="text-light">0896-6202-7907</a></p>
                    <h6 class="text-light"> {{ GoogleTranslate::trans('Phone Engineering',\App::getLocale()) }}</h6>
                    <p><i class="fa-brands fa-whatsapp me-3"></i><a href="https://wa.me/+6289662027907" class ="text-light">0817-6761-112 (ARI)</a></p>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright appointment text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        {{ GoogleTranslate::trans('Copyright',\App::getLocale()) }} 2023 &copy; PT. BHIRAWA METAL MANDIRI &#8211; 
                    </div>
                </div>
            </div>
        </div>
    </div>
     
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

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $('.changeLanguage').change(function(event){
            var url = "{{ route('google.translate.change') }}";
            window.location.href = url+"?lang="+$(this).val()
        })
    </script>

</body>

</html>
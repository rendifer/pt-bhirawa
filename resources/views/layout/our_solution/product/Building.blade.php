@extends('template/main')

@section('solution')             
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle  active" data-bs-toggle="dropdown"> {{ GoogleTranslate::trans('Product',\App::getLocale()) }}</a>
    <div class="dropdown-menu bg-light">
        <ul>
            <a href="/oil and gas" class="dropdown-item"> {{ GoogleTranslate::trans('Oil & Gas',\App::getLocale()) }}</a>
            <a href="/Industrial" class="dropdown-item"> {{ GoogleTranslate::trans('Industrial',\App::getLocale()) }}</a>
            <a href="/Telecominication" class="dropdown-item"> {{ GoogleTranslate::trans('Telecominication',\App::getLocale()) }}</a>
            <a href="/building & Infrastucture" class="dropdown-item active"> {{ GoogleTranslate::trans('building & Infrastucture',\App::getLocale()) }}</a>
            <a href="/electrical utility" class="dropdown-item"> {{ GoogleTranslate::trans('electrical utility',\App::getLocale()) }}</a>
            <a href="/Office & Equitmen" class="dropdown-item"> {{ GoogleTranslate::trans('Office & Equitmen',\App::getLocale()) }}</a>
            <a href="/service & installation system" class="dropdown-item"> {{ GoogleTranslate::trans('Service & Installation System',\App::getLocale()) }}</a>
        </ul>
    </div>
</div>
@endsection  


<style>
    .testimonial-item {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .testimonial-item img {
      width: 50%;
      height: 50%;
    }
    .build2{
        margin-bottom: 110px;
    }
  </style>

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-blue">
                {{ GoogleTranslate::trans('building& Infrastucture',\App::getLocale()) }}
            </h4>
        </div>
    </div>

    <div class="container-xxl py-5 mb-5">
        <div class="container px-lg-5 mt-5">
            <div class="row g-5 justify-content-center">
                <h1 class="text-dark text-center">{{ GoogleTranslate::trans('Products',\App::getLocale()) }}</h1>
                <div class="col-md-4">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 70%; height: 70%;" src="template/img/building/Picture3.png" alt="">
                            <h5 class="text-primary text-center">MANLESS TICKET PARKING</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/building/Picture4.png" alt="">
                            <h5 class="text-primary text-center">WALL MOUNTING</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center py-3 px-3 build2" style="width: 100%; height: 100%;" src="template/img/building/Picture5.png" alt="">
                            <h5 class="text-primary text-center">WALL MOUNTING</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 95%; height: 95%;" src="template/img/building/Picture6.png" alt="">
                            <h5 class="text-primary text-center">HYDRANT BOX</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 95%; height: 95%;" src="template/img/building/Picture8.png" alt="">
                            <h5 class="text-primary text-center">HYDRANT BOX</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 95%; height: 95%;" src="template/img/building/Picture7.png" alt="">
                            <h5 class="text-primary text-center">HYDRANT BOX</h5>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-1">
                        <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/building/Picture1.png" alt="">
                            <h5 class="mb-0">OUTDOOR MARSHALLING KIOS IP 54</h5>
                        </div>
                    </div>
                </div> --}}
                <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-1">
                        <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                            <img class="align-self-center mb-2 py-3 px-3" style="width: 100%; height: 100%;" src="template/img/building/Picture2.png" alt="">
                            <h5 class="mb-0">OUTDOOR WALL MOUNTING IP 54</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center m-5">
            <a href="/contact" class="btn btn-primary">{{ GoogleTranslate::trans('more detail product',\App::getLocale()) }}</a>
        </div>
    </div>

@endsection
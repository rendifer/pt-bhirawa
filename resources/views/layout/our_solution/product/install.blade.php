@extends('template/main')

@section('solution')             
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle  active" data-bs-toggle="dropdown">{{ GoogleTranslate::trans('Product',\App::getLocale()) }}</a>
    <div class="dropdown-menu bg-light">
        <ul>
            <a href="/oil and gas" class="dropdown-item ">{{ GoogleTranslate::trans('Oil & Gas',\App::getLocale()) }}</a>
            <a href="/Industrial" class="dropdown-item">{{ GoogleTranslate::trans('Industrial',\App::getLocale()) }}</a>
            <a href="/Telecominication" class="dropdown-item">{{ GoogleTranslate::trans('Telecominication',\App::getLocale()) }}</a>
            <a href="/Building & Infrastucture" class="dropdown-item">{{ GoogleTranslate::trans('building & Infrastucture',\App::getLocale()) }}</a>
            <a href="/electrical utility" class="dropdown-item">{{ GoogleTranslate::trans('electrical utility',\App::getLocale()) }}</a>
            <a href="/Office & Equitment" class="dropdown-item">{{ GoogleTranslate::trans('Office & Equitmen',\App::getLocale()) }}</a>
            <a href="/service & installation system" class="dropdown-item active">{{ GoogleTranslate::trans('Service & Installation System',\App::getLocale()) }}</a>
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
    /* Jika ingin gambar tetap berada di tengah vertikal, tambahkan baris berikut */
    /* margin-top: auto;
    margin-bottom: auto; */
  }
</style>

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-blue">
                {{ GoogleTranslate::trans('Service and Installation System',\App::getLocale()) }}
            </h4>
        </div>
    </div>

    <div class="container-xxl py-5 mb-5">
        <div class="container px-lg-5 mt-5">
            <div class="row g-5 justify-content-center">
                <h1 class="text-dark text-center">{{ GoogleTranslate::trans('Products',\App::getLocale()) }}</h1>
                <div class="col-md-10">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 60%; height: 70%;" src="template/img/handlingservice/1.jpeg" alt="">
                            <h5 class="text-primary text-center">SERVICE & INSTALLATION</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 50%; height: 60%;" src="template/img/handlingservice/2.jpeg" alt="">
                            <h5 class="text-primary text-center">SERVICE & INSTALLATION</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 50%; height: 60%;" src="template/img/handlingservice/3.jpeg" alt="">
                            <h5 class="text-primary text-center">SERVICE & INSTALLATION</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 60%; height: 60%;" src="template/img/handlingservice/4.jpeg" alt="">
                            <h5 class="text-primary text-center">SERVICE & INSTALLATION</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 40%; height: 40%;" src="template/img/handlingservice/5.jpeg" alt="">
                            <h5 class="text-primary text-center">SERVICE & INSTALLATION</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 60%; height: 60%;" src="template/img/handlingservice/6.jpeg" alt="">
                            <h5 class="text-primary text-center">SERVICE & INSTALLATION</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 40%; height: 50%;" src="template/img/handlingservice/7.jpeg" alt="">
                            <h5 class="text-primary text-center">SERVICE & INSTALLATION</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center m-3">
            <a href="/contact" class="btn btn-primary">{{ GoogleTranslate::trans('more detail product',\App::getLocale()) }}</a>
        </div>
    </div>

@endsection
@extends('template/main')


@section('solution')             
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle  active" data-bs-toggle="dropdown">{{ GoogleTranslate::trans('Product',\App::getLocale()) }}</a>
    <div class="dropdown-menu bg-light">
        <ul>
            <a href="/oil and gas" class="dropdown-item">{{ GoogleTranslate::trans('Oil & Gas',\App::getLocale()) }}</a>
            <a href="/Industrial" class="dropdown-item">{{ GoogleTranslate::trans('Industrial',\App::getLocale()) }}</a>
            <a href="/Telecominication" class="dropdown-item">{{ GoogleTranslate::trans('Telecominication',\App::getLocale()) }}</a>
            <a href="/Building & Infrastucture" class="dropdown-item">{{ GoogleTranslate::trans('building & Infrastucture',\App::getLocale()) }}</a>
            <a href="/electrical utility" class="dropdown-item active">{{ GoogleTranslate::trans('electrical utility',\App::getLocale()) }}</a>
            <a href="/Office & Equitmen" class="dropdown-item">{{ GoogleTranslate::trans('Office & Equitmen',\App::getLocale()) }}</a>
            <a href="/service & installation system" class="dropdown-item">{{ GoogleTranslate::trans('Service & Installation System',\App::getLocale()) }}</a>
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
                {{ GoogleTranslate::trans('Electrical Utility',\App::getLocale()) }}
            </h4>
        </div>
    </div>

    <div class="container-xxl py-5 mb-5">
        <div class="container px-lg-5 mt-5">
            <div class="row g-5 justify-content-center">
                <h1 class="text-dark text-center">{{ GoogleTranslate::trans('Products',\App::getLocale()) }}</h1>
                <div class="col-md-6">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-5 py-3 px-3" style="width: 68%; height: 68%;" src="template/img/industrial/Picture4.png" alt="">
                            <br>
                            <h5 class="text-primary text-center">OUTDOOR CABIN</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-5 py-3 px-3" style="width: 68%; height: 68%;" src="template/img/industrial/Picture5.png" alt="">
                            <br>
                            <h5 class="text-primary text-center">OUTDOOR CABIN</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center mb-5 py-3 px-3" style="width: 68%; height: 68%;" src="template/img/industrial/Picture6.png" alt="">
                            <br>
                            <h5 class="text-primary text-center">OUTDOOR CABIN</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center py-3 px-3" style="width: 50%; height: 50%;" src="template/img/electrical/Picture1.png" alt="">
                            <h5 class="text-primary text-center">SWING PANEL</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center py-3 px-3" style="width: 40%; height: 40%;" src="template/img/electrical/Picture2.png" alt="">
                            <h5 class="text-primary text-center">SWING PANEL</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-1">
                        <div class="d-flex flex-column justify-content-center text-center team-item py-4 px-3">
                            <img class="align-self-center mb-3 py-3 px-3" style="width: 60%; height: 100%;" src="template/img/building/Picture1.png" alt="">
                            <h5 class="mb-0 text-primary">OUTDOOR MARSHALLING KIOS IP 54</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center py-3 px-3" style="width: 60%; height: 60%;" src="template/img/electrical/1.png" alt="">
                            <h5 class="text-primary text-center"> MCC</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center py-3 px-3" style="width: 60%; height: 60%;" src="template/img/electrical/2.png" alt="">
                            <h5 class="text-primary text-center">MCC</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center py-3 px-3" style="width: 60%; height: 60%;" src="template/img/electrical/3.png" alt="">
                            <h5 class="text-primary text-center">MCC</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center py-3 px-3" style="width: 60%; height: 60%;" src="template/img/electrical/4.png" alt="">
                            <h5 class="text-primary text-center">MCC</h5>
                        </div>
                        <div class="testimonial-item position-relative team-item">
                            <img class="align-self-center py-3 px-3" style="width: 60%; height: 60%;" src="template/img/electrical/5.png" alt="">
                            <h5 class="text-primary text-center">MCC</h5>
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
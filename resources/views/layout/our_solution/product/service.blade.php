@extends('template/main')

@section('v')
<a href="service" class="nav-item nav-link active">Services</a>
@endsection

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-blue">
                Services
            </h4>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="mb-3">Services <span class="text-primary">Our Products</span></h2>
            </div>
            <div class="row g-12">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                  <h2>Proses Pemotongan</h2>
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                            <div class="carousel-item active">
                              <div class="col-lg-4 col-md-6" >
                                <img class="img-fluid  mb-4" src="template/img/client/1.jpg" width="62%" alt="">
                                <p>LOCKER AND OFFICE EQUITMENT</p>
                              </div>
                            </div>
                      </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                  <h2>Proses Pemotongan</h2>
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                            <div class="carousel-item active">
                              <div class="col-lg-4 col-md-6" >
                                <img class="img-fluid  mb-4" src="template/img/client/1.jpg" width="62%" alt="">
                                <p>LOCKER AND OFFICE EQUITMENT</p>
                              </div>
                            </div>
                      </div>
              </div>
          </div>
              
              
        </div>
              
                <!-- Previous and Next buttons -->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
@extends('template/main')

@section('Services')
<a href="service" class="nav-item nav-link active">Services</a>
@endsection

<style>
  /* Style adjustments to center the video */
  .modal-body {
      display: flex;
      justify-content: center;
  }
  .video-fluid {
      max-width: 100%;
      height: auto;
  }
</style>

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
          <!-- ...Other content... -->
          <div class="row g-12">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <h4 class="text-center">Proses Pemotongan</h4>
                      <div class="carousel-inner">
                          <!-- Slide 1 -->
                          <div class="carousel-item active">
                              <div class="row g-6">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="text-center p-4 center-image d-flex align-items-center">
                                          <img class="img-fluid m-4" src="template/img/service/potong/1.jpeg" width="100%" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="row g-6">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="text-center p-4 center-image d-flex align-items-center">
                                          <img class="img-fluid m-4" src="template/img/service/potong/2.jpeg" width="100%" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                            <div class="row g-6">
                                <div class="col-lg-12 col-md-6">
                                    <div class="text-center p-4 center-image d-flex align-items-center position-relative">
                                        <!-- Add the image -->
                                        <img class="img-fluid" src="template/img/service/potong/1.jpeg" alt="Image">
                        
                                        <!-- Add a play button to start the modal -->
                                        <button type="button" class="btn btn-primary position-absolute top-50 start-50 translate-middle" data-toggle="modal" data-target="#videoModal">
                                            Play Video
                                        </button>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <!-- Modal -->
                          <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                      <div class="modal-body">
                                          <video class="video-fluid" controls>
                                              <source src="template/img/service/potong/3.mp4" type="video/mp4">
                                              Your browser does not support the video tag.
                                          </video>
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
                      <!-- Add an empty div to create space between the carousel and the buttons -->
                      <div class="carousel-empty-div"></div>
                      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div id="punch" class="carousel slide" data-ride="carousel">
                  <h4 class="text-center">Proses puch</h4>
                    <div class="carousel-inner">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="row g-6">
                                <div class="col-lg-12 col-md-6">
                                    <div class="text-center p-4 center-image d-flex align-items-center">
                                        <img class="img-fluid m-4" src="template/img/service/punch/1.jpeg" width="100%" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-6">
                                <div class="col-lg-12 col-md-6">
                                    <div class="text-center p-4 center-image d-flex align-items-center">
                                        <img class="img-fluid m-4" src="template/img/service/punch/2.jpeg" width="100%" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row g-6">
                              <div class="col-lg-12 col-md-6">
                                  <div class="text-center p-4 center-image d-flex align-items-center position-relative">
                                      <!-- Add the image -->
                                      <img class="img-fluid" src="template/img/service/punch/3.jpeg" alt="Image">
                      
                                      <!-- Add a play button to start the modal -->
                                      <button type="button" class="btn btn-primary position-absolute top-50 start-50 translate-middle" data-toggle="modal" data-target="#punch1">
                                          Play Video
                                      </button>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="punch1" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <video class="video-fluid" controls>
                                            <source src="template/img/service/punch/4.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row g-6">
                              <div class="col-lg-12 col-md-6">
                                  <div class="text-center p-4 center-image d-flex align-items-center position-relative">
                                      <!-- Add the image -->
                                      <img class="img-fluid" src="template/img/service/punch/1.jpeg" alt="Image">
                      
                                      <!-- Add a play button to start the modal -->
                                      <button type="button" class="btn btn-primary position-absolute top-50 start-50 translate-middle" data-toggle="modal" data-target="#punch2">
                                          Play Video
                                      </button>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="punch2" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <video class="video-fluid" controls>
                                            <source src="template/img/service/punch/5.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>

                    <!-- Previous and Next buttons -->
                    <a class="carousel-control-prev" href="#punch" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <!-- Add an empty div to create space between the carousel and the buttons -->
                    <div class="carousel-empty-div"></div>
                    <a class="carousel-control-next" href="#punch" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                  <div id="las" class="carousel slide" data-ride="carousel">
                    <h4 class="text-center">Proses Mengelas</h4>
                      <div class="carousel-inner">
                          <!-- Slide 1 -->
                          <div class="carousel-item active">
                              <div class="row g-6">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="text-center p-4 center-image d-flex align-items-center">
                                          <img class="img-fluid m-4" src="template/img/service/las/1.jpeg" width="100%" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="row g-6">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="text-center p-4 center-image d-flex align-items-center">
                                          <img class="img-fluid m-4" src="template/img/service/las/2.jpeg" width="100%" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                            <div class="row g-6">
                                <div class="col-lg-12 col-md-6">
                                    <div class="text-center p-4 center-image d-flex align-items-center position-relative">
                                        <!-- Add the image -->
                                        <img class="img-fluid" src="template/img/service/las/1.jpeg" alt="Image">
                        
                                        <!-- Add a play button to start the modal -->
                                        <button type="button" class="btn btn-primary position-absolute top-50 start-50 translate-middle" data-toggle="modal" data-target="#ladvd">
                                            Play Video
                                        </button>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <!-- Modal -->
                          <div class="modal fade" id="ladvd" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                      <div class="modal-body">
                                          <video class="video-fluid" controls>
                                              <source src="template/img/service/las/4.mp4" type="video/mp4">
                                              Your browser does not support the video tag.
                                          </video>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        
                      </div>
  
                      <!-- Previous and Next buttons -->
                      <a class="carousel-control-prev" href="#las" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <!-- Add an empty div to create space between the carousel and the buttons -->
                      <div class="carousel-empty-div"></div>
                      <a class="carousel-control-next" href="#las" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                  <div id="tekuk" class="carousel slide" data-ride="carousel">
                    <h4 class="text-center">Proses Menekuk</h4>
                      <div class="carousel-inner">
                          <!-- Slide 1 -->
                          <div class="carousel-item active">
                              <div class="row g-6">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="text-center p-4 center-image d-flex align-items-center">
                                          <img class="img-fluid m-4" src="template/img/service/tekuk/1.jpeg" width="100%" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="row g-6">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="text-center p-4 center-image d-flex align-items-center">
                                          <img class="img-fluid m-4" src="template/img/service/tekuk/2.jpeg" width="100%" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="row g-6">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="text-center p-4 center-image d-flex align-items-center">
                                          <img class="img-fluid m-4" src="template/img/service/tekuk/3.jpeg" width="100%" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="row g-6">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="text-center p-4 center-image d-flex align-items-center">
                                          <img class="img-fluid m-4" src="template/img/service/tekuk/4.jpeg" width="100%" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                            <div class="row g-6">
                                <div class="col-lg-12 col-md-6">
                                    <div class="text-center p-4 center-image d-flex align-items-center position-relative">
                                        <!-- Add the image -->
                                        <img class="img-fluid" src="template/img/service/tekuk/1.jpeg" alt="Image">
                        
                                        <!-- Add a play button to start the modal -->
                                        <button type="button" class="btn btn-primary position-absolute top-50 start-50 translate-middle" data-toggle="modal" data-target="#menekuk">
                                            Play Video
                                        </button>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <!-- Modal -->
                          <div class="modal fade" id="menekuk" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                      <div class="modal-body">
                                          <video class="video-fluid" controls>
                                              <source src="template/img/service/tekuk/5.mp4" type="video/mp4">
                                              Your browser does not support the video tag.
                                          </video>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        
                      </div>
  
                      <!-- Previous and Next buttons -->
                      <a class="carousel-control-prev" href="#tekuk" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <!-- Add an empty div to create space between the carousel and the buttons -->
                      <div class="carousel-empty-div"></div>
                      <a class="carousel-control-next" href="#tekuk" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                  <div id="" class="carousel slide" data-ride="carousel">
                    <h4 class="text-center">assembling proccesing </h4>

                              <div class="row g-6">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="text-center p-4 center-image d-flex align-items-center">
                                          <img class="img-fluid m-4" src="template/img/service/rakit/foto1.jpeg" width="100%" alt="">
                                      </div>
                                  </div>
                                </div>
                  </div>

              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                  <div id="" class="carousel slide" data-ride="carousel">
                    <h4 class="text-center">coating proccesing </h4>

                              <div class="row g-6">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="text-center p-4 center-image d-flex align-items-center">
                                          <img class="img-fluid m-4" src="template/img/service/tekuk/1.jpeg" width="100%" alt="">
                                      </div>
                                  </div>
                                </div>
                  </div>

              </div>
              <div class="col-sm-12 wow fadeIn justify-content-center" data-wow-delay="0.1s">
                  <div id="finis" class="carousel slide" data-ride="carousel">
                    
                    <h4 class="text-center">Finishing</h4>
                      <div class="carousel-inner">
                          <!-- Slide 1 -->
                          <div class="carousel-item active">
                              <div class="row g-6">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="text-center p-4 center-image d-flex align-items-center">
                                          <img class="img-fluid m-4" src="template/img/service/finis/1.jpeg" width="100%" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="row g-6">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="text-center p-4 center-image d-flex align-items-center">
                                          <img class="img-fluid m-4" src="template/img/service/finis/2.jpeg" width="100%" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="row g-6">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="text-center p-4 center-image d-flex align-items-center">
                                          <img class="img-fluid m-4" src="template/img/service/finis/3.jpeg" width="100%" alt="">
                                      </div>
                                       <!-- Add a play button to start the modal -->
                                       <button type="button" class="btn btn-primary position-absolute top-50 start-50 translate-middle" data-toggle="modal" data-target="#finising">
                                        Play Video
                                    </button>
                                  </div>
                              </div>
                          </div>

                          <!-- Modal -->
                          <div class="modal fade" id="finising" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                      <div class="modal-body">
                                          <video class="video-fluid" controls>
                                              <source src="template/img/service/finis/4.mp4" type="video/mp4">
                                              Your browser does not support the video tag.
                                          </video>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        
                      </div>
  
                      <!-- Previous and Next buttons -->
                      <a class="carousel-control-prev" href="#finis" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <!-- Add an empty div to create space between the carousel and the buttons -->
                      <div class="carousel-empty-div"></div>
                      <a class="carousel-control-next" href="#finis" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>
          </div>
      </div>
    </div>
  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
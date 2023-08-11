@extends('template/main')

@section('project')
<a href="project-reference" class="nav-item nav-link active">Project Reference</a>
@endsection

<style>
  .project-list-content {
    display: none;
    border-top: 2px solid #007bff;
    padding: 20px;
    border-radius: 0 0 10px 10px;
  }

  .project-list-button.clicked + .project-list-content {
      display: block;
  }
</style>

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-blue">
                Project Reference
            </h4>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="mb-3">Projects <span class="text-primary">Our Clients</span></h2>
            </div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <!-- Slide 1 -->
                  <div class="carousel-item active">
                    <div class="row g-4">
                      <div class="col-lg-4 col-md-6" >
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                          <div class="text-center p-4">
                            <img class="img-fluid mb-4" src="template/img/product/photo product/photo-001 2/2.png" width="38%" alt="">
                            <p>LOCKER AND OFFICE EQUITMENT</p>
                            <a href="javascript:void(0);" class="btn btn-primary text-white project-list-button mb-3">Project List</a>
                            <div class="project-list-content">
                              <ul>
                                <li>
                                  <p> <b>PT. 2.BHIRAWA METAL</b> </p>
                                </li>
                                <li>
                                  <p> <b>PT. 2.BHIRAWA METAL</b> </p>
                                </li>
                                <li>
                                  <p> <b>PT. 2.BHIRAWA METAL</b> </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6" >
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                          <div class="text-center p-4">
                            <img class="img-fluid  mb-4" src="template/img/electrical/1.png" width="60%" alt="">
                            <p>MCC PANEL , MV AND LV PANEL FOR INDUSTRI</p>
                            <a href="javascript:void(0);" class="btn btn-primary text-white project-list-button mb-3">Project List</a>
                            <div class="project-list-content">
                              <ul>
                                <li>
                                  <p> <b>PT. 2.BHIRAWA METAL</b> </p>
                                </li>
                                <li>
                                  <p> <b>PT. 2.BHIRAWA METAL</b> </p>
                                </li>
                                <li>
                                  <p> <b>PT. 2.BHIRAWA METAL</b> </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6" >
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                          <div class="text-center p-4">
                            <img class="img-fluid  mb-4" src="template/img/industrial/Picture4.png" width="70%" alt="">
                            <p>OUTDOOR CABIN  </p>
                            <a href="javascript:void(0);" class="btn btn-primary text-white project-list-button mb-3">Project List</a>
                            <div class="project-list-content">
                              <ul>
                                <li>
                                  <p> <b>PT. 2.BHIRAWA METAL</b> </p>
                                </li>
                                <li>
                                  <p> <b>PT. 2.BHIRAWA METAL</b> </p>
                                </li>
                                <li>
                                  <p> <b>PT. 2.BHIRAWA METAL</b> </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="carousel-item">
                    <div class="row g-4">
                      <div class="col-lg-4 col-md-6" >
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                          <div class="text-center p-4">
                            <img class="img-fluid  mb-4" src="template/img/client/4.jpg" width="42%" alt="">
                            <p>MV AND LV PANEL FOR INDUSTRI</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6" >
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                          <div class="text-center p-4">
                            <img class="img-fluid  mb-4" src="template/img/oil/Picture1.png" width="35%" alt="">
                            <p>MRS PRODUCT </p>
                            <a href="javascript:void(0);" class="btn btn-primary text-white project-list-button mb-3">Project List</a>
                            <div class="project-list-content">
                              <ul>
                                <li>
                                  <p> <b>PT. 2.BHIRAWA METAL</b> </p>
                                </li>
                                <li>
                                  <p> <b>PT. 2.BHIRAWA METAL</b> </p>
                                </li>
                                <li>
                                  <p> <b>PT. 2.BHIRAWA METAL</b> </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6" >
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                          <div class="text-center p-4">
                            <img class="img-fluid  mb-4" src="template/img/client/6.jpg" width="40%" alt="">
                            <p>MV AND LV PANEL FOR INDUSTRI</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="row g-12">
                      <div class="col-lg-3 col-md-6" >
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                          <div class="text-center p-4">
                            <img class="img-fluid  mb-4" src="template/img/client/7.jpg" width="20%" alt="">
                            <p>CONTROL AND PROTECTION RELAY FOR PROJECT PLN (GARDU INDUK PLN ) , SERVICE & SUPPORTING SYSTEM : HANDLING & INSTALLATION PANEL (GARDU INDUK JABODETABEK)</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6" >
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden" style="padding-bottom: 13%;">
                          <div class="text-center p-4">
                            <img class="img-fluid  mb-4" src="template/img/client/8.jpg" width="40%" alt="">
                            <p>LOCKER AND OFFICE EQUITMENT</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6" >
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden"  style="padding-bottom: 14%;">
                          <div class="text-center p-4">
                            <img class="img-fluid" src="template/img/client/9.jpg" width="40%" style="margin-bottom: 21%;" alt="">
                            <p>LOCKER AND OFFICE EQUITMENT</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6" >
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden"  style="padding-bottom: 14%;">
                          <div class="text-center p-4">
                            <img class="img-fluid" src="template/img/client/11.png" width="40%" style="margin-bottom: 21%;" alt="">
                            <p>MCC PANEL</p>
                          </div>
                        </div>
                      </div>
                      <!-- Add more slides here -->
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

    <script>
      document.addEventListener("DOMContentLoaded", function () {
          const projectListButtons = document.querySelectorAll(".project-list-button");

          projectListButtons.forEach(button => {
              button.addEventListener("click", function () {
                  this.classList.toggle("clicked");
              });
          });
      });
    </script>
@endsection
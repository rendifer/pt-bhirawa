@extends('template/main')

@section('Carrier')
    <a href="/Carrier" class="nav-item nav-link active">Carrier</a>
@endsection

<style>
    .team-item {
    display: flex;
    align-items: center;
    }

    /* Untuk tampilan mobile */
    @media (max-width: 767px) {
        .team-item {
            flex-direction: column;
            align-items: flex-start;
        }
    }
    .team-item {
  display: flex;
  align-items: center;
}

/* Untuk tampilan mobile */
@media (max-width: 767px) {
  .team-item {
    flex-direction: column;
    align-items: flex-start;
  }

  .team-item img {
    margin-top: 10px; /* Tambahkan margin atas untuk mengatur jarak antara teks dan gambar */
    width: 100%; 
  }
}
</style>

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-blue">
                Carrier
            </h4>
        </div>
    </div>

    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-12 align-items-end">
          <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="p-1">
              <div class="d-flex flex-column py-4 px-3">
                <h3 class="text-primary">PT. BHIRAWA METAL MANDIRI</h3>
                <span class="ms-5">Enclosure & Metal Sheet Manufacture</span>
              </div>
            </div>
          </div>
          <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="p-1 d-flex justify-content-end">
              <div class="d-flex flex-column">
                <img class="img-fluid" src="template/img/logo1.png" alt="" width="80%" style="margin-top: -10%;">
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="col-lg-12 wow fadeInUp mb-5" data-wow-delay="0.1s">
        <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
            <div class="p-0 d-flex justify-content-end">
                <div class="d-flex flex-column text-end py-5 px-5">
                    <h5 class="" style="color: #14056a;">A BETTER WORLD</h5>
                    <h5 class="" style="color: #14056a;">BEGINS WITH YOU</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-12">
                        <div class="d-flex flex-column ">
                            <h5 class="text-dark">With energy, drive and a spirit of collaboration, </h5>
                            <h5 class="text-dark">there are no limits to what we can achieve together.</h5>
                            <h5 class="text-dark mb-5">Better still, there are no limits on the legacy you can leave while working for PT. BHIRAWA METAL MANDIRI.</h5>
                            <h5 class="text-dark">Please send your application letter, CV dan recent photograph to :.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-12">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column team-item py-4 px-3">
                                    <img src="template/img/panah/interview.png" alt="" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column mt-4">
                                    <h3 class="text-primary">PT. BHIRAWA METAL MANDIRI</h3>
                                    <h6>Perumahan Taman Royal 1,Cluster Cendana. Jl.Cendana III No.02 Tanah Tinggi Tangerang</h6>
                                    <h6> <b>Telp</b>     : 021- 5571- 9624</h6>
                                    <h6> <b>Email</b>    : sugiyarno@ptbhima.com</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
@endsection
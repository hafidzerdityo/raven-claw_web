@extends('template.master')

@section('main-content')
          <!-- Page Content -->
  <main id="main">

    <!-- Content-->
    <section class="container-fluid" id="form_pengajuan">

      <!-- Breadcrumbs-->
      <nav class="mb-4 pb-2 border-bottom" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('tambah_pengajuan')}}"><i class="ri-home-line align-bottom me-1"></i> Tambah Pengajuan</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tables</li>
          </ol>
      </nav>      
      <!-- / Breadcrumbs-->

      <div class="row g-4">
        <div class="col-12" >
            <div class="card mb-4">
                <div class="card-header justify-content-between align-items-center d-flex">
                    <h6 class="card-title m-0">Form Pengajuan Program Kerja</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('post_tambah_pengajuan')}}" method="POST">
                        @csrf

                        <div class="row">
                          <!-- left side -->
                          <div class="col-12 col-md-6">
                            <!-- PPK -->
                            <div class="mb-3">
                              <label for="name" class="form-label">Pemilik Program Kerja</label>
                              <input type="hidden" name="username" value="{{ Session::has('user')? (Session::get('user')['username']):"" }}" >
                              <input type="text" class="form-control" name="name" placeholder="" value="{{ Session::has('user')? (Session::get('user')['name']):"" }}" readonly>
                            </div>

                            <!-- DIvisi -->
                            <div class="mb-3">
                              <label for="name" class="form-label">Divisi</label>
                              <input type="text" class="form-control" name="divisi"  placeholder="" value="{{ Session::has('user')? (Session::get('user')['divisi']):"" }}" readonly>
                            </div>

                            <!-- Manajer -->
                            <div class="mb-3">
                              <label for="" class="form-label">Bagian (Manajer)</label>
                              <input type="text" class="form-control" name="manajer" id="manajer" placeholder="Nama Manajer (opsional)" value="">
                            </div>

                            <!--Aktivitas -->
                            <div class="mb-3">
                              <label for="" class="form-label">Aktivitas</label>
                              <textarea required class="form-control" name="aktivitas" id="" placeholder="judul program kerja" height="200px;"></textarea>
                            </div> 

                          </div>
                          <!-- end of left side -->

                          <!-- right side -->
                          <div class="col-12 col-md-6">
                            <div class="row">
                              <div class="col-12 col-md-5">
                                <div class="mb-3">
                                  <label for="" class="form-label">Due Quarter</label>
                                  <select required class="form-control form-select" name="due_quarter" id="due_quarter">
                                    <option class="form-control" value="Q1">Q1 (Januari - April)</option>
                                    <option class="form-control" value="Q2">Q2 (Mei - Agustus)</option>
                                    <option value="form-control" value="Q3">Q3 (September - Desmber)</option>
                                  </select>
                                </div> 
                              </div>
                              <div class="col-12 col-md-7">
                                <div class="mb-3">
                                  <label for="" class="form-label">Due Date</label>
                                  <input type="date" class="form-control" name="due_date" id="due_date">
                                </div> 
                              </div>
                            </div>

                            <!-- Kategori Pengajuan -->
                            <div class="mb-3">
                              <label for="" class="form-label">Kategori</label>
                              <select required class="form-select form-control mb-3" name="kategori" id="kategori" aria-label="example">
                                <option selected>Pilih kategori biaya</option>
                                <option class="form-control" value="capex">CAPEX</option>
                                <option class="form-control" value="opex">OPEX</option>
                              </select>
                            </div>

                            <!-- Mitra -->
                            <div class="mb-3">
                              <label for="" class="form-label">Metode Pengadaan</label>
                              <select required class="form-control form-select" name="metode" id="metode">
                                <option class="form-control" value="Pelelangan Terbuka">Pelelangan Terbuka</option>
                                <option class="form-control" value="Pelelangan Terbatas">Pelelangan Terbatas</option>
                                <option value="form-control" value="Pemilihan Langsung">Pemilihan Langsung</option>
                                <option value="form-control" value="Pembelian Langsung">Pembelian Langsung</option>
                                <option value="form-control" value="Peunjukan Langsung">Penunjukan Langsung</option>
                              </select>
                            </div>

                            <!-- BSU -->
                            <div class="row">
                              <div class="col-12 col-md-5">
                                <div class="mb-3">
                                  <label for="" class="form-label">BSU Fix</label>
                                  <select required class="form-control form-select" name="bsu_kategori" id="bsu_kategori">
                                    <option selected>Pilih BSU</option>
                                    <option class="form-control" value="fluktuatif">Fluktuatif</option>
                                    <option class="form-control" value="fix">Fix</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-md-7">
                                <div class="mb-3">
                                  <label for="" class="form-label">Nominal BSU Fix</label>
                                  <input readonly type="number" class="form-control" name="bsu_fix" id="bsu_fix" placeholder="Rp" value="">
                                </div>
                              </div>
                            </div>
                            <!-- end BSU -->

                            <!-- Mitra -->
                            <div class="mb-3">
                              <label for="" class="form-label">Mitra</label>
                              <input type="text" class="form-control" name="mitra" id="mitra" placeholder="Mitra (opsional)" value="">
                            </div>
                          </div>
                        </div>

                        <hr>

                        <div class="row">
                          <div class="col-12 col-lg-6">
                            <!-- Kajian Teknis -->
                            <div class="mb-3">
                              <label for="" class="form-label">Kajian Teknis</label>
                              <input type="file" class="form-control" name="file_kajian_teknis" id="file_kajian_teknis" placeholder="upload file  .PDF" value="">
                            </div>
                            <!-- end kajian teknis -->

                            <!-- TOR -->
                            <div class="mb-3">
                              <label for="" class="form-label">Term Of Reference</label>
                              <input type="file" class="form-control" name="file_tor" id="file_tor" placeholder="upload file .PDF" value="">
                            </div>
                            <!-- end TOR -->
                          </div>

                          <div class="col-12 col-lg-6">
                            <!-- EE -->
                            <div class="mb-3">
                              <label for="" class="form-label">Engineering Estimate</label>
                              <input type="file" class="form-control" name="file_ee" id="file_ee" placeholder="upload file.PDF" value="">
                            </div>
                            <!-- end EE -->

                            <!-- Pakta Integritas -->
                            <div class="mb-3">
                              <label for="" class="form-label">Pakta Integritas</label>
                              <input type="file" class="form-control" name="file_pakta_integritas" id="file_pakta_integritas" placeholder="upload file .PDF" value="">
                            </div>
                            <!-- end Pakta Integritas -->
                          </div>
                        </div>

                        {{-- <div class="mb-3 mt-2 form-check">
                            <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Saya sudah memeriksa pengajuan dengan teliti</label>
                        </div> --}}
                        <button type="submit" class="btn button4 btn-primary btn-block">Kirim Pengajuan</button>
                    </form>
                </div>
            </div>
        </div>
      </div>

      <!-- Default Example Offcanvas Import-->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div>
              Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
            </div>
            <div class="dropdown mt-3">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                Dropdown button
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          </div>
        </div>
      <!-- Navbar Notifications offcanvas-->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNotifications"
        aria-labelledby="offcanvasNotificationsLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNotificationsLabel">Notifications</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
      
          <!-- Notification-->
          <div class="d-flex justify-content-start align-items-start p-3 rounded bg-light mb-3">
            <div class="position-relative mt-1 ">
              <picture class="avatar avatar-sm">
                <img src="./assets/images/profile-small-2.jpeg"
                  alt="HTML Bootstrap Admin Template by Pixel Rocket">
              </picture>
              <span
              class="dot bg-success avatar-dot border-light dot-sm"></span>
            </div>
            <div class="ms-4">
              <p class="fw-bolder mb-1">John Jackson</p>
              <p class="text-muted small mb-0">Just sent over regional sales. If you can let me know by the end...</p>
              <span class="fs-xs fw-bolder text-muted text-uppercase">5 mins ago</span>
            </div>
          </div>
          <!-- / Notification-->
      
          <!-- Notification-->
          <div class="d-flex justify-content-start align-items-start p-3 rounded bg-light mb-3">
            <div class="position-relative mt-1 ">
              <picture class="avatar avatar-sm">
                <img src="./assets/images/profile-small-3.jpeg"
                  alt="HTML Bootstrap Admin Template by Pixel Rocket">
              </picture>
              <span
              class="dot bg-success avatar-dot border-light dot-sm"></span>
            </div>
            <div class="ms-4">
              <p class="fw-bolder mb-1">Peter Smith</p>
              <p class="text-muted small mb-0">Hi Rob, can we setup a meeting for tomorrow around 2pm...</p>
              <span class="fs-xs fw-bolder text-muted text-uppercase">30 mins ago</span>
            </div>
          </div>
          <!-- / Notification-->
      
          <!-- Notification-->
          <div class="d-flex justify-content-start align-items-start p-3 rounded bg-light mb-3">
            <div class="position-relative mt-1 ">
              <picture class="avatar avatar-sm">
                <img src="./assets/images/profile-small-4.jpeg"
                  alt="HTML Bootstrap Admin Template by Pixel Rocket">
              </picture>
              <span
              class="dot bg-danger avatar-dot border-light dot-sm"></span>
            </div>
            <div class="ms-4">
              <p class="fw-bolder mb-1">Helen Lewis</p>
              <p class="text-muted small mb-0">Need to arrange for this year's Office lisences. Have to add two team licenses...</p>
              <span class="fs-xs fw-bolder text-muted text-uppercase">43 mins ago</span>
            </div>
          </div>
          <!-- / Notification-->
      
          <!-- View all Btn-->
          <a href="#" class="btn btn-outline-secondary w-100 mt-4" role="button">View all notifications</a>
          <!-- / View all btn-->
      
        </div>
      </div>      
      <!-- / Footer-->

    </section>
    <!-- / Content-->

  </main>
  <!-- /Page Content -->


@endsection
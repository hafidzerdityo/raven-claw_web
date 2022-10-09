@extends('template.master')

@section('main-content')
          <!-- Page Content -->
  <main id="main">

    <!-- Content-->
    <section class="container-fluid" id="detail_pengajuan">

      <!-- Breadcrumbs-->
      <nav class="mb-4 pb-2 border-bottom" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_detail_pengajuan', 'order35353')}}"><i class="ri-home-line align-bottom me-1"></i> Detail Pengajuan</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tables</li>
          </ol>
      </nav>      
      <!-- / Breadcrumbs-->

      <div class="row g-4">
        <div class="col-12" >
            <div class="card mb-4">
                <div class="card-header justify-content-between align-items-center d-flex">
                    <h6 class="card-title m-0">Detail Program Kerja</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <!-- Order ID -->
                            <tr>
                                <th scope="row">No Pengajuan</th>
                                <td></td>
                            </tr>

                            <!-- Divisi -->
                            <tr>
                                <th scope="row">Divisi</th>
                                <td></td>
                            </tr>

                            <!-- PPK -->
                            <tr>
                                <th scope="row">Pemilik Program Kerja (PPK)</th>
                                <td></td>
                            </tr>

                            <!-- Manajer-->
                            <tr>
                                <th scope="row">Bagian (Manajer)</th>
                                <td></td>
                            </tr>
                            
                            <!-- Aktivitas -->
                            <tr>
                                <th scope="row">Aktivitas</th>
                                <td></td>
                            </tr>

                            <!-- Kategori -->
                            <tr>
                                <th scope="row">Kategori</th>
                                <td></td>
                            </tr>
                            
                            <!-- Metode pengadaan -->
                            <tr>
                                <th scope="row">Metode Pengadaan</th>
                                <td></td>
                            </tr>
                            
                            <!-- Mitra -->
                            <tr>
                                <th scope="row">Mitra</th>
                                <td></td>
                            </tr>
                            
                            <!-- Due Quater-Date -->
                            <tr>
                                <th scope="row">Due Quarter-Date</th>
                                <td></td>
                            </tr>
                            
                            <!-- BSU -->
                            <tr>
                                <th scope="row">BSU</th>
                                <td></td>
                            </tr>
                            
                            <!-- File kajian teknis -->
                            <tr>
                                <th scope="row">Dokumen Kajian Teknis</th>
                                <td></td>
                            </tr>
                            
                            <!-- File TOR -->
                            <tr>
                                <th scope="row">Dokumen TOR</th>
                                <td></td>
                            </tr>
                            
                            <!-- File EE -->
                            <tr>
                                <th scope="row">Dokumen EE</th>
                                <td></td>
                            </tr>
                            
                            <!-- No SPK PKS -->
                            <tr>
                                <th scope="row">No SPK dan PKS</th>
                                <td></td>
                            </tr>
                            
                            <!-- Progress -->
                            <tr>
                                <th scope="row">Progress</th>
                                <td></td>
                            </tr>
                            
                            <!-- posisi akhir -->
                            <tr>
                                <th scope="row">Posisi Akhir</th>
                                <td></td>
                            </tr>
                            
                            <!-- status -->
                            <tr>
                                <th scope="row">Status</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
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
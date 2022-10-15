@extends('template.master')

@section('main-content')
    <!-- Page Content -->
    <main id="main" class="main-dashboard">
        <!-- Content-->
        <section class="container-fluid zzi" id="dashboard">

            <!-- Breadcrumbs-->
            <nav class="mb-4 border-bottom" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.html"><i class="ri-home-line align-bottom me-1"></i> Dashboard</a></li>
                  </ol>
            </nav>            
            <!-- / Breadcrumbs-->   

            <!-- Card statistik -->
            <div class="row">
                <div class="col-6 col-lg-3 my-2">
                    <div class="card card-blue">
                        <div class="card-body">
                            <h1 class="text-bold-800">43</h1>
                            <p>On Progress</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-2">
                    <div class="card card-yellow">
                        <div class="card-body">
                            <h1 class="text-bold-800">3</h1>
                            <p>Pending</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-2">
                    <div class="card card-green">
                        <div class="card-body">
                            <h1 class="text-bold-800">90</h1>
                            <p>Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-2">
                    <div class="card card-red">
                        <div class="card-body">
                            <h1 class="text-bold-800">43</h1>
                            <p>On Progress</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Anggaran -->
            <div class="row justify-content-center my-5">
                <div class="col-12">
                    <div class="card w-100 border card-border">
                        <div class="card-header text-center">
                            <h4>Penyerapan Anggaran</h4>
                        </div>
                        <div class="card-body">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <td class="">Information Technology Architecture, Infrastructure and Security</td>
                                        <td>Rp678.908.000</td>
                                    </tr>
                                    <tr>
                                        <td class="">Application Operation</td>
                                        <td>Rp256.987.000</td>
                                    </tr>
                                    <tr>
                                        <td class="">Information Technology Strategy and Governance</td>
                                        <td>Rp453.775.000</td>
                                    </tr>
                                    <tr>
                                        <td class="">Development Operation and Security</td>
                                        <td>Rp124.075.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Word cloud dan statistik -->
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="card card-border h-100">
                        <div class="card-header">
                            <h5 class="card-title text-center">Word Cloud</h5>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('../../../assets/images/word-cloud.png')}}" alt="" width="100%" height="auto" class="my-3">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="card card-border h-100">
                        <div class="card-header justify-content-between align-items-center">
                            <h5 class="card-title text-center">Persentase Total Pengajuan</h5>
                            {{-- <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                <div class="chart chart-lg">
                                        <canvas id="chartSalesRegion"></canvas>
                                    </div>        
                                </div>
                                <div class="col-5">
                                    <div class="align-items-center mb-2">
                                        <p class="fw-bolder mb-1">ITAIS</p>
                                        <div class="d-flex align-items-center">
                                            <span class="dot dot-xs bg-info d-block me-2"></span>
                                            <span class="small text-muted">23 Pengajuan</span>
                                        </div>
                                    </div>
                        
                                    <div class="align-items-center mb-2">
                                        <p class="fw-bolder mb-1">AO</p>
                                        <div class="d-flex align-items-center">
                                            <span class="dot dot-xs bg-success d-block me-2"></span>
                                            <span class="small text-muted">12 Pengajuan</span>
                                        </div>
                                    </div>
                        
                                    <div class="align-items-center mb-2">
                                        <p class="fw-bolder mb-1">ITSG</p>
                                        <div class="d-flex align-items-center">
                                            <span class="dot dot-xs bg-warning d-block me-2"></span>
                                            <span class="small text-muted">16 Pengajuan</span>
                                        </div>
                                    </div>
                                    <div class="align-items-center">
                                        <p class="fw-bolder mb-1">DEVOPS</p>
                                        <div class="d-flex align-items-center">
                                            <span class="dot dot-xs bg-danger d-block me-2"></span>
                                            <span class="small text-muted">9 Pengajuan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>

            <div class="row my-5">
                <div class="col">
                    <div class="card card-border mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center">
                            <h5 class="card-title text-center">Prediksi Anggaran</h5>
                            {{-- <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropDownConversions" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropDownConversions">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center">
                                    <h4 class="fs-3 fw-bold mb-0 me-3">55%</h4>
                                    <span class="badge bg-success-faded text-success">+ 23%</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <span class="dot dot-xs bg-primary me-2"></span>
                                        <span class="small text-muted">2021</span>
                                    </div>
                                    <div class="d-flex align-items-center ms-4">
                                        <span class="dot dot-xs bg-light me-2"></span>
                                        <span class="small text-muted">2020</span>
                                    </div>
                                    <div class="d-flex align-items-center ms-4">
                                        <span class="dot dot-xs bg-light me-2"></span>
                                        <span class="small text-muted">2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart">
                                <div class="chart chart-lg">
                                    <canvas id="chartYearlyIncome"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Row Widgets-->

            <!-- Sidebar Menu Overlay-->
            <div class="menu-overlay-bg"></div>
            <!-- / Sidebar Menu Overlay-->
            

            
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
        </section>
        <!-- / Content-->

    </main>
    <!-- /Page Content -->
@endsection

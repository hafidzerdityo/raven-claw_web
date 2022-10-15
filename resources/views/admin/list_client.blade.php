@extends('template.master')

@section('main-content')
  <!-- Page Content -->
  <main id="main">

    <!-- Content-->
    <section class="container-fluid">

      <!-- Breadcrumbs-->
      <nav class="mb-4 pb-2 border-bottom" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.html"><i class="ri-home-line align-bottom me-1"></i> List Client</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tables</li>
          </ol>
      </nav>      <!-- / Breadcrumbs-->

      <!-- Page Title-->
      <div class="d-flex justify-content-between mb-3">
        <h2 class="fs-4 mb-2 mr-auto">List Client</h2>
        <button class="btn-primary btn button4 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#modalAddClient">
          <i class="ri-add-line me-2"></i><span>Tambah Client</span>
        </button>
      </div>

      <div class="row g-4">
        <div class="col-12">

          <!-- Example-->
          <div class="card mb-4">
            @if (empty($result))
                <p>Belum ada client. Tambahkan baru dengan klik tombol "Tambah"</p>
            @else
              <table class="table table-striped table-yellow">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Role</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($result['data'] as $data)
                  <tr>
                    <td>{{ $data['name'] }}</td>
                    <td>{{ $data['divisi'] }}</td>
                    <td>{{ $data['role'] }}</td>
                    <td>{{ $data['username'] }}</td>
                    <td>{{ $data['password'] }}</td>
                    <td>
                      <div class="d-flex">
                        <button class="btn btn-sm btn-outline-blue" data-bs-toggle="modal" data-bs-target="#modalDetailClient"><i class="ri-eye-fill m-auto"></i></button>

                        <button class="btn btn-sm btn-outline-green mx-2" data-bs-toggle="modal" data-bs-target="#modalEditClient"><i class="ri-edit-fill"></i></button>

                        <button class="btn btn-sm btn-outline-red" data-bs-toggle="modal" data-bs-target="#modalDeleteClient"><i class="ri-delete-bin-fill"></i></button>
                        <div class="modal fade" id="modalDeleteClient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header border-bottom">
                                  <h5>Warning!</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                  <div class="modal-body text-center">
                                    <p>Delete Procurement?</p>
                                  </div>
                                  <div class="modal-footer ">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-primary">Yes</button>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach                    
                </tbody>
              </table>
            @endif
          </div>
          <!-- /Example-->

        </div>
      </div>
      
      <!-- Sidebar Menu Overlay-->
      <div class="menu-overlay-bg"></div>
      <!-- / Sidebar Menu Overlay-->

      <!-- Default Example Modal Import-->
      <!-- Modal -->
      <div class="modal fade" id="modalAddClient" tabindex="-1" aria-labelledby="modalAddClient" aria-hidden="true">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalAddClient">Add New Client</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- PPK -->
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="hidden" name="username" value="">
                  <input type="text" class="form-control" name="name" placeholder="" value="">
                </div>

                <!-- DIvisi -->
                <div class="mb-3">
                  <label for="name" class="form-label">Divisi</label>
                  <input type="text" class="form-control" name="divisi"  placeholder="" value="">
                </div>

                <!-- DIvisi -->
                <div class="mb-3">
                  <label for="name" class="form-label">Role</label>
                  <select name="role" id="role" class="form-select">
                    <option value="client">Client</option>
                    <option value="admin">Admin</option>
                  </select>
                </div>

                <!-- Manajer -->
                <div class="mb-3">
                  <label for="" class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="username (akses login)" value="">
                </div>

                <!--Aktivitas -->
                <div class="mb-3">
                  <label for="" class="form-label">Password</label>
                  <input type="text" class="form-control" placeholder="password (akses login)">
                </div> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Save Data</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalDetailClient" tabindex="-1" aria-labelledby="modalAddClient" aria-hidden="true">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalAddClient">Detail Client</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- PPK -->
                <div class="row">
                  <div class="col">
                    <label for="name" class="form-label">Name</label>
                  </div>
                  <div class="col">
                    <p>Hanggoro Feriawan</p>
                  </div>
                </div>

                <!-- DIvisi -->
                <div class="row">
                  <div class="col">
                    <label for="name" class="form-label">Divisi</label>
                  </div>
                  <div class="col">
                    <p>Devops</p>
                  </div>
                </div>

                <!-- DIvisi -->
                <div class="row">
                  <div class="col">
                    <label for="name" class="form-label">Role</label>
                  </div>
                  <div class="col">
                    <p>Client</p>
                  </div>
                </div>

                <!-- Manajer -->
                <div class="row">
                  <div class="col">
                    <label for="" class="form-label">Username</label>
                  </div>
                  <div class="col">
                    <p>hanggoro</p>
                  </div>
                </div>

                <!--Aktivitas -->
                <div class="row">
                  <div class="col">
                    <label for="" class="form-label">Password</label>
                  </div>
                  <div class="col">
                    <p>devopsvp11</p>
                  </div>
                </div> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Save Data</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalEditClient" tabindex="-1" aria-labelledby="modalAddClient" aria-hidden="true">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalAddClient">Edit Client</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- PPK -->
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="hidden" name="username" value="">
                  <input type="text" class="form-control" name="name" placeholder="" value="">
                </div>

                <!-- DIvisi -->
                <div class="mb-3">
                  <label for="name" class="form-label">Divisi</label>
                  <input type="text" class="form-control" name="divisi"  placeholder="" value="">
                </div>

                <!-- DIvisi -->
                <div class="mb-3">
                  <label for="name" class="form-label">Role</label>
                  <select name="role" id="role" class="form-select">
                    <option value="client">Client</option>
                    <option value="admin">Admin</option>
                  </select>
                </div>

                <!-- Manajer -->
                <div class="mb-3">
                  <label for="" class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="username (akses login)" value="">
                </div>

                <!--Aktivitas -->
                <div class="mb-3">
                  <label for="" class="form-label">Password</label>
                  <input type="text" class="form-control" placeholder="password (akses login)">
                </div> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Save Data</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Offcanvas Imports-->
      <!-- Place your offcanvas imports here-->
      
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
      </div>      <!-- / Footer-->

    </section>
    <!-- / Content-->

  </main>
  <!-- /Page Content -->
@endsection
    <!-- Page Aside-->
    <aside class="aside bg-dark-700">
        <div class="simplebar-wrapper">
            <div data-pixr-simplebar>
                <div class="pb-6 pb-sm-0 position-relative">
    
                    <!-- Mobile close btn-->
                    <div class="cursor-pointer close-menu me-4 text-primary-hover transition-color disable-child-pointer position-absolute end-0 top-0 mt-3 pt-1 d-xl-none">
                        <i class="ri-close-circle-line ri-lg align-middle me-n2"></i>
                    </div>
                    <!-- / Mobile close btn-->
    
                    <!-- User Details-->
                    <div class="border-bottom pt-3 pb-5 mb-6 d-flex flex-column align-items-center">
                        <div class="position-relative">
                            <picture class="avatar avatar-profile">
                                <img class="avatar-profile-img" src="./assets/images/profile-small.jpeg">
                            </picture>
                            <span class="dot bg-success avatar-dot"></span>
                        </div>
                        <p class="mb-0 mt-3 text-white">{{ Session::get('user')['username'] }}</p>
                        <small>{{ Session::get('user')['divisi']}}</small>
                        <div class="d-flex flex-wrap mt-2 justify-content-between align-items-center">
                            <div class="py-2 f-h-9 px-3 d-flex justify-content-center align-items-center bg-dark-opacity rounded p-2 small fw-bolder me-1">
                                <i class="ri-map-pin-line me-2"></i> Sarijadi, Kota Bandung
                            </div>
    
                            <!-- User profile dropdown-->
                            <div class="dropdown m-0">
                                <button class="border-0 rounded px-2 f-h-9 bg-dark-opacity p-0 text-body" type="button" id="profileDropdown"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ri-settings-2-line"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                  <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-user-line me-2"></i> Edit
                                      profile</a></li>
                                  <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-settings-2-line me-2"></i> Edit
                                      settings</a></li>
                                  <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-mail-open-line me-2"></i> View
                                      messages</a></li>
                                  <li>
                                    <hr class="dropdown-divider">
                                  </li>
                                  <li><a class="dropdown-item text-danger d-flex align-items-center" href="{{ route('logout')}}"><i
                                        class="ri-lock-line me-2"></i>Logout</a></li>
                                </ul>
                              </div>
                            <!-- / User profile dropdown-->
                        </div>
                    </div>
                    <!-- User Details-->
    
                    @if (Session::get('user')['role']=='admin')
                        <ul class="list-unstyled mb-6 aside-menu">
                            <li class="menu-section">Menu ADMIN</li>
                            <li class="menu-item">
                                <a class="d-flex align-items-center menu-link" href="{{ url('/')}}"><i class="ri-home-4-line me-3"></i> <span>Dashboard</span></a>
                            </li>
                            <li class="menu-item">
                                <a class="d-flex align-items-center menu-link" href="{{ route('admin_list_pengajuan')}}"><i class="ri-home-4-line me-3"></i> <span>List Pengajuan</span></a>
                            </li>
                            <li class="menu-item">
                                <a class="d-flex align-items-center menu-link" href="{{ route('admin_riwayat_pengajuan')}}"><i class="ri-home-4-line me-3"></i> <span>Riwayat Pengajuan</span></a>
                            </li>
                            <li class="menu-item">
                                <a class="d-flex align-items-center menu-link" href="{{ route('admin_list_client')}}"><i class="ri-home-4-line me-3"></i> <span>List Client</span></a>
                            </li>
                            <li class="menu-section mt-5">
                                <a class="" href="{{ url('login')}}"><i class="ri-home-4-line me-3"></i> <span>Logout</span></a>
                            </li>
                        </ul>
                    @else 
                    <ul class="list-unstyled mb-6 aside-menu">
                        <li class="menu-section">Menu CLIENT</li>
                        <li class="menu-item">
                            <a class="d-flex align-items-center menu-link" href="{{ url('/')}}"><i class="ri-home-4-line me-3"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="menu-item">
                            <a class="d-flex align-items-center menu-link" href="{{ route('tambah_pengajuan')}}"><i class="ri-home-4-line me-3"></i> <span>Tambah Pengajuan</span></a>
                        </li>
                        <li class="menu-item">
                            <a class="d-flex align-items-center menu-link" href="{{ route('client_list_pengajuan')}}"><i class="ri-home-4-line me-3"></i> <span>List Pengajuan</span></a>
                        </li>
                        <li class="menu-section mt-5">
                            <a class="" href="{{ route('logout')}}"><i class="ri-home-4-line me-3"></i> <span>Logout</span></a>
                        </li>
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    
    </aside>    
    <!-- / Page Aside-->
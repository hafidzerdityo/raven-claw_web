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
                        <small>odaythere@posindonesia.com</small>
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
                                  <li><a class="dropdown-item text-danger d-flex align-items-center" href="#"><i
                                        class="ri-lock-line me-2"></i> Logout</a></li>
                                </ul>
                              </div>
                            <!-- / User profile dropdown-->
                        </div>
                    </div>
                    <!-- User Details-->
    
                    <ul class="list-unstyled mb-6 aside-menu">
    
                        <!-- Dashboard Menu Section-->
                        <li class="menu-section">Menu</li>
                        <li class="menu-item">
                            <a class="d-flex align-items-center menu-link" href="{{ url('/')}}"><i class="ri-home-4-line me-3"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="menu-item">
                            <a class="d-flex align-items-center menu-link" href="{{ url('form')}}"><i class="ri-home-4-line me-3"></i> <span>Form Pengajuan</span></a>
                        </li>
                        <li class="menu-item">
                            <a class="d-flex align-items-center menu-link" href="{{ url('list_pengajuan')}}"><i class="ri-home-4-line me-3"></i> <span>List Pengajuan</span></a>
                        </li>
                        <li class="menu-item">
                            <a class="d-flex align-items-center menu-link" href="{{ url('riwayat_pengajuan')}}"><i class="ri-home-4-line me-3"></i> <span>Riwayat Pengajuan</span></a>
                        </li>
                        <li class="menu-item">
                            <a class="d-flex align-items-center menu-link" href="{{ url('list_client')}}"><i class="ri-home-4-line me-3"></i> <span>List Client</span></a>
                        </li>
                        <li class="menu-section mt-5">
                            <a class="" href="{{ url('login')}}"><i class="ri-home-4-line me-3"></i> <span>Logout</span></a>
                        </li>
                        
                        <!-- / Dashboard Menu Section-->
    
                        <!-- UI Kit Menu Section-->
                        {{-- <li class="menu-section mt-5">UI Kit</li>
                        <li class="menu-item"><a class="d-flex align-items-center collapsed  menu-link" href="#"
                                data-bs-toggle="collapse" data-bs-target="#collapseMenuItemUI" aria-expanded="false"
                                aria-controls="collapseMenuItemUI"><i class="ri-shape-fill me-3"></i>
                                <span>Components</span></a>
                            <div class="collapse" id="collapseMenuItemUI">
                                <ul class="submenu">
                                    <li><a class="submenu-link" href="./accordion.html">Accordion</a></li>
                                    <li><a class="submenu-link" href="./alert.html">Alert</a></li>
                                    <li><a class="submenu-link" href="./badge.html">Badge</a></li>
                                    <li><a class="submenu-link" href="./button.html">Button</a></li>
                                    <li><a class="submenu-link" href="./card.html">Card</a></li>
                                    <li><a class="submenu-link" href="./collapse.html">Collapse</a></li>
                                    <li><a class="submenu-link" href="./dropdown.html">Dropdown</a></li>
                                    <li><a class="submenu-link" href="./modal.html">Modal</a></li>
                                    <li><a class="submenu-link" href="./offcanvas.html">Offcanvas</a></li>
                                    <li><a class="submenu-link" href="./pagination.html">Pagination</a></li>
                                    <li><a class="submenu-link" href="./popover.html">Popovers</a></li>
                                    <li><a class="submenu-link" href="./progress.html">Progress</a></li>
                                    <li><a class="submenu-link" href="./tooltip.html">Tooltips</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item"><a class="d-flex align-items-center collapsed menu-link" href="#"
                                data-bs-toggle="collapse" data-bs-target="#collapseMenuItemContent" aria-expanded="false"
                                aria-controls="collapseMenuItemContent"><i class="ri-stack-line me-3"></i>
                                <span>Content</span></a>
                            <div class="collapse" id="collapseMenuItemContent">
                                <ul class="submenu">
                                    <li><a class="submenu-link" href="./tables.html">Tables</a></li>
                                    <li><a class="submenu-link" href="./forms.html">Forms</a></li>
                                </ul>
                            </div>
                        </li> --}}
                        <!-- / UI Kit Menu Section-->
    
                        <!-- Pages Menu Section-->
                        {{-- <li class="menu-section mt-5">Logout</li>
                        <li class="menu-item"><a class="d-flex align-items-center collapsed menu-link" href="#"
                                data-bs-toggle="collapse" data-bs-target="#collapseMenuItemPages" aria-expanded="false"
                                aria-controls="collapseMenuItemPages"><i class="ri-pencil-line me-3"></i> <span>Pages</span></a>
                            <div class="collapse" id="collapseMenuItemPages">
                                <ul class="submenu">
                                    <li><a class="submenu-link" href="./login.html">Login</a></li>
                                    <li><a class="submenu-link" href="./register.html">Register</a></li>
                                    <li><a class="submenu-link" href="./forgot-password.html">Forgot Password</a></li>
                                    <li><a class="submenu-link" href="./404.html">404 Page</a></li>
                                    <li><a class="submenu-link" href="./blank.html">Blank Page</a></li>
                                </ul>
                            </div>
                        </li> --}}
                        <!-- / Pages Menu Section-->
    
                    </ul>
                </div>
            </div>
        </div>
    
    </aside>    
    <!-- / Page Aside-->
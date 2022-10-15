@extends('template.master')

@section('main-content')
      <!-- Page Content -->
  <main id="main">
    <!-- Content-->
    <section class="container-fluid">

      <!-- Breadcrumbs-->
      <nav class="mb-4 pb-2 border-bottom" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.html"><i class="ri-home-line align-bottom me-1"></i> List Pengajuan</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tables</li>
          </ol>
      </nav>      <!-- / Breadcrumbs-->

      <!-- Page Title-->
      <h2 class="fs-4 mb-3">List Pengajuan</h2>
      <!-- / Page Title-->

      <div class="row g-4">
        <div class="col-12">
          <!-- Example-->
          <div class="card mb-4">
            @if (empty($result) && count($result)>0)
                <p>Belum ada Pengajuan. Tambah pengajuan baru di menu pengajuan</p>               
            @else
                <table class="table table-striped table-yellow">
                    <thead>
                      <tr>
                        <th scope="col">No Pengajuan</th>
                        <th scope="col">DIvisi</th>
                        <th scope="col">PPK</th>
                        <th scope="col">Aktivitas</th>
                        <th scope="col">Metode Pengadaan</th>
                        <th scope="col">Mitra</th>
                        <th scope="col">Due Quarter</th>
                        <th scope="col">Kategori</th>
                        {{-- <th scope="col">BSU Fix</th> --}}
                        <th scope="col">Posisi Akhir</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($result['data'] as $data)
                        <tr>
                            <td>{{ $data['order_id']}}</td>
                            <td>{{ $data['divisi']}}</td>
                            <td>{{ $data['name']}}</td>
                            <td>{{ $data['aktivitas']}}</td>
                            <td>{{ $data['metode_pengadaan']}}</td>
                            <td>{{ $data['mitra']}}</td>
                            <td>{{ $data['due']['due_quarter']}}</td>
                            <td>{{ $data['kategori']}}</td>
                            {{-- <td>{{ ($data['bsu']['bsu_kategori']=='fix')? ('Rp'.number_format($data['bsu']['bsu_fix'])) : "Fluktuatif"}}</td> --}}
                            <td>{{ $data['posisi_akhir']}}</td>
                            <td>
                              <div class="progress2 progress-moved mr-5">
                                <div class="progress-bar2 text-center">
                                </div>                      
                              </div>
                            </td>
                            <td>
                                @if ($data['status']=='pending' OR $data['status']=='request')
                                    <span class="badge bg-grey">{{ $data['status']}}</span>  
                                @elseif($data['status']=='on_process')
                                    <span class="badge bg-blue">{{ $data['status']}}</span>                                
                                @elseif($data['status']=='completed')                    
                                    <span class="badge bg-green">{{ $data['status']}}</span>      
                                @else
                                    <span class="badge bg-red">{{ $data['status']}}</span>                                
                                @endif
                            </td>
                            <td>
                                <div class="d-flex">
                                    <button class="btn btn-sm btn-outline-blue" data-bs-toggle="modal" data-bs-target="#modalDetailPengajuanAdmin"><i class="ri-eye-fill m-auto"></i></button>
                                    @include('admin.detail_pengajuan')

                                    <button class="btn btn-sm btn-outline-green mx-2" data-bs-toggle="modal" data-bs-target="#modalEditPengajuanAdmin"><i class="ri-edit-fill"></i></button>
                                    @include('admin.edit_pengajuan')

                                    <button class="btn btn-sm btn-outline-red" data-bs-toggle="modal" data-bs-target="#modalDeletePengajuan"><i class="ri-delete-bin-fill"></i></button>
                                    <div class="modal fade" id="modalDeletePengajuan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        </div>
      </div>

      <!-- Sidebar Menu Overlay-->
      <div class="menu-overlay-bg"></div>
      <!-- / Sidebar Menu Overlay-->

      <nav class="mb-5">
        <ul class="pagination justify-content-end mt-3 mb-0">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </section>
    <!-- / Content-->

  </main>
  <!-- /Page Content -->
@endsection
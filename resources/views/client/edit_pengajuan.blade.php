<div class="modal fade" id="modalEditPengajuanClient" tabindex="-1" aria-labelledby="modalEditPengajuanClient" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAddClient">Edit Pengajuan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('client_update_pengajuan','orderid388383')}}" method="POST">
      @csrf
        <div class="modal-body">        
            <div class="row">
              <div class="col">
                <div class="alert alert-success p-2">
                  <p><strong>Posisi Akhir</strong>
                  <br>Sampai dengan evaluasi teknis tgl 17 Okt 2022
                  </p>
                </div>
              </div>
            </div>

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
                  <div class="col-12 col-md-6">
                    <div class="mb-3 ">
                      <label for="" class="form-label">Due Quarter</label>
                      <select required class="form-control form-select" name="due_quarter" id="due_quarter">
                        <option class="form-control" value="Q1">Q1 (Jan - April)</option>
                        <option class="form-control" value="Q2">Q2 (Mei - Agustus)</option>
                        <option value="form-control" value="Q3">Q3 (Sept - Des)</option>
                      </select>
                    </div> 
                  </div>
                  <div class="col-12 col-md-6">
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

            <hr>
            <div class="row">
              <div class="col">
                <label class="form-label">Progress Pengajuan</label>
                <div class="progress2 progress-moved mr-5">
                  <div class="progress-bar2 text-center">
                    <span class="text-center">50%</span>
                  </div>                       
                </div> 
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save Data</button>
        </div>
      </form>
    </div>
  </div>
</div>





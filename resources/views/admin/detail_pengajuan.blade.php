<div class="modal fade" id="modalDetailPengajuanAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header border-bottom">
              <h5 class="modal-title" id="exampleModalLabel">Procurement Progress</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- PPK -->
              <div class="row">
                  <div class="col-6">
                      <label for="name" class="form-label">Pemilik Program Kerja</label>
                  </div>
                  <div class="col-6">
                      <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['username']):"ppk" }}</p>
                  </div>
              </div>

              <!-- Divisi -->
              <div class="row">
                  <div class="col-6">
                      <label for="name" class="form-label col">Divisi</label>
                  </div>
                  <div class="col-6">
                      <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['divisi']):"nama divisi" }}</p>
                  </div>
              </div>

              <!-- Manajer -->
              <div class="row">
                  <div class="col-6">
                      <label for="" class="form-label">Bagian (Manajer)</label>
                  </div>
                  <div class="col-6">
                      <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['manajer']):"Nama Manajer"}}</p>
                  </div>
              </div>

              <!-- Kategori Pengajuan -->
              <div class="row">
                  <div class="col-6">
                      <label for="" class="form-label">Kategori</label>
                  </div>
                  <div class="col-6">
                      <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['kategori']):"Kategori Biaya"}}</p>
                  </div>
              </div>

              <!--Aktivitas -->
              <div class="row">
                  <div class="col-6">
                      <label for="" class="form-label">Aktivitas</label>
                  </div>
                  <div class="col-6">
                      <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['aktivitas']):"Aktivitas"}}</p>
                  </div>
              </div>

              <!-- due quarter -->
              <div class="row">
                  <div class="col-6">
                      <label for="" class="form-label">Due Quarter</label>
                  </div>
                  <div class="col-6">
                      <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['due_quarter'].' '.Session::get('pengajuan')['due_date']):"dd-mm-yyyy"}}</p>
                  </div>
              </div>

              <!-- BSU -->
                 {{-- @if ($bsu_kategori == 'fix') --}}
                  <div class="row">
                      <div class="col-6">
                          <label for="" class="form-label">Nominal BSU Fix</label>
                      </div>
                      <div class="col-6">
                          <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['bsu_kategori'].' '.Sesion::get('bsu_fix')):"Rp1.000.000"}}</p>
                      </div>
                  </div>
                  {{-- @else
                  <div class="mb-1">
                      <label for="" class="form-label">BSU </label>
                      <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['bsu_kategori']):"Fluktuatif"}}</p>
                  </div>
                 @endif --}}
              <!-- end BSU -->

              <!-- mitra -->
              <div class="row">
                  <div class="col-6">
                      <label for="" class="form-label">Mitra</label>
                  </div>
                  <div class="col-6">
                      <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['mitra']):"Mitra"}}</p>
                  </div>
              </div>

              <!-- progress -->
              <div class="row">
                <div class="col-6">
                  <label class="form-label">Progress Pengajuan</label>
                </div>
                <div class="col-4">
                  <div class="progress2 progress-moved mr-5">
                    <div class="progress-bar2" >
                    </div>                       
                  </div> 
                </div>
                <div class="col-2">
                  50%
                </div>
              </div>

              <!-- posisi akhir -->
              <div class="row">
                <div class="col-6">
                  <label class="form-label">Posisi Akhir</label>
                </div>
                <div class="col-6">
                  <p>Menunggu konfirmasi dari manajer pengadaan</p>
                </div>
              </div>

              <!-- status -->
              <div class="row">
                <div class="col-6">
                  <label class="form-label">Status </label>
                </div>
                <div class="col-6">
                  <p>On Progress</p>
                </div>
              </div>

              <!-- lampiran -->
              <div class="row">
                <div class="col-6">
                  <label for="" class="form-label">Lampiran Dokumen</label>
                </div>
                <div class="col-6">
                  <p>Kajian Teknis <a href="#" class="link"> download</a></p>
                  <p>Term of Reference <a href="#" class="link"> download</a></p>
                  <p>Engineering Estimate <a href="#" class="link"> download</a></p>
                  <p>Laporan Pengadaan <a href="#" class="link"> download</a></p>
                  <p>Surat Perjanjian Kerja <a href="#" class="link"> download</a></p>
                  <p>Perjanjian Kerja Sama <a href="#" class="link"> download</a></p>
                  <p>Laporan Akhir <a href="#" class="link"> download</a></p>
                  <p>Berita Acara Serah Terima <a href="#" class="link"> download</a></p>
                  <p>BA Pemeriksaan Pekerjaan <a href="#" class="link"> download</a></p>
                </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </div>
  </div>
</div>
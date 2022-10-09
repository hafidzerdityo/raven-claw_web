<div class="modal fade" id="modalEditPengajuan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Pengajuan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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

                <!-- Kategori Pengajuan -->
                <div class="mb-3">
                    <label for="" class="form-label">Kategori</label>
                    <select required class="form-select form-control mb-3" name="kategori" id="kategori" aria-label="example">
                    <option selected>Pilih kategori biaya</option>
                    <option class="form-control" value="capex">CAPEX</option>
                    <option class="form-control" value="opex">OPEX</option>
                    </select>
                </div>

                <!--Aktivitas -->
                <div class="mb-3">
                    <label for="" class="form-label">Aktivitas</label>
                    <textarea required class="form-control" name="aktivitas" id="" placeholder="judul program kerja"></textarea>
                </div> 

                <div class="mb-3">
                    <label for="" class="form-label">Due Date</label>
                    <select required class="form-control form-select" name="kategori" id="ketagori">
                    <option class="form-control" value="Q1">Q1 (Januari - April)</option>
                    <option class="form-control" value="Q2">Q2 (Mei - Agustus)</option>
                    <option value="form-control" value="Q3">Q3 (September - Desmber)</option>
                    </select>
                </div> 

                <!-- BSU -->
                   {{-- @if ($bsu_kategori == 'fix') --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Nominal BSU Fix</label>
                        <input readonly type="number" class="form-control" name="bsu_fix" id="bsu_fix" placeholder="Rp" value="">
                    </div>
                    {{-- @else
                    <div class="mb-3">
                        <label for="" class="form-label">BSU </label>
                        <input readonly type="number" class="form-control" name="bsu_fix" id="bsu_kategori" placeholder="Rp" value="">
                    </div>
                   @endif --}}
                <!-- end BSU -->

                <!-- Kajian Teknis -->
                <div class="mb-3">
                    <label for="" class="form-label">Dokumen Kajian Teknis</label>
                    <input type="file" class="form-control" name="file_kajian_teknis" id="file_kajian_teknis" placeholder="upload file kajian teknis .PDF" value="">
                </div>
                <!-- end kajian teknis -->

                <!-- TOR -->
                <div class="mb-3">
                    <label for="" class="form-label">Dokumen TOR</label>
                    <input type="file" class="form-control" name="file_tor" id="file_tor" placeholder="upload file kajian teknis .PDF" value="">
                </div>
                <!-- end TOR -->

                <!-- EE -->
                <div class="mb-3">
                    <label for="" class="form-label">Dokumen Engineering Estimate (EE)</label>
                    <input type="file" class="form-control" name="file_ee" id="file_ee" placeholder="upload file kajian teknis .PDF" value="">
                </div>
                <!-- end EE -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
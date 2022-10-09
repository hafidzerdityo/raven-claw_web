<div class="modal fade" id="modalDetailPengajuan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Pengajuan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- PPK -->
                <div class="mb-1">
                    <div class="row">
                        <div class="col">
                            <label for="name" class="form-label">Pemilik Program Kerja</label>
                        </div>
                        <div class="col">
                            <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['username']):"ppk" }}</p>
                        </div>
                    </div>
                </div>

                <!-- DIvisi -->
                <div class="mb-1">
                    <div class="row">
                        <div class="col">
                            <label for="name" class="form-label">Divisi</label>
                        </div>
                        <div class="col">
                            <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['divisi']):"nama divisi" }}</p>
                        </div>
                    </div>
                </div>

                <!-- Manajer -->
                <div class="mb-1">
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label">Bagian (Manajer)</label>
                        </div>
                        <div class="col">
                            <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['manajer']):"Nama Manajer"}}</p>
                        </div>
                    </div>
                </div>

                <!-- Kategori Pengajuan -->
                <div class="mb-1">
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label">Kategori</label>
                        </div>
                        <div class="col">
                            <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['kategori']):"Kategori Biaya"}}</p>
                        </div>
                    </div>
                </div>

                <!--Aktivitas -->
                <div class="mb-1">
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label">Aktivitas</label>
                        </div>
                        <div class="col">
                            <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['aktivitas']):"Aktivitas"}}</p>
                        </div>
                    </div>
                </div> 

                <!-- due quarter -->
                <div class="mb-1">
                    <div class="row">
                        <div class="col-6">
                            <label for="" class="form-label">Due Quarter</label>
                        </div>
                        <div class="col-6">
                            <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['due_quarter'].' '.Session::get('pengajuan')['due_date']):"dd-mm-yyyy"}}</p>
                        </div>
                    </div>
                </div> 

                <!-- BSU -->
                   {{-- @if ($bsu_kategori == 'fix') --}}
                    <div class="mb-1">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Nominal BSU Fix</label>
                            </div>
                            <div class="col">
                                <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['bsu_kategori'].' '.Sesion::get('bsu_fix')):"Rp1.000.000"}}</p>
                            </div>
                        </div>
                    </div>
                    {{-- @else
                    <div class="mb-1">
                        <label for="" class="form-label">BSU </label>
                        <p>{{ Session::has('pengajuan')? (Session::get('pengajuan')['bsu_kategori']):"Fluktuatif"}}</p>
                    </div>
                   @endif --}}
                <!-- end BSU -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
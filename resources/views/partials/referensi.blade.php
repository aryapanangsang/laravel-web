<div class="row referensi d-flex justify-content-center">
    <div class="table-responsive-sm">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nama Referesni</th>
                    <th>Contact Referensi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->referensis->name }}</td>
                    <td>{{ $user->referensis->no_hp }}</td>
                    <td>{{ $user->referensis->keterangan }}</td>
                </tr>
            </tbody>
        </table>

        {{-- Modal Tambah Referensi --}}
        <!-- Button trigger modal -->
        <div class="button-triger d-flex flex-row-reverse">
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Referensi
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('store_referensi') }}" method="post">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Data Referensi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>Masukan Data Referensi</h5>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Referensi">
                            <hr>
                            <input type="number" name="no_hp" class="form-control"
                                placeholder="No. Telp / WA Referensi">
                            <hr>
                            <input type="text" name="keterangan" class="form-control"
                                placeholder="Karyawan / Perwakilan Lembaga / Organisai">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Akhir Modal Referensi --}}
    </div>
</div>

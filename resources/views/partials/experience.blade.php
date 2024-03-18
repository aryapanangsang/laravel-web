        <div class="pengalaman-title">
            <div class="box-title p-1 text-center">
                <h3 class="font-bold fs-6">Pengalaman</h3>
            </div>
        </div>
        <div class="item-pengalaman">
            @foreach ($user->experiences as $data)
                <div class="row position">
                    <div class="col-sm-12 label">
                        <h6>{{ $data->bagian }}</h6>
                    </div>
                </div>
                <div class="row job-detail">
                    <div class="col-sm-6 fill">
                        <span>{{ $data->perusahaan }}</span>
                    </div>
                    <div class="col-sm-5 fill">
                        <span>{{ $data->durasi_kontrak }} Bulan</span>
                    </div>
                    <div class="col-sm-1">
                        <form action="{{ route('hapus_experience', $data->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">X</button>
                        </form>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>


        <div class="col-sm-12 d-flex justify-content-end mt-2 px-3">
            <!-- Modal trigger button -->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalId">
                Tambah
            </button>

            <!-- Modal Body -->
            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
            <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">
                                Tambah Data
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('store_experince') }}" method="post">
                                @csrf
                                <input type="text" name="perusahaan" class="form-control"
                                    placeholder="Masukan Nama Perusahaan">
                                <hr>
                                <input type="text" name="bagian" class="form-control" placeholder="Bagian/Posisi">
                                <hr>
                                <input type="number" name="durasi_kontrak" class="form-control"
                                    placeholder="Durasi Kontrak (Bulan)">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Optional: Place to the bottom of scripts -->
            <script>
                const myModal = new bootstrap.Modal(
                    document.getElementById("modalId"),
                    options,
                );
            </script>
        </div>

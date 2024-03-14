    <div class="col-sm-12 py-4 card">
        <div class="pengalaman-title">
            <div class="box-title p-1 text-white text-center">
                <h3 class="font-bold fs-6">Pengalaman</h3>
            </div>
        </div>
        <div class="pengalaman p-2">
            <div class="item-pengalaman">
                @foreach ($experiences as $experience)
                    <div class="row position">
                        <div class="col-sm-12 label">
                            <h6>{{ $experience->bagian }}</h6>
                        </div>
                    </div>
                    <div class="row job-detail">
                        <div class="col-sm-6 fill">
                            <span>{{ $experience->perusahaan }}</span>
                        </div>
                        <div class="col-sm-6 fill">
                            <span>-</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr>
        </div>
        <div class="col-sm-12 d-flex justify-content-end">
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
                                <input type="date" name="tgl_join" class="form-control">
                                <hr>
                                <input type="date" name="tgl_cut" class="form-control">
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
    </div>

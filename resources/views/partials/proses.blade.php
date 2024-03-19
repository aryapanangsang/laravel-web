<div class="row proses">
    <div class="table-responsive-sm">
        <table class="table table-borderles">
            <thead class="thead-dark">
                <tr>
                    <th>Posisi/Bagian</th>
                    <th>Perusahaan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Operator Injection</td>
                    <td>PT. Kawasan Jababeka 1</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Proses
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Status Lamaran</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="h4 fs-6">Tahapan Seleksi</div>
                                        {{-- Table Tahap Seleksi --}}
                                        <div class="table-responsive-sm">
                                            <table class="table table-bordered">
                                                <thead class="table-dark">
                                                    <tr class="text-center">
                                                        <th>Data CV</th>
                                                        <th>Test</th>
                                                        <th>MCU</th>
                                                        <th>Training</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>Qualified</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        {{-- Akhir Table --}}

                                        {{-- Seleksi --}}
                                        <div class="seleksi">
                                            <div class="table-responsive-sm">
                                                <table class="table table-bordered">
                                                    <thead class="table-success">
                                                        <tr>
                                                            <th>Tahap</th>
                                                            <th>Tanggal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Test</td>
                                                            <td>14 Maret 2024</td>
                                                        </tr>
                                                        <tr>
                                                            <td>MCU</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Training</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        {{-- Akhir Seleksi --}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="note d-flex flex-row-reverse">
        <span class="text-secondary fs-6 text-sm fst-italic">Note : Klik <Strong>Status</Strong> untuk melihat
            informasi</span>
    </div>
</div>

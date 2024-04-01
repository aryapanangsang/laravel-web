    <div class="img-foto d-flex justify-content-center">
        <!-- Button trigger modal -->
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
            @if ($user->path == 'null')
                <img src="../img/user.jpeg" alt="foto" width="200px" class="rounded-circle profile-image">
            @else
                <img src="{{ url('storage/', $user->path) }}" alt="foto" width="200px"
                    class="rounded-circle profile-image">
            @endif
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ganti Profile</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('update_image') }}" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            @method('patch')
                            @csrf
                            <input type="file" name="file">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="name mb-3">
        <h2 class="font-bold text-center ">{{ $user->name }}</h2>
        <p class="text-center text-secondary">{{ $user->no_register }}</p>
        <p class="text-center text-secondary">{{ $tgl_daftar }}</p>
    </div>
    <div class="identity">
        <div class="row">
            <div class="col-sm-3 label">
                <h6>Gender</h6>
            </div>
            <div class="col-sm-9 fill">
                @if (Auth::user()->gender == 'P')
                    <span>Perempuan</span>
                @elseif($user->gender == 'L')
                    <span>Laki-laki</span>
                @else
                    <span>-</span>
                @endif
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3 label">
                <h6>Tanggal Lahir</h6>
            </div>
            <div class="col-sm-9 fill">
                <span>{{ $user->tempat_lahir . ', ' . $tgl_lahir }}</span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3 label">
                <h6>Alamat</h6>
            </div>
            <div class="col-sm-9 fill">
                <span> {{ $user->alamat }}</span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3 label">
                <h6>Domisili</h6>
            </div>
            <div class="col-sm-9 fill">
                <span> {{ $user->domisili }} </span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3 label">
                <h6>No. Hp</h6>
            </div>
            <div class="col-sm-9 fill">
                <span> {{ $user->no_hp }} </span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3 label">
                <h6>No. Hp Darurat</h6>
            </div>
            <div class="col-sm-9 fill">
                <span> {{ $user->no_hp_darurat }} </span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3 label">
                <h6>Email</h6>
            </div>
            <div class="col-sm-9 fill">
                <span> {{ $user->email }}</span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3 label">
                <h6>Tinggi Badan</h6>
            </div>
            <div class="col-sm-9 fill">
                <span> {{ $user->tinggi_badan }} cm</span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3 label">
                <h6>Berat Badan</h6>
            </div>
            <div class="col-sm-9 fill">
                <span> {{ $user->berat_badan }} kg</span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3 label">
                <h6>Kantor Tujuan</h6>
            </div>
            <div class="col-sm-9 fill">
                <span> {{ $user->kantor_tujuan }}</span>
            </div>
        </div>
    </div>
    <div class="col-sm-12 btn-action my-3 d-flex justify-content-end">
        <a href="{{ route('update_profile') }}" class="btn btn-dark">Ubah Data</a>
    </div>

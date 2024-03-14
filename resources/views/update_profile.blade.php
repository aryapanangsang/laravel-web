@extends('layouts.main')

@section('content')
    <div class="container shadow rounded bg-white">
        <div class="row profile-informations p-3">
            <form action="" method="post">
                @method('patch')
                @csrf
                <div class="col-sm-12    card py-4 px-4">
                    <div class="img-foto d-flex justify-content-center">
                        <img src="../img/user.jpeg" alt="foto" width="200px" class="rounded-circle">
                    </div>
                    <div class="name">
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control mb-3">
                    </div>
                    <div class="identity">
                        <div class="row">
                            <div class="col-sm-3 label">
                                <h6>Gender</h6>
                            </div>
                            <div class="col-sm-9 fill">
                                <select name="gender" id="gender" class="form-control">
                                    <option value="{{ $user->gender }}">---Pilih---</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 label">
                                <h6>Tempat Lahir</h6>
                            </div>
                            <div class="col-sm-9 fill">
                                <input type="text" name="tempat_lahir" class="form-control"
                                    value="{{ $user->tempat_lahir }}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 label">
                                <h6>Tanggal Lahir</h6>
                            </div>
                            <div class="col-sm-9 fill">
                                <input type="date" name="tanggal_lahir" class="form-control"
                                    value="{{ $user->tanggal_lahir }}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 label">
                                <h6>Alamat</h6>
                            </div>
                            <div class="col-sm-9 fill">
                                <input type="text" name="alamat" class="form-control" value="{{ $user->alamat }}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 label">
                                <h6>Domisili</h6>
                            </div>
                            <div class="col-sm-9 fill">
                                <input type="text" name="domisili" class="form-control" value="{{ $user->domisili }}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 label">
                                <h6>No. Hp</h6>
                            </div>
                            <div class="col-sm-9 fill">
                                <input type="number" name="no_hp" class="form-control" value="{{ $user->no_hp }}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 label">
                                <h6>No. Hp Darurat</h6>
                            </div>
                            <div class="col-sm-9 fill">
                                <input type="number" name="no_hp_darurat" class="form-control"
                                    value="{{ $user->no_hp_darurat }}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 label">
                                <h6>Email</h6>
                            </div>
                            <div class="col-sm-9 fill">
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 label">
                                <h6>Tinggi Badan</h6>
                            </div>
                            <div class="col-sm-9 fill">
                                <input type="number" name="tinggi_badan" class="form-control"
                                    value="{{ $user->tinggi_badan }}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 label">
                                <h6>Berat Badan</h6>
                            </div>
                            <div class="col-sm-9 fill">
                                <input type="number" name="berat_badan" class="form-control"
                                    value="{{ $user->berat_badan }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-dark mt-3 justify-content-end">Update Data</button>
                </div>
            </form>
        </div>
    @endsection

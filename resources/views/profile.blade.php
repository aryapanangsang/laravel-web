@extends('layouts.main')

@section('content')
    <div class="container shadow rounded bg-white">
        <div class="row profile-informations p-3">
            <div class="col-sm-12 card py-4 px-4">
                <div class="img-foto d-flex justify-content-center">
                    <img src="../img/user.jpeg" alt="foto" width="200px" class="rounded-circle">
                </div>
                <div class="name">
                    <h2 class="font-bold ">{{ $user->name }}</h2>
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
                            <span>{{ $user->tempat_lahir . ', ' . $user->tanggal_lahir }}</span>
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
                            <span> juan@juan.com</span>
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
                </div>
            </div>
            <div class="col-sm-12 btn-action my-3 d-flex justify-content-end">
                <a href="{{ route('update_profile') }}" class="btn btn-dark">Ubah Data</a>
            </div>
        </div>
    </div>

    <div class="container shadow rounded bg-white mt-2">
        <div class="row profile-informations p-3">
            @include('partials.experience')
        </div>
    </div>
@endsection

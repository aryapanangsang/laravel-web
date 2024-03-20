@extends('layouts.main')

@section('content')
    <div class="container shadow rounded bg-white">
        <div class="row home-informations p-3 justify-content-evenly ">
            <div class="col-sm-3 foto d-flex justify-content-center align-items-center">
                <img src="img/user.jpeg" alt="image" width="220px" class="rounded-circle ">
            </div>
            <div class="col-sm-6 align-self-center list-identity ">
                <div class="name mt-2">
                    <h2 class="font-bold text-black">Juan Adam's</h2>
                </div>
                <div class="identity">
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>No. Regist</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span>{{ $users->no_register }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>Tanggal Daftar</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span>{{ $tgl_daftar }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>Kantor Tujuan</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span> {{ $users->kantor_tujuan }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 align-self-center status">
                <div class="status-apply">
                    <h2>Status Lamaran</h2>
                </div>
                <div class="container tracking ">
                    <ul class="item-tracking">
                        <li><a href="#" class="active">CV Terkirim</a></li>
                        <li><a href="#" class="">Test</a></li>
                        <li><a href="#">Medical Check's Up</a></li>
                        <li><a href="#">Training</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

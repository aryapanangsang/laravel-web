@extends('layouts.main')

@section('content')
    <div class="container shadow rounded bg-white">
        <div class="row home-informations p-3 justify-content-evenly ">
            <div class="col-sm-3 image">
                <img src="img/user1.jpg" alt="image" width="220px">
            </div>
            <div class="col-sm-6 align-self-center list-identity ">
                <div class="name">
                    <h2 class="font-bold ">Juan Adam's</h2>
                </div>
                <div class="identity">
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>No. Regist</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span>12345678</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>Tanggal Daftar</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span> 14 Januari 2024</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>Kantor Tujuan</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span> Cikarang</span>
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

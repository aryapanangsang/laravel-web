@extends('layouts.main')

@section('content')
    <div class="container shadow rounded bg-white">
        <div class="row profile-informations p-3">
            <div class="col-sm-6 card py-4 px-4">
                <div class="img-foto d-flex justify-content-center">
                    <img src="../img/user.jpeg" alt="foto" width="200px" class="rounded-circle">
                </div>
                <div class="name">
                    <h2 class="font-bold ">Juan Adam's</h2>
                </div>
                <div class="identity">
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>Gender</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span>Laki-laki</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>Tanggal Lahir</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span>Jakarta, 12 Maret 2003</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>Alamat</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span> Jl. Gatot Subroto No. 167 RT. 003/OO1 Kel. Atmajaya Ngamprah Jakarta</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>Domisili</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span> - </span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>No. Hp</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span> 02851212115 </span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>No. Hp Darurat</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span> 02851212115 </span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>Tinggi Badan</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span> 176 cm</span>
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
                            <h6>Berat Badan</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span> 59 kg</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 label">
                            <h6>Status</h6>
                        </div>
                        <div class="col-sm-9 fill">
                            <span> Single</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-4 py-4">
                <div class="pengalaman-title">
                    <div class="box-title p-1 text-white text-center">
                        <h3 class="font-bold fs-6">Pengalaman</h3>
                    </div>
                </div>
                <div class="pengalaman p-2">
                    <div class="item-pengalaman">
                        <div class="row position">
                            <div class="col-sm-12 label">
                                <h6>Marketing Advisor</h6>
                            </div>
                        </div>
                        <div class="row job-detail">
                            <div class="col-sm-6 fill">
                                <span> PT. Artha Automation</span>
                            </div>
                            <div class="col-sm-6 fill">
                                <span> 1 Tahun</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="item-pengalaman">
                        <div class="row position">
                            <div class="col-sm-12 label">
                                <h6>Marketing Supervisor Agency</h6>
                            </div>
                        </div>
                        <div class="row job-detail">
                            <div class="col-sm-6 fill">
                                <span> PT. Samaka Agency</span>
                            </div>
                            <div class="col-sm-6 fill">
                                <span> 3 Tahun</span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="skill mt-2">
                    <div class="skill-title">
                        <div class="box-title p-1 text-white text-center">
                            <h3 class="font-bold fs-6">Kemampuan</h3>
                        </div>
                    </div>
                    <div class="skill-item p-2">
                        <ul>
                            <li>Data Cleaning</li>
                            <li>Marketing Tools</li>
                            <li>Analitic Tool Market</li>
                            <li>Public Speaking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endsection

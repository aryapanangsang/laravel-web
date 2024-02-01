@extends('layouts.main')

@section('content')
    <div class="container shadow rounded bg-white ">
        <div class="row home-informations justify-content-around p-3">
            <div class="col-sm-3">      
                <img src="img/user1.jpg" alt="image" width="220px">       
            </div>
            <div class="col-sm-6 align-self-center ">
                <div class="name ">                    
                    <h2 class="font-bold">Fariz Rizal</h2>
                </div>
                <div class="row identity justify-content-start">
                   <div class="col-sm-3 label">
                        <label for="no-regist">No. Regist</label>
                        <label for="tanggal-daftar">Tanggal Daftar</label>
                        <label for="kantor-tujuan">Kantor Tujuan</label>
                   </div>
                   <div class="col-sm-9 fill">
                        <div> : 12345678</div>
                        <div> : 31 Januari 2024</div>
                        <div> : Bekasi</div>
                   </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="container py-5">
                    <div class="row">                   
                      <div class="col-md-12 col-lg-12">
                        <div id="tracking-pre"></div>
                        <div id="tracking">
                          <div class="tracking-list">
                            <div class="tracking-item">
                              <div class="tracking-icon status-intransit">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                  <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                </svg>
                              </div>
                              <div class="tracking-date"><img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg" class="img-responsive" alt="order-placed" /></div>
                              <div class="tracking-content">Order Placed<span>09 Aug 2025, 10:00am</span></div>
                            </div>                                               
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
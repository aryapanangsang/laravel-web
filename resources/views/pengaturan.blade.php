@extends('layouts.main')

@section('content')
    {{-- Pengaturan  --}}
    <div class="container shadow rounded bg-white p-4
    mb-2">
        <div class="card tracking-informations p-4">
            <h2 class="fs-4 text-center d-block mb-4">Pengaturan Akun</h2>
            <div class="row">
                {{-- <span class="text-center text-secondary mt-5 mb-5 d-block">Belum ada CV yang diproses</span> --}}
                @include('partials.pengaturan_akun')
            </div>
        </div>
    </div>
    {{-- Akhir Pengaturan  --}}
@endsection

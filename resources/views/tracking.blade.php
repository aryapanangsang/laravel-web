@extends('layouts.main')

@section('content')
    {{-- Progres CV --}}
    <div class="container shadow rounded bg-white p-4
    mb-2">
        <div class="card tracking-informations p-4">
            <h2 class="fs-4 text-center d-block mb-4">Tracking</h2>
            <div class="row">
                {{-- <span class="text-center text-secondary mt-5 mb-5 d-block">Belum ada CV yang diproses</span> --}}
                @include('partials.proses')
            </div>
        </div>
    </div>
    {{-- Akhir Progres CV --}}

    {{-- Riwayat Apply --}}
    <div class="container shadow rounded bg-white p-4">
        <div class="tracking-informations p-4">
            <h2 class="fs-4 text-center mb-3 d-block">History Apply</h2>
            @include('partials.history')
        </div>
    </div>
    {{-- Akhir Riwayat Apply --}}
@endsection

@extends('layouts.main')

@section('content')
    {{-- Profile Information --}}
    <div class="container shadow rounded bg-white p-4">
        <div class="card profile-informations p-4">
            @include('partials.identitas')
        </div>
    </div>
    {{-- Akhir Information --}}

    {{-- Experience --}}
    <div class="container shadow rounded bg-white p-4 mt-2">
        <div class="card experience p-4">
            @include('partials.experience')
        </div>
    </div>
    {{-- Akhir Experience --}}

    {{-- CV --}}
    <div class="container shadow rounded bg-white p-4 mt-2">
        <div class="card cv-file p-4">
            @include('partials.cv_file')
        </div>
    </div>
    {{-- Akhir CV --}}

    {{-- Referensi --}}
    <div class="container shadow rounded bg-whie p-4 mt-2">
        <div class="card referensi p-4 d-flex justify-content-center">
            @include('partials.referensi')
        </div>
    </div>
@endsection

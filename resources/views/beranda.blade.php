
    {{-- <nav class="navbar navbar-expand bg-dark">
        <ul class="nav">
            <li>
                <a class="nav-link" href="{{ url('/beranda') }}">Home</a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/data-siswa') }}">Data Siswa</a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/info-siswa') }}">Info Kegiatan</a>
            </li>
        </ul>
    </nav> --}}

@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Protal Informasi Mahasiswa</h1>
        <p>Selamat datang di Portal Informasi Mahasiswa USM</p>
        <a href="#" class="btn btn-dark">Info Kegiatan</a>
        <a href="#" class="btn btn-primary">Data Siswa</a>
    </div>
@endsection
<link rel="stylesheet" href="{{asset('css/buat_naskah.css')}}">

@extends('layouts.master')
@section('title','E-Office - Buat Surat')
@section('title_content','Buat Surat')
@section('breadcrumb')
<ul class="breadcrumb">
    <li>
        <a href="{{ route('buat-surat.create') }}">Buat Surat</a>
    </li>
</ul>
@endsection

@section('main_content')

<div class="container">
    <div class="box-container">
        <div class="box">
            <a href="{{ route('suket.mahasiswaAktif') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Keterangan Mahasiswa Aktif</p>
            </a>
        </div>
        <div class="box">
            <a href="{{ route('suket.tunjangan') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Keterangan Tunjangan Anak pada Gaji Orang Tua</p>
            </a>
        </div>
        <div class="box">
            <a href="{{ route('suket.kkn') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Magang KKN Tematik</p>
            </a>
        </div>
        <div class="box">
            <a href="{{ route('suket.magang') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Magang/PKL</p>
            </a>
        </div>

        <div class="box">
            <a href="{{ route('suket.penelitian') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Penelitian Tugas Akhir</p>
            </a>
        </div>
        <div class="box">
            <a href="{{ route('suket.observasi') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Observasi Mata Kuliah</p>
            </a>
        </div>
        <div class="box">
            <a href="{{ route('suket.ta') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Observasi Tugas Akhir</p>
            </a>
        </div>
    </div>
</div>

@endsection
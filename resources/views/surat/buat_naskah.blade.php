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
            <a href="{{ route('buat-surat.mhsaktif') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Keterangan Mahasiswa Aktif</p>
            </a>
        </div>
        <div class="box">
            <a href="{{ route('buat-surat.tunjangan') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Keterangan Tunjangan Anak pada Gaji Orang Tua</p>
            </a>
        </div>
        <div class="box">
            <a href="{{ route('buat-surat.kkn') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Magang KKN Tematik</p>
            </a>
        </div>
        <div class="box">
            <a href="{{ route('buat-surat.magang') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Magang/PKL</p>
            </a>
        </div>

        <div class="box">
            <a href="{{ route('buat-surat.peneliatian') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Penelitian Tugas Akhir</p>
            </a>
        </div>
        <div class="box">
            <a href="{{ route('buat-surat.matkul') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Observasi Mata Kuliah</p>
            </a>
        </div>
        <div class="box">
            <a href="{{ route('buat-surat.tugasakhir') }}">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Observasi Tugas Akhir</p>
            </a>
        </div>
    </div>
</div>

@endsection
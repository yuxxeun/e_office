<link rel="stylesheet" href="{{asset('css/buat_naskah.css')}}">

@extends('layouts.master')

@section('title','E-Office - Buat Naskah')

@section('title_content','Buat Naskah')

@section('breadcrumb')
<ul class="breadcrumb">
    <li>
        <a href="/buat_naskah">Buat Naskah</a>
    </li>
    <li><i class='bx bx-chevron-right'></i></li>
    <li>
        <a class="active" href="/buat_naskah">Buat Naskah</a>
    </li>
</ul>
@endsection

@section('main_content')

<div class="container">
    <div class="box-container">
        <div class="box">
            <a href="/suket_mhs_aktif">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Keterangan Mahasiswa Aktif</p>
                <!--<a href="#" class="btn">Buat Naskah</a>-->
            </a>
        </div>
        <div class="box">
            <a href="/suket_tunjangan">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Keterangan Tunjangan Anak pada Gaji Orang Tua</p>
                <!--<a href="#" class="btn">Buat Naskah</a>-->
            </a>
        </div>
        <div class="box">
            <a href="/surat_izin_kkn">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Magang KKN Tematik</p>
                <!--<a href="#" class="btn">Buat Naskah</a>-->
            </a>
        </div>
        <div class="box">
            <a href="/surat_izin_magang">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Magang/PKL</p>
                <!--<a href="#" class="btn">Buat Naskah</a>-->
            </a>
        </div>

        <div class="box">
            <a href="/surat_izin_penelitian">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Penelitian Tugas Akhir</p>
                <!--<a href="#" class="btn">Buat Naskah</a>-->
            </a>
        </div>
        <div class="box">
            <a href="/surat_izin_observasi_matkul">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Observasi Mata Kuliah</p>
                <!--<a href="#" class="btn">Buat Naskah</a>-->
            </a>
        </div>
        <div class="box">
            <a href="/surat_izin_penelitian">
                <img src="{{asset('')}}/surat.png">
                <h3></h3>
                <p>Surat Izin Observasi Tugas Akhir</p>
                <!--<a href="#" class="btn">Buat Naskah</a>-->
            </a>
        </div>
    </div>
</div>

@endsection
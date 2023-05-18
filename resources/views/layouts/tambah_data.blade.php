<link rel="stylesheet" href="{{asset('css/suket_mhs_aktif.css')}}">

@extends('layouts.master')

@section('title','E-Office - Tambah Daftar Mahasiswa')

@section('title_content','Tambah Daftar Mahasiswa')

@section('main_content')

<div class="table-data">
    <div class="order">
        <header>
            @yield('title_surat')<br>
        </header>
        @yield('form_input')
    </div>
</div>
@endsection
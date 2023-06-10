<link rel="stylesheet" href="{{asset('css/suket_mhs_aktif.css')}}">

@extends('layouts.master')

@section('title','E-Office - Tambah Data')
@section('title_content','Tambah Data')
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
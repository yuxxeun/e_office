<link rel="stylesheet" href="{{ asset('css/suket_mhs_aktif.css') }}">

@extends('layouts.master')

@section('title', '@yield('title')')

@section('title_content', '@yield('title_content')')

@section('main_content')

<div class="table-data">
    <div class="order">
        @yield('tabel')
    </div>
</div>
@endsection
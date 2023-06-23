<link rel="stylesheet" href="{{ asset('css/suket_mhs_aktif.css') }}">

@extends('layouts.master')
@section('title', 'E-Office - Buat Surat')
@section('title_content', 'Buat Surat')
@section('main_content')
    <div class="table-data">
        <div class="order">
            <div class="title" style="text-align: center;">
                <header>
                    Surat @yield('title_surat')<br>
                </header>
            </div>
            @yield('form_input')
        </div>
    </div>
@endsection

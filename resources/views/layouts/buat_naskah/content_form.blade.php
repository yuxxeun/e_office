<link rel="stylesheet" href="{{ asset('css/suket_mhs_aktif.css') }}">

@extends('layouts.master')

@section('title', 'E-Office - Buat Naskah')

@section('title_content', 'Buat Naskah')

@section('main_content')



    <div class="table-data">
        <div class="order">
            <div class="title" style="text-align: center;">
                <header>
                    Surat @yield('title_surat')<br>
                </header>
                <span>Nomor.</span>
            </div>


            @yield('form_input')
        </div>
    </div>
@endsection

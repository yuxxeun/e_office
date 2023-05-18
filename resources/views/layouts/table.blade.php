<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

@extends('layouts.master')

@section('title')

@section('title_content')

@section('main_content')
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>@yield('head_title')</h3>
            <i class='bx bx-search'></i>
            <i class='bx bx-filter'></i>
        </div>
        @yield('button')
        <table>
            @yield('table')
        </table>
    </div>
</div>
@endsection
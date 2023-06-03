@extends('layouts.master')

@section('title','E-Office')

@section('title_content','Dashboard')

@section('breadcrumb')
<ul class="breadcrumb">
    <li>
        <a href="/dashboard">Dashboard</a>
    </li>
    <li><i class='bx bx-chevron-right'></i></li>
    <li>
        <a class="active" href="/dashboard">Home</a>
    </li>
</ul>
@endsection

@section('main_content')
<ul class="box-info">
    <li>
        <i class='bx bxs-calendar-check'></i>
        <span class="text">
            <h3>1020</h3>
            <p>Surat Masuk</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-group'></i>
        <span class="text">
            <h3>{{ $users->count() }}</h3>
            <p>Total Surat</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-dollar-circle'></i>
        <span class="text">
            <h3>123</h3>
            <p>Surat Dalam Penanganan</p>
        </span>
    </li>
</ul>

<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Data Surat Terbaru</h3>
            <i class='bx bx-search'></i>
            <i class='bx bx-filter'></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Surat</th>
                    <th>Status</th>
                    <th>Tanggal Buat</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Surat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <p>Surat Ijin Dokter</p>
                    </td>
                    <td>
                        <span class="status pending">
                            Dalam proses
                        </span>
                    </td>
                    <td>
                        01-10-2021
                    </td>
                    <td>
                        Krido Pambudi 
                    </td>
                    <td>
                        <span class="status pending">
                            Surat Ijin
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection
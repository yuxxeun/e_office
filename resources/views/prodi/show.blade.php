<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@extends('layouts.master')
@section('title', 'E-Office - Detail ' . $prodi->nama_prodi )
@section('title_content', 'Detail: ' . $prodi->nama_prodi)
    @section('breadcrumb')
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('prodi.index') }}">Daftar Prodi</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
                <a class="active" href="{{ route('prodi.detail', $prodi->id) }}">Detail {{ $prodi->id }}</a>
            </li>
        </ul>
    @endsection
    @section('main_content')
        <div class="table-data">
            <div class="order">
                <div class="head">
                        <ul>
                            <li>Nama: &nbsp; {{ $prodi->nama_prodi }}</li>
                            <li>NIM: &nbsp; {{ $prodi->dosen->nama_dosen }}</li>
                            <li>Bergabung: &nbsp; {{ $prodi->created_at }}</li>
                            <li>Terakhir update: &nbsp; {{ $prodi->updated_at }}</li>
                        </ul>
                </div>
            </div>
        </div>
    @endsection

<!-- DataTables  & Plugins -->
<script src="{{ asset('AdminLTE') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('AdminLTE') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('AdminLTE') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('AdminLTE') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('AdminLTE') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('AdminLTE') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('AdminLTE') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

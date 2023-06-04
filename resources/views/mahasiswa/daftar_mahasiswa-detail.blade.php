<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@extends('layouts.master')
@section('title', 'E-Office - Detail ' . $mahasiswa->nama )
@section('title_content', 'Detail: ' . $mahasiswa->nama)
    @section('breadcrumb')
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('mahasiswa.index') }}">Daftar Mahasiswa</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
                <a class="active" href="{{ route('mahasiswa.show', $mahasiswa->nim) }}">Detail {{ $mahasiswa->nim }}</a>
            </li>
        </ul>
    @endsection
    @section('main_content')
        <div class="table-data">
            <div class="order">
                <div class="head">
                        <ul>
                            <li>Nama: &nbsp; {{ $mahasiswa->nama }}</li>
                            <li>NIM: &nbsp; {{ $mahasiswa->nim }}</li>
                            <li>Jenis Kelamin: &nbsp; {{ $mahasiswa->j_kel }}</li>
                            <li>Program Studi: &nbsp; {{ $mahasiswa->prodi }}</li>
                            <li>Bergabung: &nbsp; {{ $mahasiswa->created_at }}</li>
                            <li>Terakhir update: &nbsp; {{ $mahasiswa->updated_at }}</li>
                        </ul>
                </div>
            </div>
        </div>

        {{-- Surat mahasiswa --}}
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Daftar surat {{ $mahasiswa->nama }}</h3>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Surat</th>
                            <th>No. Surat</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
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

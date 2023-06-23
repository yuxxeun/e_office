!-- DataTables -->
<link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

@extends('layouts.master')

@section('title','E-Office - Daftar Surat')

@section('title_content','Daftar Surat')

@section('main_content')
<div class="card-body">
    <div id="example1" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
            <div class="col-sm-12 col-md-6">Tes</div>
            <div class="col-sm-12 col-md-6">
                <div id="example1_wrapper" class="dataTables_filter">
                    <label>Search:
                        <input type="search" class="form-control form-control-sm" placeholder=" &#xf040;  Cari">
                    </label>
                </div><br>
                <div id="example1_wrapper" class="dataTables_filter">
                    Urutkan
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                    <thead>
                        <tr>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">No</th>
                            <th>ID Surat</th>
                            <th>Jenis Surat</th>
                            <th>No. Surat</th>
                            <th>Tanggal</th>
                            <th>Nama Mahasiswa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            @foreach ($datas as $mahasiswaAktif)
                                <td class="dtr-control">{{ $mahasiswaAktif->id }}</td>
                                <td class="dtr-control">{{ $mahasiswaAktif->id }}</td>
                                <td>Keterangan Mahasiswa Aktif</td>
                                <td class="sorting_1">{{ $mahasiswaAktif->nomor_surat }}</td>
                                <td>{{ $mahasiswaAktif->tanggal_surat }}</td>
                                <td>{{ $mahasiswaAktif->nama_mahasiswa }}</td>
                                <td>Engga ada, mager</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example1_previous">
                            <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                        </li>
                        <li class="paginate_button page-item active" id="example1_previous">
                            <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                        </li>
                        <li class="paginate_button page-item active" id="example1_previous">
                            <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                        </li>
                        <li class="paginate_button page-item next" id="example1_next">
                            <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>




    </div>
    <!-- /.card-body -->
</div>
@endsection

<!-- DataTables  & Plugins -->
<script src="{{asset('AdminLTE')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
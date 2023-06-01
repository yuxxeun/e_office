<link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('css/table.css')}}">

@extends('layouts.master')

@section('title','E-Office - Daftar Surat')

@section('title_content','Daftar Surat')

@section('breadcrumb')
<ul class="breadcrumb">
    <li>
        <a href="/riwayat">Daftar Surat</a>
    </li>
    <li><i class='bx bx-chevron-right'></i></li>
    <li>
        <a class="active" href="/riwayat">Daftar Surat</a>
    </li>
</ul>
@endsection

@section('main_content')
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Daftar Surat</h3>
            <i class='bx bx-search'></i>
            <i class='bx bx-filter'></i>
        </div>
        <div class="head">
            <button style="height: 35px; width: 227px; color: #fff; font-size: 12px; font-weight: 300; border: none; cursor: pointer;transition: all 0.2s ease;background: #3C91E6; border-radius:0.45em;">
                <i class='bx bxs-file-plus'></i>
                <a href="/buat_naskah" style="color: inherit">
                    Buat Naskah Baru
                </a>
            </button>
        </div>
        <table style="margin-top: 7%;">
            <thead>
                <tr>
                    <th>No</th>
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
                    <td class="dtr-control">Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td class="sorting_1"> 4</td>
                    <td>X</td>
                    <td>Dyahayu</td>
                    <td>Aksi</td>
                </tr>
                <tr class="even">
                    <td class="dtr-control">Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td class="sorting_1"> 4</td>
                    <td>X</td>
                    <td>Dyahayu</td>
                    <td>Aksi</td>
                </tr>
            </tbody>
        </table>
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite" style="font-size: 12px;">Showing 1 to 10 of 57 entries</div>
        </div>

        <div class="pagination">
            <button class="button" id="startBtn" disabled>
                <i class='bx bxs-chevrons-left'></i>
            </button>
            <button class="button prevNext" id="prev" disabled>
                <i class='bx bxs-chevron-left'></i>
            </button>
            <div class="links">
                <a href="#" class="link active">1</a>
                <a href="#" class="link">2</a>
                <a href="#" class="link">3</a>
                <a href="#" class="link">4</a>
                <a href="#" class="link">5</a>
            </div>
            <button class="button prevNext" id="next">
                <i class='bx bxs-chevron-right'></i>
            </button>
            <button class="button" id="endBtn">
                <i class='bx bxs-chevrons-right'></i>
            </button>
        </div>


    </div>
</div>

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
<link rel="stylesheet" href="{{asset('css/table.css')}}">

<script src="{{asset('css/table.css')}}"></script>
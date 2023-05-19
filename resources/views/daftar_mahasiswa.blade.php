<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@extends('layouts.master')

@section('title', 'E-Office - Daftar Mahasiswa')

@section('title_content', 'Daftar Mahasiswa')

@section('breadcrumb')
    <ul class="breadcrumb">
        <li>
            <a href="/daftar_mahasiswa">Daftar Mahasiswa</a>
        </li>
        <li><i class='bx bx-chevron-right'></i></li>
        <li>
            <a class="active" href="/daftar_mahasiswa">Daftar Mahasiswa</a>
        </li>
    </ul>
@endsection

@section('main_content')

    <div class="table-data">
        <div class="order">
            <div class="head">

                <h3>Daftar Mahasiswa</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <div class="head">
                <button class="add">
                    <a href="/tambah_daftar_mahasiswa" style="color: inherit">
                        <i class='bx bx-user-plus' style="size: 100px;"></i>
                        Tambah Daftar Mahasiswa
                    </a>
                </button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Program Studi</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                @foreach ($mahasiswa as $mhs)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mhs->nama }}</td>
                            <td>{{ $mhs->nim }}</td>
                            <td>{{ $mhs->prodi }}</td>
                            <td>{{ $mhs->j_kel }}</td>
                            <td>
                                <button class="action" style="background: #3C91E6">
                                    <a href="{{ route('mahasiswa.show', $mhs->nim) }}" style="color: inherit">
                                        <i class='bx bxs-detail'></i>
                                        Detail
                                    </a>
                                </button>
                                <button class="action" style="background: #ff8200">
                                    <a href="/daftar_mahasiswa-edit" style="color: inherit">
                                        <i class='bx bxs-edit'></i>
                                        Edit
                                    </a>
                                </button>
                                <button class="action" style="background: #cc2936">
                                    <a href="#" style="color: inherit">
                                        <i class='bx bx-trash'></i>
                                        Hapus
                                    </a>
                                </button>
                            </td>

                        </tr>
                    </tbody>
                @endforeach

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

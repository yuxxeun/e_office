<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@extends('layouts.master')

@section('title', 'E-Office - Daftar Mahasiswa')

@section('title_content', 'Daftar Mahasiswa')

@section('breadcrumb')
    <ul class="breadcrumb">
        <li>
            <a href="/daftar_mahasiswa">Daftar Mahasiswa</a>
        </li>
    </ul>
@endsection

@section('main_content')
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Daftar Mahasiswa</h3>
                    {{-- search form --}}
                        <form method="get" id="form">
                            <input type="text" id="selectform" name="keyword" class="px-3 py-2" placeholder="Cari mahasiswa" value="{{ request('keyword') }}" />
                            <button type="submit" class="py-2 px-3 rounded-lg">
                                Search
                            </button>
                            <button type="submit" name="keyword" class="py-2 px-3 rounded-lg" value="">
                                Reset
                            </button>        
                        </form>
                    {{-- end search --}}
            </div>
            <div class="head">
                <button class="add">
                    <a href="{{ route('mahasiswa.create') }}" style="color: inherit">
                        <i class='bx bx-user-plus' style="size: 100px;"></i>
                        Tambah Mahasiswa
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
                            <td class="d-flex justify-content-around">
                                <button class="action" style="background: #3C91E6">
                                    <a href="{{ route('mahasiswa.show', $mhs->nim) }}" style="color: inherit">
                                        <i class='bx bxs-detail'></i>
                                        Detail
                                    </a>
                                </button>
                                <button class="action" style="background: #ff8200">
                                    <a href="{{ route('mahasiswa.edit', $mhs->nim) }}" style="color: inherit">
                                        <i class='bx bxs-edit'></i>
                                        Edit
                                    </a>
                                </button>
                                <form action="{{ route('mahasiswa.delete', $mhs->nim) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="action" style="background: #cc2936">
                                            <i class='bx bx-trash'></i>
                                            Hapus
                                    </button>
                                </form>
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

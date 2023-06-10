<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@extends('layouts.master')
@section('title', 'E-Office - Daftar Prodi')
@section('title_content', 'Daftar Prodi')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li>
            <a href="{{ route('prodi.index') }}">Daftar Prodi</a>
        </li>
        @if(request()->keyword)
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
                <a class="active" href="{{ route('prodi.index') }}">Cari Prodi</a>
            </li>
        @endif
    </ul>
@endsection

@section('main_content')
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Daftar Prodi</h3>
                    {{-- search form --}}
                        <form method="get" id="form">
                            <input type="text" name="keyword" class="px-3 py-2" placeholder="Cari dosen" value="{{ request('keyword') }}" />
                            <button type="submit" class="py-2 px-3 rounded-lg">
                                Search
                            </button>
                            <button type="submit" name="keyword" class="py-2 px-3 rounded-lg">
                                Reset
                            </button>        
                        </form>
                    {{-- end search --}}

                    <a href="{{ route('mahasiswa.pdf') }}">
                        Export to pdf
                    </a>
            </div>
            <div class="head">
                <button class="add">
                    <a href="{{ route('prodi.create') }}" style="color: inherit">
                        <i class='bx bx-user-plus' style="size: 100px;"></i>
                        Tambah Dosen
                    </a>
                </button>
            </div>
            <table>
                <thead class="items-center mx-auto justify-center content-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Prodi</th>
                        <th>Kaprodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                @foreach ($prodis as $dosen)
                    <tbody>
                        <tr>
                            <td>{{ $dosen->id }}</td>
                            <td>{{ $dosen->nama_prodi }}</td>
                            <td>{{ $dosen->dosen->nama_dosen }}</td>
                            <td class="d-flex justify-content-around">
                                <button class="action" style="background: #3C91E6">
                                    <a href="{{ route('prodi.detail', $dosen->id) }}" style="color: inherit">
                                        <i class='bx bxs-detail'></i>
                                        Detail
                                    </a>
                                </button>
                                <button class="action" style="background: #ff8200">
                                    <a href="{{ route('prodi.update', $dosen->id) }}" style="color: inherit">
                                        <i class='bx bxs-edit'></i>
                                        Edit
                                    </a>
                                </button>
                                <form action="{{ route('prodi.delete', $dosen->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="action show_confirm" data-toggle="tooltip" style="background: #cc2936">
                                            <i class='bx bx-trash'></i>
                                            Hapus
                                    </button>
                                </form>
                            </td>

                        </tr>
                    </tbody>
                @endforeach
            </table>
            <div class="d-flex justify-contetn-center mt-5 justify-end">
                {{-- {{ $dosens->links() }} --}}
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
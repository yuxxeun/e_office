<link rel="stylesheet" href="{{ asset('css/suket_mhs_aktif.css') }}">
@extends('layouts.tambah_data')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li>
            <a href="{{ route('prodi.index') }}">Daftar Prodi</a>
        </li>
        <li><i class='bx bx-chevron-right'></i></li>
        <li>
            <a class="active" href="{{ route('prodi.update', $prodi->id) }}">Edit {{ $prodi->nama_prodi }}</a>
        </li>
    </ul>
@endsection

@section('form_input')
    <div class="table-data">
        <div class="order">
        @section('title_surat', 'Edit Data Prodi')
        <form action="{{ route('prodi.update', $prodi->id) }}" class="form" method="post">
            @csrf
            @method('PUT')
            <div class="input-box">
                <label>Nama Prodi</label>
                <input type="text" name="nama_prodi" value="{{ $prodi->nama_prodi }}" />
            </div>
            <select name="id_dosen" class="input-box address">
                <label>Koordinator Prodi</label>
                <div class="select-box">
                    <option value="{{ $prodi->dosen->nip }}">
                        {{ $prodi->dosen->nama_dosen }}
                    </option>
                    @foreach ($dosens as $dosen)
                        <option value="{{ $dosen->nip }}" {{ old('id_dosen') == $dosen->nip ? 'selected=true' : ''}}>
                            {{ $dosen->nama_dosen }}
                        </option>
                    @endforeach  
                </div>
            </select>
            <div class="button">
                <button type="submit" class="">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

<!-- jQuery -->
<script src="{{ asset('AdminLTE') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="{{ asset('AdminLTE') }}/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('AdminLTE') }}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="{{ asset('AdminLTE') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('AdminLTE') }}/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="{{ asset('AdminLTE') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('AdminLTE') }}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('AdminLTE') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- BS-Stepper -->
<script src="{{ asset('AdminLTE') }}/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="{{ asset('AdminLTE') }}/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminLTE') }}/dist/js/demo.js"></script>
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>

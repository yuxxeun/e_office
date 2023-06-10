<link rel="stylesheet" href="{{ asset('css/suket_mhs_aktif.css') }}">
@extends('layouts.tambah_data')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li>
            <a href="{{ route('dosen.index') }}">Daftar Dosen</a>
        </li>
        <li><i class='bx bx-chevron-right'></i></li>
        <li>
            <a class="active" href="{{ route('dosen.create') }}">Tambah Dosen</a>
        </li>
    </ul>
@endsection

@section('form_input')
    <div class="table-data">
        <div class="order">
        @section('title_surat', 'Tambah Dosen')

        <form action="{{ route('dosen.store') }}" class="form" method="post">
            @csrf
            <div class="input-box">
                <label>NIP</label>
                <input type="text" name="nip" placeholder="Masukkan NIP">
            </div>
            <div class="input-box">
                <label>Nama Dosen</label>
                <input type="text" name="nama_dosen" placeholder="Masukkan nama dosen" required />
            </div>
            <div class="input-box">
                <label>Jabatan</label>
                <input type="text" name="jabatan" placeholder="Masukkan nama jabatan" required />
            </div>
            <div class="button">
                <button type="submit">Submit</button>
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

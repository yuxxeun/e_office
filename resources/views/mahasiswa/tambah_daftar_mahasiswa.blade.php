<link rel="stylesheet" href="{{ asset('css/suket_mhs_aktif.css') }}">

@extends('layouts.tambah_data')

@section('breadcrumb')
    <ul class="breadcrumb">
        <li>
            <a href="/daftar_mahasiswa">Daftar Mahasiswa</a>
        </li>
        <li><i class='bx bx-chevron-right'></i></li>
        <li>
            <a class="active" href="/tambah_daftar_mahasiswa">Tambah Daftar Mahasiswa</a>
        </li>
    </ul>
@endsection

@section('form_input')
    <div class="table-data">
        <div class="order">
        @section('title_surat', 'Tambah Daftar Mahasiswa')

        <form action="{{ route('mahasiswa.store') }}" class="form" method="post">
            @csrf
            <div class="input-box">
                <label>NIM</label>
                <input type="text" name="nim" placeholder="Masukkan NIM">
            </div>
            <div class="input-box">
                <label>Nama</label>
                <input type="text" name="nama" placeholder="Masukkan nama lengkap" required />
            </div>
            <div class="input-box">
                <label>Program Studi</label>
                <input type="text" name="prodi" placeholder="Masukkan program studi" required />
            </div>
            <div class="input-box address">
                <label>Jenis Kelamin</label>
                <div class="select-box">
                    <select name="j_kel" id="j_kel">
                        <option hidden>Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
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

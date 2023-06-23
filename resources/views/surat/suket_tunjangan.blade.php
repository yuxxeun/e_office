@extends('layouts.buat_naskah.content_form')
@section('breadcrumb')
<ul class="breadcrumb">
    <li>
        <a href="{{ route('buat-surat.create') }}">Buat Surat Keterangan Tunjangan</a>
    </li>
    <li><i class='bx bx-chevron-right'></i></li>
    <li>
        <a class="active" href="{{ route('suket.tunjanganStore') }}">Surat Keterangan Tunjangan Orang Tua</a>
    </li>
</ul>
@endsection

@section('form_input')
    <div class="table-data">
        <div class="order">
            @section('title_surat', 'Keterangan Tunjungan Orang Tua')
            <form method="post" action="{{ route('suket.tunjanganStore') }}">
                @csrf
                <div class="form-group row">
                    <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                    <div class="col-sm-10">
                        <input id="nomor_surat" name="nomor_surat" type="text" value="{{ $number }}" class="form-control disabled">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Tanggal Surat</label>
                    <div class="col-sm-10">
                        <input type="date" name="tanggal_surat" class="form-control" id="inputNama" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_mahasiswa" class="form-control" id="inputNama" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputNim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" name="nim" class="form-control" id="inputNim" placeholder="NIM">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputProdi" class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                        <input type="text" name="prodi" class="form-control" id="inputProdi" placeholder="Program Studi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSemester" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                        <input type="text" name="semester" class="form-control" id="inputSemester" placeholder="Semester">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputCp" class="col-sm-2 col-form-label">Contact Person</label>
                    <div class="col-sm-10">
                        <input type="text" name="contact_person" class="form-control" id="inputCp" placeholder="Contact Person">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputKeperluan" class="col-sm-2 col-form-label">Keperluan</label>
                    <div class="col-sm-10">
                        <input type="text" name="keperluan" class="form-control" id="inputKeperluan" placeholder="Keperluan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputKeperluan" class="col-sm-2 col-form-label">Nama orang Tua</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_ortu" class="form-control" id="inputKeperluan" placeholder="Keperluan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputKeperluan" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" name="nip" class="form-control" id="inputKeperluan" placeholder="Keperluan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputKeperluan" class="col-sm-2 col-form-label">Pangkat/Golongan</label>
                    <div class="col-sm-10">
                        <input type="text" name="pangkat_golongan" class="form-control" id="inputKeperluan" placeholder="Keperluan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputKeperluan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" name="jabatan" class="form-control" id="inputKeperluan" placeholder="Keperluan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputKeperluan" class="col-sm-2 col-form-label">Instansi</label>
                    <div class="col-sm-10">
                        <input type="text" name="instansi" class="form-control" id="inputKeperluan" placeholder="Keperluan">
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
<script src="{{asset('AdminLTE')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="{{asset('AdminLTE')}}/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('AdminLTE')}}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="{{asset('AdminLTE')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="{{asset('AdminLTE')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="{{asset('AdminLTE')}}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('AdminLTE')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- BS-Stepper -->
<script src="{{asset('AdminLTE')}}/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="{{asset('AdminLTE')}}/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE')}}/dist/js/demo.js"></script>
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>
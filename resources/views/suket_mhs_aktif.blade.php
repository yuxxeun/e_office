<link rel="stylesheet" href="{{asset('css/suket_mhs_aktif.css')}}">

@extends('layouts.buat_naskah.content_form')

@section('breadcrumb')
<ul class="breadcrumb">
    <li>
        <a href="/buat_naskah">Buat Naskah</a>
    </li>
    <li><i class='bx bx-chevron-right'></i></li>
    <li>
        <a class="active" href="/suket_mhs_aktif">Surat Keterangan Mahasiswa Aktif</a>
    </li>
</ul>
@endsection

@section('form_input')
<div class="table-data">
    <div class="order">
        @section('title_surat', 'Keterangan Mahasiswa Aktif')

        <form action="#" class="form">
            <div class="input-box">
                <label>Nama</label>
                <input type="text" placeholder="Masukkan nama lengkap">
                <div class="input-box">
                    <label>NIM</label>
                    <input type="text" placeholder="Masukkan NIM" required />
                </div>
                <div class="input-box">
                    <label>Program Studi</label>
                    <input type="text" placeholder="Masukkan program studi" required />
                </div>
                <div class="input-box">
                    <label>Semester</label>
                    <input type="text" placeholder="Masukkan semester" required />
                </div>
                <div class="input-box">
                    <label>Contact Person</label>
                    <input type="text" placeholder="Masukkan contact person" required />
                </div>
                <div class="input-box address">
                    <label>Alamat</label>
                    <input type="text" placeholder="Enter street address" required />
                    <input type="text" placeholder="Enter street address line 2" required />
                    <div class="column">
                        <div class="select-box">
                            <select>
                                <option hidden>Country</option>
                                <option>America</option>
                                <option>Japan</option>
                                <option>India</option>
                                <option>Nepal</option>
                            </select>
                        </div>
                        <input type="text" placeholder="Enter your city" required />
                    </div>
                    <div class="column">
                        <input type="text" placeholder="Enter your region" required />
                        <input type="number" placeholder="Enter postal code" required />
                    </div>
                </div>
                <div class="input-box">
                    <label>Keperluan</label>
                    <input type="text" placeholder="Masukkan keperluan" required />
                </div>
                <div class="button">
                    <button>Submit</button>
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
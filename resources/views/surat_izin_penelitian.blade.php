@extends('layouts.buat_naskah.content_form')

@section('title_surat', 'Izin Penelitian Tugas Akhir')

@section('form_input')
<br>
<div class="card-body">
    <div class="form-group row">
        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="nama" class="form-control" id="inputNama" placeholder="Nama">
        </div>
    </div>
</div>
@endsection
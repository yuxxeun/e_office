@extends('layouts.buat_naskah.content_form')
@section('title_surat', 'Izin Observasi Mata Kuliah')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li>
            <a href="{{ route('buat-surat.create') }}">Buat Surat</a>
        </li>
        <li><i class='bx bx-chevron-right'></i></li>
        <li>
            <a class="active" href="{{ route('buat-surat.matkul') }}">Surat Izin Observasi Matkul</a>
        </li>
    </ul>
@endsection
@section('form_input')
<br>
<div class="card-body">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>
</div>
@endsection
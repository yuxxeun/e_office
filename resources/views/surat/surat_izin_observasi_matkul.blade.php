@extends('layouts.buat_naskah.content_form')
@section('title_surat', 'Izin Observasi Mata Kuliah')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li>
            <a href="{{ route('buat-surat.create') }}">Buat Surat</a>
        </li>
        <li><i class='bx bx-chevron-right'></i></li>
        <li>
            <a class="active" href="{{ route('suket.observasi') }}">Surat Izin Observasi Matkul</a>
        </li>
    </ul>
@endsection
@section('form_input')
<div class="table-data">
    <div class="order">
    @section('title_surat', 'Surat Keterangan Observasi Mata Kuliah')
    <form action="{{ route('suket.observasiStore') }}" class="form" method="post">
        @csrf
        <div class="input-box">
            <label>Nomor Surat</label>
            <input type="text" value="{{ $number }}" readonly name="nomor_surat" required />
        </div>

        <div class="input-box">
            <label>Tanggal Surat</label>
            <input type="date" name="tanggal_surat" required />
        </div>

        <div class="input-box">
            <label>Nama Pimpinan Instansi</label>
            <input type="text" name="nama_pimpinan_instansi" placeholder="Masukkan nama pimpinan" required />
        </div>

        <div class="input-box">
            <label>Nama Instansi</label>
            <input type="text" name="nama_instansi" placeholder="Masukkan nama instansi" required />
        </div>

        <div class="input-box">
            <label>Alamat Instansi</label>
            <input type="text" name="alamat_instansi" placeholder="Masukkan alamat instansi" required />
        </div>

        <div class="input-box">
            <label>Dokumen/Data yang diperlukan</label>
            <input type="text" name="dokumen" placeholder="Masukkan alamat instansi" required />
        </div>

        <div class="input-box">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" placeholder="Masukkan alamat instansi" required />
        </div>

        <div class="input-box">
            <label>NIM</label>
            <input type="text" name="nim" placeholder="Masukkan alamat instansi" required />
        </div>

        <div class="input-box">
            <label>
                Program Studi
            </label>
            <select name="prodi" class="input-box address">
                <div class="select-box">
                    <option value="">
                        Pilih program studi
                    </option>
                    @foreach ($mahasiswas as $mahasiswa)
                        <option value="{{ $mahasiswa->prodi }}" {{ old('prodi') == $mahasiswa->prodi ? 'selected=true' : ''}}>
                            {{ $mahasiswa->prodi }}
                        </option>
                    @endforeach  
                </div>
            </select>
        </div>

        <div class="input-box">
            <label>Lokasi Observasi</label>
            <input type="text" name="lokasi_observasi" required />
        </div>

        <div class="input-box">
            <label>Waktu</label>
            <input type="date" name="waktu" required />
        </div>

        <div class="input-box">
            <label>Mata Kuliah</label>
            <input type="text" name="mata_kuliah" required />
        </div>

        <div class="input-box">
            <label>Contact Person</label>
            <input type="text" name="contact_person" required />
        </div>

        <div class="button">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
</div>
@endsection
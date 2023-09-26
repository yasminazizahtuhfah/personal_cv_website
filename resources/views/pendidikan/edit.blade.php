@extends('layout.template')
<!-- START FORM -->
@section('konten') 

<form action='{{ url('identitas/'.$data->id) }}' method='post' enctype="multipart/form-data">
@csrf 
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href='{{ url('identitas') }}' class="btn btn-secondary"><< kembali</a>
    <div class="mb-3 row">
        <label for="id" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            {{ $data->id }}
        </div>
    </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Instansi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_instansi' value="{{ Session::get('nama_instansi') }}" id="nama_instansi">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tempat_lahir" class="col-sm-2 col-form-label">Nama Jurusan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_jurusan' value="{{ Session::get('nama_jurusan') }}" id="nama_jurusan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tahun Masuk</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tahun_masuk' value="{{ Session::get('tahun_masuk') }}" id="tahun_masuk">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Tahun Lulus</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tahun_lulus' value="{{ Session::get('tahun_lulus') }}" id="tahun_lulus">
            </div>
        </div>
        
        <div class="mb-3 row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection
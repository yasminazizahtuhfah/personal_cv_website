@extends('layout.template')

@section('konten')
<form action='{{ url('portofolio') }}' method='post' enctype="multipart/form-data">
    @csrf 
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif  
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url('portofolio') }}' class="btn btn-secondary"><< Kembali</a>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">ID Identitas</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='identitas_id' value="{{ Session::get('identitas_id') }}" id="identitas_id">
            </div>
        </div>       
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Proyek</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_proyek' value="{{ Session::get('nama_proyek') }}" id="nama_proyek">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <<textarea class="form-control" name="deskripsi" id="deskripsi">{{ Session::get('deskripsi') }}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="foto_proyek" class="col-sm-2 col-form-label">Foto Proyek</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name='foto_proyek' id="foto_proyek">
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
@endsection

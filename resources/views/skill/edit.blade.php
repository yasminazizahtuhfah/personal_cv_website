@extends('layout.template')
<!-- START FORM -->
@section('konten') 

<form action='{{ url('skill/'.$data->id) }}' method='post' enctype="multipart/form-data">
@csrf 
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href='{{ url('skill') }}' class="btn btn-secondary"><< kembali</a>
    <div class="mb-3 row">
        <label for="id" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            {{ $data->id }}
        </div>
    </div>
        <div class="mb-3 row">
            <label for="skill" class="col-sm-2 col-form-label">Skill</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_skill' value="{{ Session::get('nama_skill') }}" id="nama_skill">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="persen_skill" class="col-sm-2 col-form-label">Persentase</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='persen_skill' value="{{ Session::get('persen_skill') }}" id="persen_skill">
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
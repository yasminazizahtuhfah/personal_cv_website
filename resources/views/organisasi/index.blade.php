@extends('layout.template')
@section('konten')

<div class="container my-3 p-3 bg-body rounded shadow-sm">
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{ url('organisasi') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='{{ url('organisasi/create') }}' class="btn btn-primary">+ Tambah Data</a>
    </div>
    
    <!-- TABEL DATA -->
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>ID Identitas</th>
                    <th>Nama Organisasi</th>
                    <th>Jabatan</th>
                    <th>Tahun Awal</th>
                    <th>Tahun Akhir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>
                        <a href="{{ url('identitas') }}">
                            {{ $item->identitas_id }}
                        </a>
                    </td>
                    <td>{{ $item->nama_organisasi }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->tahun_awal }}</td>
                    <td>{{ $item->tahun_akhir }}</td>
                    <td>
                        <a href='{{ url('organisasi/'.$item->id.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                        <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('organisasi/'.$item->id) }}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $data->withQueryString()->links() }}
</div>
<!-- AKHIR DATA -->
@endsection

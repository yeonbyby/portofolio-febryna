@extends('master')

@section('konten_utama')
<h2 class="fw-bold text-white">Daftar Portofolio Saya</h2>
<a href="/projects/create" class="btn btn-primary">Tambah Data</a>

<div class="row">
    @foreach($data_karya as $item)
    <div class="col-md-4">
        <div class="p-4 border border-secondary rounded-4 bg-dark h-100">
            <h4>{{ $item->judul }}</h4>
            <p>{{ $item->deskripsi }}</p>
            <a href="/projects/{{ $item->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
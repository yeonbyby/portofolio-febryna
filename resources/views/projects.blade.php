@extends('master')

@section('konten_utama')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-white m-0">Daftar Portofolio Saya</h2>
        <a href="/projects/create" class="btn btn-light rounded-pill px-4 fw-bold">Tambah Data</a>
    </div>

    @if(session('sukses'))
    <div class="alert alert-success bg-success text-white border-0 rounded-3 mb-4">
        {{ session('sukses') }}
    </div>
    @endif

    <div class="row">
        @foreach($data_karya as $item)
        <div class="col-md-4">
            <div class="p-4 border border-secondary rounded-4 bg-dark h-100">
                <div>
                    @if($item->foto)
                    <img src="{{ asset('img_karya/' . $item->foto) }}" class="img-fluid rounded-3 mb-3 w-100" style="height: 200px; object-fit: cover;" alt="Foto Karya">
                    @else
                    <div class="bg-secondary rounded-3 mb-3 d-flex align-items-center justify-content-center text-white" style="height: 200px;">
                        <span>Tidak ada foto</span>
                    </div>
                    @endif
                    <h4 class="text-white fw-bold mb-2">{{ $item->judul }}</h4>
                    <p class="text-secondary mb-4">{{ $item->deskripsi }}</p>
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <a href="/projects/{{ $item->id }}/edit" class="btn btn-sm btn-warning rounded-pill px-3 fw-bold">Edit</a>

                    <form action="/projects/{{ $item->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger rounded-pill px-3 fw-bold">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
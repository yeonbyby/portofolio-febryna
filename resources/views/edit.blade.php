@extends('master')

@section('konten_utama')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="fw-bold text-white mb-4">Edit Portofolio</h2>

            <form action="/projects/{{ $karya->id }}" method="POST" class="p-4 border border-secondary rounded-4 bg-dark">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="form-label text-white fw-bold">Judul Karya</label>
                    <input type="text" name="judul" value="{{ $karya->judul }}" class="form-control bg-secondary text-white border-0 rounded-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="form-label text-white fw-bold">Deskripsi</label>
                    <textarea name="deskripsi" rows="4" class="form-control bg-secondary text-white border-0 rounded-3" required>{{ $karya->deskripsi }}</textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-warning rounded-pill px-4 fw-bold">Update Data</button>
                    <a href="/projects" class="btn btn-outline-secondary rounded-pill px-4">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
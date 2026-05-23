@extends('master')
@section('konten_utama')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="fw-bold text-white mb-4">Tambah Portofolio Baru</h2>
            @if ($errors->any())
            <div class="alert alert-danger bg-danger text-white border-0 rounded-3 mb-4">
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="/projects/store" method="POST" enctype="multipart/form-data" class="p-4 border border-secondary rounded-4 bg-dark">
                @csrf

                <div class="mb-4">
                    <label class="form-label text-white fw-bold">Judul Karya</label>
                    <input type="text" name="judul" class="form-control bg-secondary text-white border-0 rounded-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="form-label text-white fw-bold">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control bg-secondary text-white border-0 rounded-3"></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label text-white fw-bold">Foto Karya</label>
                    <input type="file" name="foto" class="form-control bg-secondary text-white border-0" accept="image/*">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/projects">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('master')
@section('konten_utama')
<div>
    <div">
        <div>
            <h2>Tambah Portofolio Baru</h2>

            <form action="/projects/store" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Judul Karya</label>
                    <input type="text" name="judul" class="form-control"></textarea>
                </div>

                <div>
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/projects">Batal</a>
                </div>
            </form>
        </div>
</div>
</div>
@endsection
@extends('master')

@section('konten_utama')
<div class="container py-5 text-center">
    <h2 class="display-5 fw-bold mb-4">Tentang saya</h2>
    <p class="text-secondary mx-auto mb-5" style="max-width: 800px;">
        Saya adalah seorang pengembang perangkat lunak yang berdedikasi untuk membangun platform digital yang efisien.
        Saya menguasai berbagai instrumen pengembangan web dan aplikasi mobile, dengan ketertarikan khusus pada optimasi performa dan desain antarmuka yang bersih.
    </p>

    <h4 class="mb-4 text-secondary">Pendekatan saya</h4>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="approach-card">
                <span class="number-box">01</span>
                <span>Analisis & Perencanaan</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="approach-card">
                <span class="number-box">02</span>
                <span>Pengembangan Berbasis Kualitas</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="approach-card">
                <span class="number-box">03</span>
                <span>Pengalaman responsif</span>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-4 stat-box">
            <h2>02+</h2>
            <p>Tahun Pengalaman</p>
        </div>
        <div class="col-4 stat-box">
            <h2>15+</h2>
            <p>Proyek Selesai</p>
        </div>
        <div class="col-4 stat-box">
            <h2>05+</h2>
            <p>Client Terlayani</p>
        </div>
    </div>
</div>
@endsection
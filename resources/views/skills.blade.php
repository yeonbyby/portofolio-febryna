@extends('master')

@section('konten_utama')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="display-5 fw-bold">Keahlian saya</h2>
        <p class="text-secondary">Kombinasi antara logika pemrograman, desain antarmuka, dan manajemen database untuk menciptakan produk digital yang efisien dan terskala.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="skill-card">
                <h6 class="mb-3">Core Skills</h6>
                <span class="badge-skill">UI/UX layout</span>
                <span class="badge-skill">Frontend Dev</span>
                <span class="badge-skill">Responsive Design</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="skill-card">
                <h6 class="mb-3">Frontend Tech</h6>
                <span class="badge-skill">HTML</span>
                <span class="badge-skill">CSS</span>
                <span class="badge-skill">JS</span>
                <span class="badge-skill">Bootstrap</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="skill-card">
                <h6 class="mb-3">Design Tools</h6>
                <span class="badge-skill">Figma</span>
                <span class="badge-skill">Photoshop</span>
                <span class="badge-skill">Canva</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="skill-card">
                <h6 class="mb-3">Tools & Interaction</h6>
                <span class="badge-skill">GitHub</span> <span class="badge-skill">VS Code</span>
                <span class="badge-skill">Android Studio</span>
            </div>
        </div>
    </div>
</div>
@endsection
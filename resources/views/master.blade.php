<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Home - Febryna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark mt-3">
        <div class="container justify-content-center">
            <div class="navbar-nav d-flex flex-row gap-3">
                <a class="nav-link text-white border-bottom" href="/">Home</a>
                <a class="nav-link text-secondary" href="/about">About</a>
                <a class="nav-link text-secondary" href="/skills">Skills</a>
                <a class="nav-link text-secondary" href="/projects">Projects</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('konten_utama')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
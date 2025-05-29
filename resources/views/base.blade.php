<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'My Site')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/premiercaregiving.scss'])
</head>
<body>

<nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">Premier Caregiving</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="/bio">Bio</a></li>
                <li class="nav-item"><a class="nav-link active" href="/contact">Contact Me</a></li>
            </ul>
        </div>
    </div>
</nav>

{{-- Main Content --}}
    <main class="container">
        @yield('content')
    </main>

<footer class="py-4 bg-light border-top text-center small">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">PremierCaregiving.com</div>
            <div class="col-md-4">
                <p class="mb-0">1541 South Ocean Blvd Unit 411<br>Pompano Beach FL 33062</p>
                <img src="{{ asset('images/pride_flag.svg') }}" alt="Progress Pride Flag" class="mt-2" style="max-height: 40px;">
            </div>
            <div class="col-md-4">
                <div>(954) 543-0946</div>
                <div><a href="mailto:brookhardinpeach@gmail.com">brookhardinpeach@gmail.com</a></div>
            </div>
        </div>
    </div>
</footer>

@vite(['resources/js/app.js'])
</body>
</html>

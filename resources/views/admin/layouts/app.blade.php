<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS -->
    @include('admin.layouts.css')
</head>

<body>
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="../../index.html">
            <img class="navbar-brand-dark" src="{{ asset('assets-admin/img/brand/light.svg') }}" alt="Volt logo" />
            <img class="navbar-brand-light" src="{{ asset('assets-admin/img/brand/dark.svg') }}" alt="Volt logo" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    {{-- Sidebar --}}
    @include('admin.layouts.sidebar')

    {{-- Konten utama --}}
    <main class="content">
        {{-- Header / Navbar --}}
        @include('admin.layouts.header')

        {{-- ISI HALAMAN --}}
        <div class="container-fluid p-4">
            @yield('content')
        </div>

        {{-- Footer --}}
        @include('admin.layouts.footer')
    </main>

    {{-- Javascript --}}
    @include('admin.layouts.js')
</body>

</html>

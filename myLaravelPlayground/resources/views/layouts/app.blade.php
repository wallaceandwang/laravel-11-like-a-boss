<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My L322 Tribute Page')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
            padding-bottom: 2rem; 
        }
        @media (min-width: 992px) {
            .navbar-nav {
                width: 100%;
                justify-content: space-around;
            }
        }
    </style>
</head>
<body>
    {{-- Include Navbar --}}
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    {{-- Include Footer --}}
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

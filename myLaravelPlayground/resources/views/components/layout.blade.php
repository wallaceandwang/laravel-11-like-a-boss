<!-- resources/views/components/layout-component.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My L322 Tribute Page' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    {{ $head ?? '' }}
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
        
        .navbar-custom {
        background-color: #333;
        border-bottom: 3px solid #ff6600;
        }
        .navbar-custom .navbar-brand {
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .navbar-custom .nav-link {
            color: #fff;
            margin-left: 15px;
            transition: color 0.3s;
        }
        .navbar-custom .nav-link:hover {
            color: #ff6600;
        }

        .footer-custom {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        border-top: 3px solid #ff6600;
        }
        .footer-custom p {
            font-size: 1.2rem;
            margin: 0;
        }

        
    </style>
</head>
<body>
    <x-navbar />
    
    <main>
        {{ $slot }}
    </main>

    <x-footer />
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg" id="">
        <div class="container">
            <a href="" class="navbar-brand">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
                insidedin</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link text-uppercase">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-uppercase">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-uppercase">Showcase</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-uppercase">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-uppercase">Dinesign</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- content --}}
    @yield('konten')

    {{-- footer --}}
    <footer class="footer text-center py-3">
        <p>Copyright &copy; 2025 <strong>insidedin</strong>
        All Right Reserved. <br><strong>Andini Rahmatillah</strong></p>
    </footer>

    {{-- library animasi  --}}
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        width: 100%;
    }
    .card:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
    }
    .card-title {
        font-weight: 600;
    }
    .card-text {
        font-size: 0.9rem;
    }
    /* footer */
    #footer {
        font-family: var(--nav-font);
    }

    #footer strong {
        color: #8e6336;
    }

    .footer-nav a {
        text-decoration: none;
        color: #6c757d;
        transition: color 0.3s;
    }

    .footer-nav a:hover {
        color: #8e6336;
    }


    /* scroll to top button */
    #scrollTopBtn {
        display: none; /* hidden by default */
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 99;
        width: 50px;
        height: 50px;
        font-size: 15px;
        background-color: #8e6336;
        color: white;
        border: none;
        outline: none;
        padding: 12px 15px;
        border-radius: 50%;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        transition: all 0.3s ease-in-out;
    }

    #scrollTopBtn:hover {
        background-color: #442d15;
    }

    </style>
</head>
<body>
    {{-- side --}}

    {{-- body / project --}}
    @yield('konten')

    {{-- footer --}}
    <footer id="footer" class="bg-light pt-5 pb-4">
        <div class="container text-md-start text-center">
            <div class="row">
                <!-- Logo & Description -->
                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 40px; height: auto;" class="me-2">
                        <h5 class="mb-0"><strong>insidedin</strong></h5>
                    </div>
                    <p class="text-muted">Let’s grow and inspire through code, creativity, and consistency.</p>
                    <div>
                        <a href="https://github.com/insidedin" class="me-2 text-dark"><i class="fab fa-github icon"></i></a>
                        <a href="https://www.linkedin.com/in/andinirahmatillah/" class="me-2 text-dark"><i class="fab fa-linkedin icon"></i></a>
                        <a href="https://www.instagram.com/insidedin" class="me-2 text-dark"><i class="fab fa-instagram icon"></i></a>
                        <a href="https://medium.com/@insidedin" class="me-2 text-dark"><i class="fab fa-medium icon"></i></a>
                        {{-- <a href="mailto:andini.rahmatillah@gmail.com" class="text-dark"><i class="fas fa-envelope icon"></i></a> --}}
                    </div>
                </div>
                <!-- Navigation -->
                <div class="col-md-2 mb-4">
                    <h6 class="fw-bold">Navigation</h6>
                    <ul class="list-unstyled footer-nav">
                        <li><a href="#profile">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skill">Skills</a></li>
                        <li><a href="#showcase">Showcase</a></li>
                    </ul>
                </div>
                <!-- Contact -->
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">Contact</h6>
                    <p class="text-muted mb-1"><i class="fas fa-phone icon me-2 text-dark"></i>+6281273087299</p>
                    <p class="text-muted mb-1"><i class="fas fa-envelope icon me-2 text-dark"></i> insidedin@gmail.com</p>
                    <p class="text-muted"><i class="fas fa-map-marker-alt icon me-2 text-dark"></i>   Palembang, Indonesia</p>
                </div>
                <!-- About This Site -->
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">About This Site</h6>
                    <p class="text-muted">This website is a personal portfolio built with love, clean code, and lots of coffee ☕. Thanks for stopping by!</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scroll to Top Button -->
    <button onclick="scrollToTop()" id="scrollTopBtn" title="Kembali ke atas">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Show/hide button on scroll
            window.onscroll = function () {
            let btn = document.getElementById("scrollTopBtn");
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                btn.style.display = "block";
            } else {
                btn.style.display = "none";
            }
            };

            // Scroll to top smoothly
            function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
            }
    </script>

    {{-- library animasi  --}}
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
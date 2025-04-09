@extends('layouts.app')

@section('judul', 'Andini Portfolio')

@section('konten')

{{-- profile --}}
<section id="profile">
    <section id="profile" class="d-flex justify-content-center align-items-center flex-wrap">
        <div class="section__pic-container text-center">
            <img src="{{ asset('assets/images/andini.jpeg') }}" alt="It's Andini" class="profile-img" />
        </div>
        <div class="section__text text-center text-md-start ms-md-5 mt-4 mt-md-0">
            <p class="section__text__p1 text-center">Hello, There!</p>
            <h1 class="title text-center">I'm Andini</h1>

            <div class="wrapper">
                <ul class="dynamic-txts text-center">
                    <li><span>Graphics Designer</span></li>
                    <li><span>UI/UX Designer</span></li>
                    <li><span>Front-End Developer</span></li>
                    <li><span>Mobile Developer</span></li>
                </ul>
            </div>

            <div class="text-center my-3">
                <div class="btn-container">
                    <button class="btn btn-dark px-4 py-2">More</button>
                </div>

                <div id="socials-container" class="d-flex justify-content-center gap-3 mt-4">
                    <a href="https://github.com/insidedin" target="_blank">
                        <i class="fab fa-github icon"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/andinirahmatillah/" target="_blank">
                        <i class="fab fa-linkedin icon"></i>
                    </a>
                    <a href="https://www.instagram.com/insidedin" target="_blank">
                        <i class="fab fa-instagram icon"></i>
                    </a>
                    <a href="https://medium.com/@insidedin" target="_blank">
                        <i class="fab fa-medium icon"></i>
                    </a>
                    {{-- <a href="https://tiktok.com/@username" target="_blank">
                        <i class="fab fa-tiktok icon"></i>
                    </a> --}}
                    <a href="mailto:andini.rahmatillah@gmail.com" target="_blank">
                        <i class="fas fa-envelope icon"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>
</section>

{{-- about --}}
<section id="about" class="container mt-5 mb-5">
    <div class="text-center">
        <p class="section__text__p1 text-center">Get To Know More</p>
        <h1 class="title">About Me</h1>
        <p class="text-center mt-5">
            I am a passionate and dedicated individual with a strong interest in technology and design. I have a background in graphic design, UI/UX design, and front-end development. I enjoy creating visually appealing and user-friendly interfaces that enhance the overall user experience.
        </p>
        <p class="mb-5">Here’s a quick snapshot of my background in education, organization, and achievements.</p>

        <div class="row justify-content-center">
            <!-- Education Column -->
            <div class="col-md-5 mb-4">
                <div class="p-4 shadow rounded bg-white">
                    <h5><i class="fas fa-graduation-cap me-2 text-warning"></i>Education</h5>
                    <hr>
                    <div class="mb-3">
                        <small class="text-muted">2021 – 2024</small>
                        <h6 class="mb-0">Sriwijaya State Polytechnic</h6>
                        <p class="text-muted">Informatics Management</p>
                    </div>
                </div>
            </div>

            <!-- Work Experience Column -->
            <div class="col-md-5 mb-4">
                <div class="p-4 shadow rounded bg-white">
                    <h5><i class="fas fa-briefcase me-2 text-primary"></i>Work Experience</h5>
                    <hr>
                    <div class="mb-3">
                        <small class="text-muted">2022 – 2024</small>
                        <h6 class="mb-0">UKM LDK Karisma POLSRI</h6>
                        <p class="text-muted">Multimedia, Humas, Pers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- skills --}}
<secion id="skills" class="">
    <div class="text-center">
        <p class="section__text__p1 text-center">Explore My</p>
        <h1 class="title mb-5">Skills</h1>
    </div>

    <div class="skills-carousel mt-4">
        <div class="skills-track">
            <!-- Repeat the icons twice for smooth loop -->
            <div class="skill-icon"><i class="devicon-dart-plain colored"></i><p>Dart</p></div>
            <div class="skill-icon"><i class="devicon-flutter-plain colored"></i><p>Flutter</p></div>
            <div class="skill-icon"><i class="devicon-laravel-plain colored"></i><p>Laravel</p></div>
            <div class="skill-icon"><i class="devicon-php-plain colored"></i><p>PHP</p></div>
            <div class="skill-icon"><i class="devicon-html5-plain colored"></i><p>HTML</p></div>
            <div class="skill-icon"><i class="devicon-css3-plain colored"></i><p>CSS</p></div>
            <div class="skill-icon"><i class="devicon-bootstrap-plain colored"></i><p>Bootstrap</p></div>
            <div class="skill-icon"><i class="devicon-javascript-plain colored"></i><p>JavaScript</p></div>
            <div class="skill-icon"><i class="devicon-java-plain colored"></i><p>Java</p></div>
            <div class="skill-icon"><i class="devicon-firebase-plain colored"></i><p>Firebase</p></div>
            <div class="skill-icon"><i class="devicon-photoshop-plain colored"></i><p>Photoshop</p></div>
            <div class="skill-icon"><i class="devicon-figma-plain colored"></i><p>Figma</p></div>
            <div class="skill-icon"><i class="fas fa-pen-nib text-success"></i><p>CorelDraw</p></div>
            <div class="skill-icon"><i class="devicon-wordpress-plain colored"></i><p>WordPress</p></div>

            <!-- Duplicate for seamless looping -->
            <div class="skill-icon"><i class="devicon-dart-plain colored"></i><p>Dart</p></div>
            <div class="skill-icon"><i class="devicon-flutter-plain colored"></i><p>Flutter</p></div>
            <div class="skill-icon"><i class="devicon-laravel-plain colored"></i><p>Laravel</p></div>
            <div class="skill-icon"><i class="devicon-php-plain colored"></i><p>PHP</p></div>
            <div class="skill-icon"><i class="devicon-html5-plain colored"></i><p>HTML</p></div>
            <div class="skill-icon"><i class="devicon-css3-plain colored"></i><p>CSS</p></div>
            <div class="skill-icon"><i class="devicon-bootstrap-plain colored"></i><p>Bootstrap</p></div>
            <div class="skill-icon"><i class="devicon-javascript-plain colored"></i><p>JavaScript</p></div>
            <div class="skill-icon"><i class="devicon-java-plain colored"></i><p>Java</p></div>
            <div class="skill-icon"><i class="devicon-firebase-plain colored"></i><p>Firebase</p></div>
            <div class="skill-icon"><i class="devicon-photoshop-plain colored"></i><p>Photoshop</p></div>
            <div class="skill-icon"><i class="devicon-figma-plain colored"></i><p>Figma</p></div>
            <div class="skill-icon"><i class="fas fa-pen-nib text-success"></i><p>CorelDraw</p></div>
            <div class="skill-icon"><i class="devicon-wordpress-plain colored"></i><p>WordPress</p></div>
        </div>
    </div>
</secion>

{{-- showcase --}}
<section id="showcase" class="py-5">
    <div class="text-center">
        <p class="section__text__p1 text-center">Browser My Recent</p>
        <h1 class="title mb-5">Project</h1>
    </div>

    <div class="container">
        <div class="row g-4 justify-content-center">
        <!-- Showcase Card -->
            <div class="col-md-6 col-lg-3">
                <div class="project-card position-relative text-center p-3 rounded" style="background-color: #000;">
                    <img src="assets/images/1.png" alt="Mobile App" class="img-fluid project-mockup">
                    <a href="mobile-app.html" class="badge bg-light text-dark mt-3 d-inline-block px-3 py-2 rounded-pill shadow-sm" style="text-decoration: none;">
                    Mobile App <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="project-card position-relative text-center p-3 rounded" style="background-color: #6200ea;">
                    <img src="assets/images/2.png" alt="Web App" class="img-fluid project-mockup">
                    <a href="web-app.html" class="badge bg-light text-dark mt-3 d-inline-block px-3 py-2 rounded-pill shadow-sm" style="text-decoration: none;">
                        Web App <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="project-card position-relative text-center p-3 rounded" style="background-color: #ff5722;">
                    <img src="assets/images/3.png" alt="UI/UX Design" class="img-fluid project-mockup">
                    <a href="uiux-design.html" class="badge bg-light text-dark mt-3 d-inline-block px-3 py-2 rounded-pill shadow-sm" style="text-decoration: none;">
                        UI/UX Design <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="project-card position-relative text-center p-3 rounded" style="background-color: #4caf50;">
                    <img src="assets/images/4.png" alt="Graphic Design" class="img-fluid project-mockup">
                    <a href="graphic-design.html" class="badge bg-light text-dark mt-3 d-inline-block px-3 py-2 rounded-pill shadow-sm" style="text-decoration: none;">
                        Graphic Design <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- dinesign --}}
<section id="dinesign" class="">

</section>


@endsection
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
            <!-- Education Card -->
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center">
                        <i class="fas fa-graduation-cap fa-2x mb-3 text-primary"></i>
                        <h5 class="card-title">Education</h5>
                        <ul class="list-unstyled mt-3">
                            <li><strong>Sriwijaya State Polytechnics</strong></li>
                            <li>Major in Informatics Management</li>
                            <li>Graduated in 2024</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Organization Card -->
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center">
                        <i class="fas fa-briefcase fa-2x mb-3 text-success"></i>
                        <h5 class="card-title">Profesional experience</h5>
                        <ul class="list-unstyled mt-3">
                            <li><strong>UKM LDK Karisma POLSRI</strong></li>
                            <li>Humas, Multimedia, Pers</li>
                            <li>2022 – 2024</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Achievement Card -->
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center">
                        <i class="fas fa-trophy fa-2x mb-3 text-warning"></i>
                        <h5 class="card-title">Achievements</h5>
                        <ul class="list-unstyled mt-3">
                            <li><strong>E-Goverment 3rd Winner</strong></li>
                            <li>KMIPN V - 2023</li>
                        </ul>
                        <ul class="list-unstyled mt-3">
                            <li><strong>Cipta Inovasi TIK 2nd Winner <br>of Profile Product Design</strong></li>
                            <li>KMIPN VI - 2024</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- skills --}}
<secion id="skills" class="">

</secion>

{{-- showcase --}}
<section id="showcase" class="">

</section>

{{-- contact --}}
<section id="contact" class="">

</section>

{{-- dinesign --}}



@endsection
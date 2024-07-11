<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resume - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/fe/startbootstrap-resume-gh-pages/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Putri Maulidiyah</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                    src="{{ asset('uploads/' . $setting->profile_picture) }}" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    <?php
                    $fullname = $profile->fullname;
                    $explode = explode(' ', $fullname);

                    echo $explode[0]; //. ' ' . $explode[1];
                    // Cara kedua untuk menggabungkan : bisa pakai echo $explode[1]; //
                    ?>
                    <span class="text-primary">{{ $explode[1] }}</span>
                </h1>
                <div class="subheading mb-5">
                    {{ $profile->address }} · {{ $profile->phone }} ·
                    <a href="mailto:{{ $profile->email }}">{{ $profile->email }}</a>
                </div>
                <p class="lead mb-5">{{ $profile->description }}</p>
                <div class="social-icons">
                    <a target="_blank" class="social-icon" href="{{ $profile->linkedin_link }}"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a target="_blank" class="social-icon" href="{{ $profile->github_link }}"><i
                            class="fab fa-github"></i></a>
                    <a target="_blank" class="social-icon" href="{{ $profile->instagram_link }}"><i
                            class="fab fa-instagram"></i></a>
                    <a target="_blank" class="social-icon" href="{{ $profile->facebook_link }}"><i
                            class="fab fa-facebook"></i></a>
                    <a target="_blank" class="social-icon" href="{{ $profile->youtube_link }}"><i
                            class="fab fa-youtube"></i></a>
                    <a target="_blank" class="social-icon" href="{{ $profile->tiktok_link }}"><i
                            class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Experience</h2>
                @foreach ($experiences as $experience)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $experience->job_name }}</h3>
                            <div class="subheading mb-3">{{ $experience->company_name }}</div>
                            <p>{{ $experience->job_description }}</p>
                            @foreach ($experiences as $experiences)
                            @endforeach
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{ $experience->tgl_mulai }} -
                                {{ $experience->tgl_selesai }}</span></div>
                    </div>
                @endforeach
            </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education</h2>
                {{-- @dd($education2) --}}
                @foreach ($education2 as $education)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $education->nama_sekolah }}</h3>
                            <div class="subheading mb-3">{{ $education->jurusan }} -
                                {{ $education->fakultas }}
                            </div>
                            <p>{{ $education->gpa }}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{ $education->tahunmasuk }} -
                                {{ $education->tahunkeluar }}</span></div>
                    </div>
                @endforeach
            </div>
        </section>
        <hr class="m-0" />
        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Skills</h2>
                <div class="subheading mb-3">Tools</div>
                <ul class="list-inline dev-icons">
                    <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                    <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                    <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                    <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                    <li class="list-inline-item"><i class="fab fa-react"></i></li>
                    <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                    <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                    <li class="list-inline-item"><i class="fab fa-less"></i></li>
                    <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                    <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
                    <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
                    <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                </ul>
                <div class="subheading mb-3">{{ $skill->workflow }}</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Mobile-First, Responsive Design
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Cross Browser Testing & Debugging
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Cross Functional Teams
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Agile Development & Scrum
                    </li>
                </ul>
                <div class="subheading mb-3">{{ $skill->bahasa }}</div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Interests-->
        <section class="resume-section" id="interests">
            <div class="resume-section-content">
                <h2 class="mb-5">Interests</h2>
                @foreach ($interests as $interest)
                <p>{{ $interest->description_interest }}</p>
                @endforeach
            </div>
        </section>
        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Awards & Certifications</h2>
                @foreach ($awards as $award)
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        {{ $award->name_awards }} - {{ $award->penyelenggara }}
                        <div class="flex-shrink-0"><span class="text-primary">{{ $award->thn_penyelenggara }}</span></div>
                    </li>
                </ul>
                @endforeach
            </div>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>

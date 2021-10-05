@extends('frontend.layout')
@section('content')

<!-- [3] Page-Header -->
<header class="page-header parallax-window bg_img dark_overlay" data-src="img/breadcrumbs/team.jpg">
        <div class="container breadcrumbs-wrapper">
            <div class="breadcrumbs d-flex flex-column justify-content-center">
                <h1 class="title">Equipe</h1>
                <div>
                    <ul class="breadcrumbs-list d-flex">
                        <li>
                            <a href="{{ route('layout') }}">Accueil</a>
                        </li>
                        <li>
                            <a href="#">Equipe</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- [4] About Person -->
    <section class="about-person">
        <div class="container large-section">
            <div class="row about-person-wrapper">
                <div class="col-lg-6 image-wrapper" data-aos="fade-right"
                     data-aos-delay="150"
                     data-aos-anchor-placement="top-bottom"
                     data-aos-easing="ease-in-out"
                     data-aos-duration="600">
                    <img src="img/assets/ahmed.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div data-aos="fade-left"
                         data-aos-delay="200"
                         data-aos-anchor-placement="top-bottom"
                         data-aos-easing="ease-in-out"
                         data-aos-duration="600">
                        <h3 class="name">Ahmed Ben Hsouna</h3>
                        <p class="position">Fondateur et PDG</p>
                        <p class="description">
                            Ingénieur logiciel, Formateur en développement Web, Enseignant universitaire à l'ISSATSo et Formateur Business Model Canvas (BMC)
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- [6] Team Grid -->
    <section class="meet-team cards-section gray-section" style="background-image: url('img/assets/absurdity.png')">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section-title text-center title-divider"
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-anchor-placement="top-bottom"
                        data-aos-easing="ease-in-out"
                        data-aos-duration="700">Rencontrez Notre Equipe <span class="highlight">.</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6"
                     data-aos="fade-up"
                     data-aos-delay="150"
                     data-aos-anchor-placement="top-bottom"
                     data-aos-easing="ease-in-out"
                     data-aos-duration="600">
                    <div class="team-member-type-2">
                        <div class="img-wrapper">
                            <img src="img/assets/ramzi.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="description-box">
                            <h6 class="name">Ramzi Bouzaiene</h6>
                            <p class="position">Développeur</p>
                            <div class="social-wrapper d-flex">
                                <a href="#" class="social-box facebook-h">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-box twitter-h">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-box linkedin-h">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="social-box google-plus-h">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </section>


@endsection
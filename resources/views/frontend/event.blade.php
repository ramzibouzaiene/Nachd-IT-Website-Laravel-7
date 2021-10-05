@extends('frontend.layout')
@section('content')

<header class="page-header parallax-window bg_img dark_overlay" data-src="img/breadcrumbs/single-post.jpg">
        <div class="container breadcrumbs-wrapper">
            <div class="breadcrumbs d-flex flex-column justify-content-center">
                <h1 class="title">Evénement</h1>
                <div>
                    <ul class="breadcrumbs-list d-flex">
                        <li>
                            <a href="{{ route('layout') }}">Accueil</a>
                        </li>
                        <li>
                            <a href="#">Evénement</a>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- [4] Blog Section -->
    <section class="white-section blog-section single-post-section">
        <div class="container"
             data-aos="fade"
             data-aos-anchor-placement="top-bottom"
             data-aos-easing="ease-in-out"
             data-aos-duration="800">
            <div class="row">
                <div class="col single-post-wrapper">
                    <div class="post-content">
                        <a href="event.html"> Enova Robotics lance Start-U 2021</a>
                        <p class="text-part"> Vous souhaitez avoir un Full Time Job avec une formation assurée par des experts tout 
                            en poursuivant vos études et décrocher votre diplôme d’ingénieur</p>
                    </div>
                    <div class="post-content">
                        <a href="event2.html"> JOURNEE PORTES OUVERTES</a>
                        <p class="text-part"> Centre de carrière et certification des compétences ISSAT Sousse
                            Mercredi 31 Mars 2021</p>
                    </div>
                </div>
            </div>
        </div>
                        
    </section>
@endsection
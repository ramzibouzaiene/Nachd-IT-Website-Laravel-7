@extends('frontend.layout')
@section('content')
<header class="page-header parallax-window bg_img dark_overlay" data-src="img/breadcrumbs/single-post.jpg">
        <div class="container breadcrumbs-wrapper">
            <div class="breadcrumbs d-flex flex-column justify-content-center">
                <h1 class="title">Enova Robotics lance Start-U 2021</h1>
                <div>
                    <ul class="breadcrumbs-list d-flex">
                        <li>
                            <a href="{{ route('layout') }}">Accueil</a>
                        </li>
                        <li>
                            <a href="{{ route('event') }}">Evénement</a>
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
                        <h3 class="titre1">Enova Robotics lance Start-U 2021</h3> <br>
                        <p class="text1"> Vous souhaitez avoir un Full Time Job avec une formation assurée par des experts tout en poursuivant 
                            vos études et décrocher votre diplôme d’ingénieur <br>
                            Enova Robotics, avec le soutien de la GIZ recrute des Alternants pour travailler à plein temps et vous offre une bourse d’étude pour 3 ans
                            de cycle d’ingénieur dans les plus prestigieuses des écoles.<br>
                            Postulez sur <span style="color:green">alternance@enovarobotics.eu </span> <br>
                            Profils acceptés : Licence et Master <br>
                            #StartU2021 #EnovaRobotics</p>
                        
    </section>



@endsection
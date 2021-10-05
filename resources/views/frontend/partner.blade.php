@extends('frontend.layout')
@section('content')

<header class="page-header parallax-window bg_img dark_overlay" data-src="img/breadcrumbs/single-post.jpg">
        <div class="container breadcrumbs-wrapper">
            <div class="breadcrumbs d-flex flex-column justify-content-center">
                <h1 class="title">Partenaires</h1>
                <div>
                    <ul class="breadcrumbs-list d-flex">
                        <li>
                            <a href="{{ route('layout') }}">Accueil</a>
                        </li>
                        <li>
                            <a href="#">Partenaires</a>
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
                        <div align=center> 
                            <img src="img/assets/4C.png" alt="" class="img4" >
                        </div>
                        <h3 class="titre1">4C ISSAT SOUSSE</h3> <br>
                        <p class="text1"> <span style="color:blue"> C’est quoi un centre 4C ? </span> <br>
                            En référence au plan stratégique de la Réforme de l’Enseignement Supérieur et de la Recherche Scientifique et 
                            particulièrement à son objectif d’améliorer l’insertion professionnelle des diplômés, 
                            le Ministère a impulsé un programme visant à renforcer les Centres de Carrière et de Certification des Compétences
                            les « 4C ». <br>
                            Le centre 4C ISSAT Sousse offre des services de:<br>
                            - conseil aux étudiants dans le choix du parcours académique et dans la planification de leur carrière professionnelle <br>
                            - accompagnement dans la préparation du dossier candidature pour une insertion professionnelle <br>
                            - Formation en soft skills, techniques de recherche d'emploi et entrepreneuriat <br>
                            - Certification en langues et en TIC <br>
                            - Organisation de rencontres, visites sur site et journées carrières avec les entreprises <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
                        
    </section>
@endsection
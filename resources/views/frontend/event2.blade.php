@extends('frontend.layout')
@section('content')

<!-- [3] Page-Header -->
<header class="page-header parallax-window bg_img dark_overlay" data-src="img/breadcrumbs/single-post.jpg">
        <div class="container breadcrumbs-wrapper">
            <div class="breadcrumbs d-flex flex-column justify-content-center">
                <h1 class="title">JOURNEE PORTES OUVERTES </h1>
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
                        <h3 class="titre1">JOURNEE PORTES OUVERTES</h3> <br>
                        <p class="text1"> Centre de carrière et certification des compétences ISSAT Sousse
                            Mercredi 31 Mars 2021 <br>
                            Programme: <br>
                            13H30 : 14H00 Accueil & Inscription <br>
                            14H00 : 14H05 Mot d’ouverture (Prof. Chokri SOUANI : Directeur ISSAT Sousse) <br>
                            14H05 : 14H10 Mot de bienvenue et présentation de l’équipe 4C (M. Mounir FRIJA : Directeur centre 4C ISSAT Sousse) <br>
                            14H10 : 14H20 Les soft skills, des compétences indispensables pour les étudiants ( Coach Mohamed KAMMOUN : Consultant en développement des compétences sociales & personnelles ) <br>
                            14H20 : 14H35 Présentation du centre de carrière et certification des compétences ISSAT Sousse : Historique, activités et programme 2021. (Mme. Hanene Memmi : Responsable Communication et réseautage centre 4C ISSAT Sousse) <br>
                            14H35 : 14H40 Présentation de la plateforme Nationale des centres 4C <br>
                            WWW.4C.TN (Mme. Dalel KANZARI : Responsable formation 4C ISSAT Sousse) <br>
                            14H40 : 14H50 Intronisation des étudiants ambassadeurs centre 4C ISSAT Sousse (Témoignage) <br>
                            14H50 : 15H10 Présentation de projet d’aménagement INNOVATION HUB ISSATSo (Mme. Alia GALLAS Maitre assistante ISBAS Sousse : chef d’équipe design espace HUB) <br>
                            15H10 :15H15 Honnoration des Membres de l’équipe Design Espace ISBAS Sousse (Projet INNOVATION HUB ISSATSo) <br>
                            15H15 : 15H30 Statut de l’étudiant entrepreneur (M. Mehdi HADDADA : Chef de service de la recherche scientifique et chargé de l'ouverture à l'environnement à l'Université de Sousse. Directeur du 4C de l'Université de Sousse) <br>
                            15H30 : 16H00 Signature des conventions cadre de partenariat et de collaboration avec des partenaires industriels et socio-économiques (NOVATION CITY/ BBS /AMM/VTU/ PMT / GCER / VEGE MOTEURS/ XPERT MECA/ EPI D’OR/ HPC GROUPE / CENTRE AFFAIRE SOUSSE). <br>
                            16H00 Clôture de l’évènement</p>
                        
    </section>



@endsection
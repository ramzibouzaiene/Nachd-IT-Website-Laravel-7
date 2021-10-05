@extends('frontend.layout')
@section('content')

<!-- [3] Page-Header -->
<header class="page-header parallax-window bg_img dark_overlay" data-src="img/breadcrumbs/elements.jpg">
        <div class="container breadcrumbs-wrapper">
            <div class="breadcrumbs d-flex flex-column justify-content-center">
                <h1 class="title">Nachd-it</h1>
                <div>
                    <ul class="breadcrumbs-list d-flex">
                        <li>
                            <a href="{{ route('layout') }}">Présentation</a>
                        </li>
                        <li>
                            <a href="#">Nachd-it</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- [4] Elements -->
    <section class="white-section blog-section single-post-section">
        <div class="container"
             data-aos="fade"
             data-aos-anchor-placement="top-bottom"
             data-aos-easing="ease-in-out"
             data-aos-duration="800">
            <div class="row">
                <div class="col single-post-wrapper">
                    <div class="post-content">
                        <h3 class="titrestage">NACHD-IT?</h3>
                        <p class="text-part">NACHD-IT est une société d’informatique, crée en 2017 et spécialisée en développement Web, Mobile et Desktop , 
                            et services informatiques. Associés à parts égales : L’expérience utilisateur, la conception, le développement et le Webdesign, 
                            et avec les valeurs : Organisation, collaboration, confiance et responsabilité, 
                            NACHD-IT est une équipe jeune et dynamique réunie pour répondre aux besoins de ses clients et les accompagner tout au long de leurs projets.  </p>
    </section>

@endsection
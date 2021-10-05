@extends('frontend.layout')
@section('content')

<header class="page-header parallax-window bg_img dark_overlay" data-src="img/breadcrumbs/elements.jpg">
        <div class="container breadcrumbs-wrapper">
            <div class="breadcrumbs d-flex flex-column justify-content-center">
                <h1 class="title">Développeur Web Full Stack</h1>
                <div>
                    <ul class="breadcrumbs-list d-flex">
                        <li>
                            <a href="{{ route('layout') }}">Accueil</a>
                        </li>
                        <li>
                            <a href="{{ route('jobs') }}">Offre</a>
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
                        <h3 class="titre1">Développeur Web Full Stack</h3>
                        <p class="text1">Vous souhaitez participer à la croissance de notre startup et vous avez les qualifications requises ?!
                            Vous êtes passionné par les startups et souhaitez rejoindre une équipe dynamique ?
                             
                            Nachd-IT fête le 2ème anniversaire de sa création et a décidé d'agrandir son équipe par un « Full Stack Web Developer ». Ne manquez pas l'opportunité de recruter NACHD-IT. </p>
                        
                            <h2 class="ttr">Principales tâches et missions, responsabilités :</h2> <br>
                            <p class="text-part">- Full-stack/ Fronted - Backend. <br>
                                - API management, integration and testing.$*<br>
                                - DevOps - Agile/Scrum, POC (Proof of concept), « Design Thinkig » and « System Thinking »
                            </p>
                                <h2 class="ttr"> Quelles sont les compétences requises ? </h2> <br>
                                <p class="text-part">
                                    - Web Framework : Laravel, Angular/React Js/VueJs <br>
                                    - CMS : Wordpress, Prestashop, Drupal <br>
                                    - Languages / Tools : HTML5, PHP, CSS3 and mastery of Python or Asp.Net will be very popular. <br>
                                    - Database: SQL. <br>
                                    - Operation system : Windows - Linux. <br>
                                    - Developement tools : Git. <br>
                                    - Motivated and group-oriented person with good adaptability. <br>
                                    - Creative and open, you will come up with innovative solutions. <br>
                                    - Autonomy ans creativity are in high demand. <br>
                                    - You have a relational sense and you have organizational qualities ans synthetic skills. 
                                </p> <br>
                                    
                                    <div> 
                                        <a href="formulaire.html"> Postulez </a>
                                    </div>

                    </div>
                </div>
            </div>
    </section>




@endsection
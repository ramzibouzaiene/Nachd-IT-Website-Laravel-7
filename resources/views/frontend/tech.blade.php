@extends('frontend.layout')
@section('content')


<header class="page-header parallax-window bg_img dark_overlay" data-src="img/breadcrumbs/single-post.jpg">
        <div class="container breadcrumbs-wrapper">
            <div class="breadcrumbs d-flex flex-column justify-content-center">
                <h1 class="title">Les Technologies</h1>
                <div>
                    <ul class="breadcrumbs-list d-flex">
                        <li>
                            <a href="{{ route('layout') }}">Accueil</a>
                        </li>
                        <li>
                            <a href="#">Présentation</a>
                        </li>
                        <li>
                            <a href="#">Technologies</a>
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
                        <h3 class="post-title">Les Technologies</h3>
                        <p class="text-part">
                        - Angular <br>
                        - Laravel <br>
                        - FireBase <br>
                        - PHP  <br>
                        - IOS <br>
                        - Android <br>
                    
                        </p>
                        
    </section>
@endsection
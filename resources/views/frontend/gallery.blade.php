@extends('frontend.layout')
@section('content')

<header class="page-header parallax-window bg_img dark_overlay"
            data-src="img/breadcrumbs/portfolio-additional.jpg">
        <div class="container breadcrumbs-wrapper">
            <div class="breadcrumbs d-flex flex-column justify-content-center">
                <h1 class="title">Galerie</h1>
                <div>
                    <ul class="breadcrumbs-list d-flex">
                        <li>
                            <a href="{{ route('layout') }}">Accueil</a>
                        </li>
                        <li>
                            <a href="#">Galerie</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- [4] Image Gallery -->
    <section class="grid image-gallery popup-gallery"
             data-aos="fade-up"
             data-aos-delay="150"
             data-aos-anchor-placement="top-bottom"
             data-aos-easing="ease-in-out"
             data-aos-duration="600">
        <a href="img/gallery/pic1.jpg" class="image-item">
            <img src="img/gallery/pic1.jpg" alt="" class="img-fluid">
            <i class="fa fa-search"></i>
        </a>
        <a href="img/gallery/pic2.jpg" class="image-item">
            <img src="img/gallery/pic2.jpg" alt="" class="img-fluid">
            <i class="fa fa-search"></i>
        </a>
        <a href="img/gallery/pic3.jpg" class="image-item">
            <img src="img/gallery/pic3.jpg" alt="" class="img-fluid">
            <i class="fa fa-search"></i>
        </a>
        <a href="img/gallery/pic4.jpg" class="image-item">
            <img src="img/gallery/pic4.jpg" alt="" class="img-fluid">
            <i class="fa fa-search"></i>
        </a>
        <a href="img/gallery/pic5.jpg" class="image-item">
            <img src="img/gallery/pic5.jpg" alt="" class="img-fluid">
            <i class="fa fa-search"></i>
        </a>
        <a href="img/gallery/pic6.jpg" class="image-item">
            <img src="img/gallery/pic6.jpg" alt="" class="img-fluid">
            <i class="fa fa-search"></i>
        </a>
        <a href="img/gallery/pic7.jpg" class="image-item">
            <img src="img/gallery/pic7.jpg" alt="" class="img-fluid">
            <i class="fa fa-search"></i>
        </a>
        <a href="img/gallery/pic8.jpg" class="image-item">
            <img src="img/gallery/pic8.jpg" alt="" class="img-fluid">
            <i class="fa fa-search"></i>
        </a>
        <a href="img/gallery/pic9.jpg" class="image-item">
            <img src="img/gallery/pic9.jpg" alt="" class="img-fluid">
            <i class="fa fa-search"></i>
        </a>
        <a href="img/gallery/pic10.jpg" class="image-item">
            <img src="img/gallery/pic10.jpg" alt="" class="img-fluid">
            <i class="fa fa-search"></i>
        </a>
    </section>

@endsection
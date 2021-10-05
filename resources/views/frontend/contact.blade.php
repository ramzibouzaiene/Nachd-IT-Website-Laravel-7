@extends('frontend.layout')
@section('content')

<header class="page-header parallax-window bg_img dark_overlay" data-src="img/breadcrumbs/contacts.jpg">
        <div class="container breadcrumbs-wrapper">
            <div class="breadcrumbs d-flex flex-column justify-content-center">
                <h1 class="title">Contact</h1>
                <div>
                    <ul class="breadcrumbs-list d-flex">
                        <li>
                            <a href="{{ route('layout') }}">Accueil</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- [4] Contacts Grid -->
    <section class="contacts-grid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 grid-item white-section d-flex justify-content-center align-items-center"
                     data-aos="fade-right"
                     data-aos-delay="100"
                     data-aos-anchor-placement="top-bottom"
                     data-aos-easing="ease-in-out"
                     data-aos-duration="800">
                    <div class="content d-flex flex-column">
                        <h3 class="title">Localisation</h3>
                        <p class="contact">ISSATSo Incubator - Taffala City (Ibn Khaldoun) 4003, Sousse, Tunisia </p>
                    </div>
                </div>
                <div class="col-md-4 grid-item white-section d-flex justify-content-center align-items-center"
                     data-aos="fade-right"
                     data-aos-delay="200"
                     data-aos-anchor-placement="top-bottom"
                     data-aos-easing="ease-in-out"
                     data-aos-duration="800">
                    <div class="content d-flex flex-column">
                        <h3 class="title">Email</h3>
                        <a href="mailto:" class="contact">contact@nachd-it.com</a>
    
                    </div>
                </div>
                <div class="col-md-4 grid-item black-section d-flex justify-content-center align-items-center"
                     data-aos="fade-right"
                     data-aos-delay="300"
                     data-aos-anchor-placement="top-bottom"
                     data-aos-easing="ease-in-out"
                     data-aos-duration="800">
                    <div class="content white d-flex flex-column">
                        <h3 class="title">Téléphone</h3>
                        <a href="tel:" class="contact">+216 27 751 305</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [5] Contact Form Section -->
    <section class="contact-form-section parallax-window color_overlay dark_overlay_gradient"
             data-src="img/contact/contact-form.jpg" data-speed="0.5">
        <div class="container heading">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h2 class="section-title text-center title-divider white-section-title"
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-anchor-placement="top-bottom"
                        data-aos-easing="ease-in-out"
                        data-aos-duration="700">Contactez-Nous <span class="highlight">.</span></h2>
                </div>
            </div>
        </div>
        <div class="container contact-wrapper">
            <div class="row d-flex flex-column"
                 data-aos="fade-up"
                 data-aos-delay="100"
                 data-aos-anchor-placement="top-bottom"
                 data-aos-easing="ease-in-out"
                 data-aos-duration="800">

                <form id="ajax-contact" class="primary-contact-form d-flex flex-column">
                    <div class="input-row">
                        <input class="form-name" type="text" name="name" placeholder="Nom*" required>
                        <input class="form-phone" type="text" name="phone" placeholder="Téléphone">
                    </div>
                    <input class="form-email" type="email" name="email" placeholder="Email*" required>
                    <textarea class="form-message" name="message" placeholder="message..."></textarea>
                    <div class="d-flex justify-content-center">
                        <button class="button-submit" type="submit">Envoyer le message</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <!-- [6] Map Section -->
    <section class="map-section">
        <div class="toggle-map d-flex justify-content-center align-items-center border-top-simple border-bottom-simple">
            <div class="show active flex-column align-items-center">
                <p>Show Map</p>
                <i class="fa fa-angle-down"></i>
            </div>
            <div class="hide flex-column align-items-center">
                <p>Hide Map</p>
                <i class="fa fa-angle-up"></i>
            </div>
        </div>
        <div id="map"></div>
    </section>
    <!-- [7] Follow Us Section -->
    <section class="follow-us-section large-section gray-section">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h2 class="section-title text-center title-divider"
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-anchor-placement="top-bottom"
                        data-aos-easing="ease-in-out"
                        data-aos-duration="700">Suivez-nous <span class="highlight">.</span></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="social-wrapper d-flex"
                     data-aos="flip-down"
                     data-aos-delay="100"
                     data-aos-anchor=".map-section "
                     data-aos-easing="ease-in-out"
                     data-aos-duration="800">
                    <a class="social-box facebook-h" href="https://www.facebook.com/nachd.it/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="social-box instagram-h" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="social-box twitter-h" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="social-box linkedin-h" href="https://www.linkedin.com/company/nachd-it/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="social-box google-plus-h" href="#">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
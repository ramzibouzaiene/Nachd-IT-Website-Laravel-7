@extends('frontend.layout')
@section('content')

<header class="page-header parallax-window bg_img dark_overlay" data-src="img/breadcrumbs/elements.jpg">
        <div class="container breadcrumbs-wrapper">
            <div class="breadcrumbs d-flex flex-column justify-content-center">
                <h1 class="title">Formulaire d'emploi</h1>
                <div>
                    <ul class="breadcrumbs-list d-flex">
                        <li>
                            <a href="{{ route('layout') }}">Accueil</a>
                        </li>
                        <li>
                            <a href="{{ route('jobs') }}">Offre</a>
                        </li>
                        <li>
                            <a href="{{ route('job') }}">Emploi</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- [4] Elements -->
    <section class="element-section white-section">
        <div class="container">
            <h6 class="black-element-title element-title">Formulaire</h6>
            <div class="row">
                <div class="col-lg-6">
                    <form class="contact-form-white d-flex flex-column align-items-center element-form-left">
                        <input type="text" placeholder="Nom et Prénom">
                        <input type="date" placeholder="Date de naissance">
                        <input type="text" placeholder="E-mail">
                        <input type="text" placeholder="Téléphone">
                        <input type="text" placeholder="Formation">
                        <textarea name="message" placeholder="Votre message..."></textarea>
                        
                    </form>
                    <button class="button-submit" type="submit">Envoyer</button>
                    <button class="button-submit" type="reset">Annuler</button>
                </div>
                <div class="col-lg-6">
                    <form class="contact-form-white  element-form-right">
                        <label for="emp">Emploi: </label>
                            <select id="emp" name="emp">
                                <option value="full"></option>
                                <option value="full">Full-stack</option>
                                <option value="front">Front-End</option>
                                <option value="back">Back-end</option>
                            </select>
                        
                        <input type="text" placeholder="Compétences">
                        <button class="btn"><i class="fa fa-download"></i> Votre CV</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
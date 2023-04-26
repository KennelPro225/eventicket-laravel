@extends('layout')
@section('content')
    <div class="section-first">
        <div class="text-info">
            <h1 class="text">
                Pour ceux
                <p class="text1">
                    qui adorent sortir, EvenTicket est un hub pour tous les évènements
                </p>

                <p></p>
            </h1>
        </div>
        <div class="image">
            <img src="{{ asset('pictures/concert.jpg') }}" alt="concert" class="illustration" />
        </div>
    </div>
    <div class="section-two">
        <div class="first-card">
            <h3>Vous êtes un client?</h3>
            <p>
                Le client c’est l’utilisateur qui est en quête d’évènement (concert,
                conférence ....)
            </p>
            <a href="{{route('register')}}" class="link">
            <button class="bouton-user">S'inscrire</button>
            </a>
        </div>
        <div class="first-card">
            <h3>Vous êtes un promoteur?</h3>
            <p>
                Le promoteur est l’utilisateur qui en quête d’une plateforme pour la
                promotion de son évènement
            </p>
            <a href="{{route('login')}}" class="link">
            <button class="bouton-user1">S'inscrire</button>
            </a>
        </div>
    </div>
    @include('category.category')
@endsection

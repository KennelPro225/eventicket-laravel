@extends('layout')
@section('content')
    <div class="form">
        <form method="post" class="inscription">
            @csrf
            <div class="title-form">
                <h1>Inscription</h1>
            </div>
            <div class="form">
                <div class="form-items">
                    {{-- @if ($errors)
                        @foreach ($errors->all() as $error)
                            <div class="flex justify-center items-center">
                                <ul class="w-[100%] bg-red-100 p-2 m-2 border border-red-400 text-red-700 rounded-xl relative"
                                    role="alert">
                                    <li>{{ $error }}</li>
                                </ul>
                            </div>
                        @endforeach
                    @endif --}}
                    <div class="form-items">
                        <div class="firstName-info">
                            @error('user_nom')
                                <div class="w-[100%] text-xs p-2 text-red-700 rounded-xl relative" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="invalid-feedback">
                                <label for="user_nom">Nom</label>
                            </div>
                            <input type="text" class="firstName-input" name="user_nom" value="{{ old('user_nom') }}">
                        </div>
                        <div class="lastName-info">
                            @error('user_prenom')
                                <div class="w-[100%] text-xs p-2 text-red-700 rounded-xl relative" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="invalid-feedback">
                                <label for="user_prenom">Prénom</label>
                            </div>
                            <input type="text" class="lastName-input" name="user_prenom"
                                value="{{ old('user_prenom') }}">
                        </div>
                        <div class="email-info">
                            @error('email')
                                <div class="w-[100%] text-xs p-2 text-red-700 rounded-xl relative" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="invalid-feedback">
                                <label for="email">Email</label>
                            </div>
                            <input type="text" class="email-input" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="password-info">
                            @error('password')
                                <div class="w-[100%] text-xs p-2 text-red-700 rounded-xl relative" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="invalid-feedback">
                                <label for="password">Mot de passe</label>
                            </div>
                            <input type="password" class="password-input" name="password" value="{{ old('password') }}">
                        </div>
                        <div class="cpassword-info">
                            @error('confirmation')
                                <div class="w-[100%] text-xs p-2 text-red-700 rounded-xl relative" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="invalid-feedback">
                                <label for="password">Confirmation Mot de passe</label>
                            </div>
                            <input type="password" class="cpassword-input" name="password" value="{{ old('password') }}">
                        </div>
                        <div class="bouton-submit">
                            <button type="submit" class="" id="submit">S'inscrire</button>
                        </div>
                        <div class="account">
                            <small>Vous avez déjà un compte?
                                <a href="{{ route('login') }}">Connectez-vous</a></small>
                        </div>
                    </div>
                </div>
        </form>
    </div>
@endsection

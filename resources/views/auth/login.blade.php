@extends('layout')
@section('content')
    <div class="form">
        <form method="post" class="connexion">
            @csrf
            <div class="title-form">
                <h1>Connexion</h1>
            </div>
            <div class="form">
                <div class="form-items">
                    @error('message')
                            <div class="w-[100%] text-xs p-2 text-red-700 rounded-xl relative" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    <div class="email-info">
                        <div class="invalid-feedback">
                            <label for="email">Email</label>
                        </div>
                        <input type="email" class="email-input" name="email" value="{{ old('email') }}">
                        <div class="invalid-feedback">
                        </div>
                        @error('email')
                            <div class="w-[100%] text-xs p-2 text-red-700 rounded-xl relative" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="password-info">
                        <div class="invalid-feedback">
                            <label for="password">Password</label>
                        </div>
                        <input type="password" class="password-input" name="password" value="{{ old('password') }}">
                        <div class="invalid-feedback">
                        </div>
                        @error('password')
                            <div class="w-[100%] text-xs p-2 text-red-700 rounded-xl relative" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="remember">
                    </div>
                    <div class="bouton-submit">
                        <button type="submit" class="" id="submit">Se connecter</button>
                    </div>
                    <div>
                        <div class="account">
                            <small>Vous n'avez pas de compte?
                                <a href="{{ route('register') }}">Inscrivez-vous</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

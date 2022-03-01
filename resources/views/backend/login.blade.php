@extends('layouts.admin-auth')


{{-- @include('partial.frontend.header') --}}

@section('content')
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image p-4"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Bienvenue</h1>
                                </div>
                                <form class="user" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="text-center my-3">
                                        <h1 class="h2 text-uppercase text-white mb-0">Se connecter</h1>
                                    </div>

                                    <div class="form-group my-2">
                                        <label for="username" class="text-uppercase text-info"><small>Nom
                                                d'utilisateur</small></label>
                                        <input id="username" type="text"
                                            class="form-control @error('username') is-invalid @enderror" name="username"
                                            value="{{ old('username') }}" placeholder="Nom d'utilisateur"
                                            autocomplete="off" required>
                                        @error('username')
                                            <span class="text-danger"> <strong>{{ $message }}</strong> </span>
                                        @enderror
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="password" class="text-uppercase text-info"><small>Mot de
                                                passe</small></label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            value="{{ old('password') }}" placeholder="Mot de passe"
                                            autocomplete="new-password" required>
                                        @error('password')
                                            <span class="text-danger"> <strong>{{ $message }}</strong> </span>
                                        @enderror
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('home.Se connecter') }}
                                        </button>
                                    </div>

                                </form>
                                <hr>
                                <div class="">
                                    <a class="small" href="{{ route('admin.forgot_password') }}">Mot de passe
                                        oublié ?</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

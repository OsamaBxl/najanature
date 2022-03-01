@extends('layouts.app')



@section('content')
    <section class="py-5 ">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="mb-5 card card-body bg-info" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="text-center my-3">
                        <h1 class="h2 text-uppercase text-white mb-0">{{ __('home.Se connecter') }}</h1>
                    </div>

                    <div class="form-group my-2">
                        <label for="username"
                            class="text-uppercase text-info"><small>{{ __('home.Nom d\'utilisateur') }}</small></label>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                            name="username" value="{{ old('username') }}"
                            placeholder="{{ __('home.Nom d\'utilisateur') }}" autocomplete="off" required>
                        @error('username')
                            <span class="text-danger"> <strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="password"
                            class="text-uppercase text-info"><small>{{ __('home.Mot de passe') }}</small></label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" value="{{ old('password') }}" placeholder="{{ __('home.Mot de passe') }}"
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
                    <div class="mt-3">
                        @if (Route::has('password.request'))
                            <a class="text-white" href="{{ route('password.request') }}">
                                <small>{{ __('home.Mot de passe oublié') }}</small>
                            </a>
                        @endif
                    </div>
                    <div>
                        <a class="text-white" href="{{ route('register') }}">
                            <small>{{ __('home.Pas encore enregistré') }}</small>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

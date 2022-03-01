@extends('layouts.app')



@section('content')
    <section class="py-5 ">
        <div class="">


            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form class="mb-5 card card-body bg-info" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="text-center my-3">
                            <h1 class="h2 text-uppercase text-white mb-0">{{ __('home.S\'inscrire') }}</h1>
                        </div>

                        <div class="form-group my-2">
                            <label for="first_name"
                                class="text-uppercase text-info"><small>{{ __('home.Prénom') }}</small></label>
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
                                name="first_name" value="{{ old('first_name') }}" placeholder="{{ __('home.Prénom') }}"
                                autocomplete="off" required auto-focus>
                            @error('first_name')
                                <span class="text-danger"> <strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>
                        <div class="form-group my-2">
                            <label for="last_name"
                                class="text-uppercase text-info"><small>{{ __('home.Nom de famille') }}</small></label>
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                                name="last_name" value="{{ old('last_name') }}"
                                placeholder="{{ __('home.Nom de famille') }}" autocomplete="off" required auto-focus>
                            @error('last_name')
                                <span class="text-danger"> <strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>
                        <div class="form-group my-2">
                            <label for="username"
                                class="text-uppercase text-info"><small>{{ __('home.Nom d\'utilisateur') }}</small></label>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                                name="username" value="{{ old('username') }}"
                                placeholder="{{ __('home.Nom d\'utilisateur') }}" autocomplete="off" required auto-focus>
                            @error('username')
                                <span class="text-danger"> <strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="form-group my-2">
                            <label for="email"
                                class="text-uppercase text-info"><small>{{ __('home.E-mail') }}</small></label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="{{ __('home.E-mail') }}"
                                autocomplete="off" required auto-focus>
                            @error('email')
                                <span class="text-danger"> <strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="form-group my-2">
                            <label for="mobile"
                                class="text-uppercase text-info"><small>{{ __('home.Mobile') }}</small></label>
                            <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror"
                                name="mobile" value="{{ old('mobile') }}" placeholder="{{ __('home.Mobile') }}"
                                autocomplete="off" required auto-focus>
                            @error('mobile')
                                <span class="text-danger"> <strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="form-group my-2">
                            <label for="password"
                                class="text-uppercase text-info"><small>{{ __('home.Mot de passe') }}</small></label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                value="{{ old('password') }}" placeholder="{{ __('home.Mot de passe') }}"
                                autocomplete="new-password" required>
                            @error('password')
                                <span class="text-danger"> <strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="form-group my-2">
                            <label for="password_confirmation"
                                class="text-uppercase text-info"><small>{{ __('home.Repetez le mot de passe') }}</small></label>
                            <input id="password_confirmation" type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" value="{{ old('password_confirmation') }}"
                                placeholder="{{ __('home.Repetez le mot de passe') }}" autocomplete="new-password"
                                required>
                            @error('password_confirmation')
                                <span class="text-danger"> <strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="row mb-0">
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="mt-3">
                            @if (Route::has('login'))
                                <a class="text-white" href="{{ route('login') }}">
                                    <small>{{ __('home.Vous avez déjà un compte') }}</small>
                                </a>
                            @endif
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

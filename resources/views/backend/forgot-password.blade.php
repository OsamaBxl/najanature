@extends('layouts.admin-auth')



@section('content')
    <!-- Outer Row -->
    <section class="py-5 ">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="mb-5 card card-body " method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mt-3 mb-4 text-center">
                        <h4 class="fw-bold text-primary">{{ __('home.Réinitialisation le mot de passe') }}</h4>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="email" class="col-form-label text-md-end">{{ __('home.E-mail') }}</label>
                        </div>
                        <div class="col-md-9">

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="{{ __('home.E-mail') }}" required
                                autocomplete="off" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <button type="submit" class="btn btn-primary mt-3" name="submit">
                                {{ __('home.Réinitialisation le mot de passe') }}
                            </button>
                        </div>

                    </div>
                    <hr>

                    <div class="">
                        @if (Route::has('login'))
                            <a href="{{ route('admin.login') }}">
                                <small>{{ __('home.Vous avez déjà un compte') }}</small>
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

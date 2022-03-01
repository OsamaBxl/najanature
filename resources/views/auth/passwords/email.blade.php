@extends('layouts.app')
@section('content')
    <section class="py-5 ">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="mb-5 card card-body bg-info" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mt-3 mb-4 text-center">
                        <h4 class="text-white">{{ __('home.Réinitialisation le mot de passe') }}</h4>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('home.E-mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" name="submit">
                                {{ __('home.Réinitialisation le mot de passe') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

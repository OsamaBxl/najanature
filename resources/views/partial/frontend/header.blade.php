<header class="header bg-white">
    <div class="container px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">

            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('frontend.index') }}">{{ __('home.Accueil') }}</a>
                    </li>
                    <li class="nav-item">
                        <!-- Link--><a class="nav-link"
                            href="{{ route('frontend.shop') }}">{{ __('home.Boutique') }}</a>
                    </li>
                    <li class="nav-item">
                        <!-- Link--><a class="nav-link"
                            href="{{ route('frontend.detail') }}">{{ __('home.Détails du produit') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{ __('home.Pages') }}</a>
                        <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown">
                            <a class="dropdown-item border-0 transition-link"
                                href="{{ route('frontend.index') }}">{{ __('home.Accueil') }}</a>
                            <a class="dropdown-item border-0 transition-link"
                                href="{{ route('frontend.shop') }}">{{ __('home.Boutique') }}</a>
                            <a class="dropdown-item border-0 transition-link"
                                href="{{ route('frontend.detail') }}">{{ __('home.Détails du produit') }}</a>
                            <a class="dropdown-item border-0 transition-link"
                                href="{{ route('frontend.cart') }}">{{ __('home.Panier') }}</a>
                            <a class="dropdown-item border-0 transition-link"
                                href="{{ route('frontend.checkout') }}">{{ __('home.Payer') }}</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">

                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.cart') }}">
                            <i class="fas fa-dolly-flatbed me-1 text-gray"></i>{{ __('home.Panier') }}<small
                                class="text-gray fw-normal">(2)</small>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">
                            <i class="far fa-heart me-1"></i><small class="text-gray fw-normal"> (0)</small>
                        </a>
                    </li>

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-user me-1 text-gray fw-normal"></i>{{ __('home.Se connecter') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="fas fa-user-plus text-gray"></i> {{ __('home.S\'inscrire') }}
                            </a>
                        </li>

                    @else

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-alt me-1"></i> Bienvenu, {{ auth()->user()->first_name }}
                            </a>
                            <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown">
                                <a class="dropdown-item border-0 transition-link" href="#">Mon Profile</a>

                                <a href="javascript:void(0);" class="dropdown-item border-0"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Déconnexion</a>
                                <form action="{{ route('logout') }}" method="POST" id="logout-form"
                                    class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    @endguest
                </ul>
            </div>



        </nav>

    </div>
    <div class="text-center mb-4">
        <a href="{{ route('frontend.index') }}">
            <span class="fw-bold text-uppercase text-dark titre">{{ config('app.name') }}</span>
        </a>
    </div>

</header>

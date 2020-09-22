@extends('app')

@section('content')
    <div class="page-title parallax parallax1 style1">
        <div class="overlay overlay1"></div>
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.php" id="title">ACCUEIL</a></li>
                    <li><a href="#" id="title2">LOGIN</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Login</h1>
            </div>
        </div>
    </div>
    <div>
        <div class="container" style="margin-bottom: 20px">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="spacer" data-desktop_height="81" data-mobile_height="100"
                         data-smobile_height="100"></div>
                    <div class="form-submit">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               placeholder="Email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               placeholder="Mot de passe"
                                               class="form-control @error('password') is-invalid @enderror" name="password"
                                               required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="send-button submit hvr-shutter-out-verticall">
                                            {{ __('Se connecter') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" style="font-family: Roboto Condensed, serif;font-size: 18px; padding-left: 10px">
                                                {{ __('Mot de passe oublié ?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

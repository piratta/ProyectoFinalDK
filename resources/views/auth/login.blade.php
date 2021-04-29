<!doctype html>
<html lang="en">

<head>

<style>
#botonEnviar{display: none;}
#iconoGog{
    width: 348.525px;
    height: 78px;
    margin-bottom: 1em;
}
</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>M7 UF4 MiniProjecte API</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
                       function captchaDev(){
                            $("#botonEnviar").css("display" , "block");                    

                        };
                        </script>
</head>

<body class="bg-warning">
<div class="container" style="background-image: url('/imgINSCDM/inscamidemar.jpg');" >
    <div class="row justify-content-center">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="text-center">
            <img id="logo" src="imgINSCDM/logo.png"></img>

                <div class="h4 text-gray-900 mb-4">{{ __('Iniciar sesión') }}</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    
                            </div>
                        </div>
                        
                       
                            <div id="divCap" class="g-recaptcha"  data-callback="captchaDev" data-sitekey="6LdCfroaAAAAAGVOFiA-DlvAa6ZUxlOIvCPpWgSm">
                            </div>
                            <br/>
                            <div id="botonGoogle">
                            <img id="iconoGog" src="\imagenes\google-icon.svg">

                                <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" id="botonEnviar" class="btn btn-primary">
                                    {{ __('Iniciar sesión') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Has olvidado tu contraseña?') }}
                                    </a>
                                @endif

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
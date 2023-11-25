@extends('layouts.app')

@section('content')

<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background: url('https://img.freepik.com/vector-premium/fondo-presentacion-negocios-abstracto-blanco-negro-rojo-simple-moderno_181182-17732.jpg') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
    }

    .overlay {
        background: rgba(255, 255, 255, 0.8);
        height: 100vh;
    }

    .login-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 400px;
        margin: auto;
        margin-top: 50px;
    }

    h1 {
        font-size: 28px;
        text-align: center;
        color: #333;
        margin-bottom: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h1 img {
        width: 100px; /* Ajusta el ancho del logo según tus necesidades */
        margin-bottom: 10px;
    }

    input.form-control {
        font-size: 16px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        padding: 12px;
        border-radius: 4px;
        width: 100%;
        margin-bottom: 20px;
    }

    button.btn-primary {
        font-size: 18px;
        background-color: #007bff;
        border: none;
        padding: 15px;
        border-radius: 4px;
        cursor: pointer;
        color: #fff;
        width: 100%;
        transition: background-color 0.3s;
    }

    button.btn-primary:hover {
        background-color: #0056b3;
    }

    .form-check {
        margin-top: 15px;
    }

    .form-check-input {
        margin-top: 5px;
    }

    .password-link {
        margin-top: 15px;
        display: block;
        text-align: center;
        color: #007bff;
        text-decoration: none;
        transition: color 0.3s;
    }

    .password-link:hover {
        color: #0056b3;
    }
</style>

<div class="overlay">
    <div class="container">
        <div class="login-container">
            <h1>
                <img src="https://e7.pngegg.com/pngimages/869/794/png-clipart-computer-icons-registered-user-login-user-profile-others-blue-logo.png" alt="Logo" />
                Iniciar Sesión
            </h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Recordar</label>
                </div>

                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>

                @if (Route::has('password.request'))
                    <a class="password-link" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                @endif
            </form>
        </div>
    </div>
</div>

@endsection
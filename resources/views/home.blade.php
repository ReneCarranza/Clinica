@extends('layouts.app')

@section('content')

<style>
    .custom-button {
     display: inline-block;
     padding: 100px 50px;
     background-color: #808080;
     color: #fff;
     text-decoration: none;
     border: none;
     border-radius: 5px;
     margin-right: 10px;
     font-family: 'Arial', sans-serif;
     font-size: 30px;
     box-shadow: 0 8px 20px rgba(0, 0, 0, 0.9);
     transform: scale(1);
     transition: transform 0.3s;
    }

    .custom-button:hover {
     background-color: #B695C0;
     transform: scale(1.1);
     box-shadow: 0 0 10px rgba(255, 255, 255, 0.9);
    }

    .custom-button:hover i {
        filter: brightness(9); /* Ajusta el valor según sea necesario */
    }

    .custom-button-citas {
      padding: 100px 70px;  
    }

    h1 {
        color: #00aae4;
        font-family: 'Times New Roman', sans-serif;
        font-size: 80px;
    }

    body {
            background-image: url('{{ asset('clinica.jpg') }}');
            background-size: cover;
            background-position: center;
        }
        .logo {
        display: block;
        margin: 0 auto;
        max-width: 160px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.9);
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <head>
              <link rel="stylesheet" type="text/css" href="styles.css">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            </head>
            
            <header class="text-center">
                <!-- Muestra el logo en lugar del texto "Clínica" -->
                <img src="{{ asset('logo.png') }}" alt="Logo de la Clínica" class="logo">
            </header>
            <br>

                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('citas.index') }}" class="custom-button custom-button-citas" style="text-align: center;">
                            <span style="display: block; text-align: center;">
                                Citas
                            </span>
                            <i class="fas fa-calendar-alt fa-2x" style="display: block; text-align: center;"></i>
                        </a>

                        <a href="{{ route('pacientes.index') }}" class="custom-button" style="text-align: center;">
                           <span style="display: block; text-align: center;">
                               Pacientes
                           </span>
                           <i class="fas fa-user fa-2x" style="display: block; text-align: center;"></i>
                        </a>

                        <a href="{{ route('medicos.index') }}" class="custom-button" style="text-align: center;">
                           <span style="display: block; text-align: center;">
                               Médicos
                           </span>
                           <i class="fas fa-user-md fa-2x" style="display: block; text-align: center;"></i>
                        </a>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection


<!DOCTYPE html>
<html>
<head>
    <title>Cita Médica</title>
    <style>
        /* Estilos CSS para el PDF */
        body {
            font-family: Arial, sans-serif;
            /*background-color: #f5f5f5;*/
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #f8decf;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .header {
            text-align: center;
        }
        .title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .content {
            margin-top: 20px;
        }
        .content p {
            margin: 10px 0;
        }
        .content p strong {
            font-weight: bold;
        }
        .line {
            border-top: 2px solid #000000;
            margin-top: 10px;
        }
        .line-color {
            border-top: 4px solid #804000;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">Comprobante de Cita Médica</h1>
            <div class="line line-color"></div>
        </div>
        <div class="content">
            <h4><strong>Información del paciente.</strong></h4>
            <p><strong>Nombre:    </strong> {{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</p>
            <p><strong>Vinculación: </strong>    Empleado/a</p>
            <div class="line"></div>
            <div class="line"></div>
            <h4><strong>Información del médico.</strong></h4>
            <p><strong>Nombre:      </strong> {{ $cita->medico->nombre }} {{ $cita->medico->apellido }}</p>
            <p><strong>Fecha:       </strong> {{ $cita->fecha }}</p>
            <p><strong>Motivo:  </strong> {{ $cita->comentario }}</p>
            <div class="line"></div>
            <h5><strong>NOTA: </strong>Asistir treinta minutos antes de su cita médica programada.</h5>
        </div>
    </div>
</body>
</html>


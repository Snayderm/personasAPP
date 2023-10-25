<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>

    <!-- Agrega el enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: black;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            cursor: pointer;
            width: 190px;
            height: 254px;
            overflow: visible;
            box-shadow: 0px 0px 10px 1px #000000ee;
            border-radius: 5px;
        }

        .card:hover {
            transform: rotateY(180deg);
        }

        .card-title {
            font-size: x-large;
            color: rgb(0, 0, 0);
            text-align: center; /* Centra el texto horizontalmente */
            position: absolute;
            top: 50%; /* Centra el texto verticalmente */
            left: 50%; /* Centra el texto horizontalmente */
            transform: translate(-50%, -50%); /* Ajusta la posición en el centro */
        }

        .card:hover {
            transform: rotateY(180deg);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <a href="comunas">
                        <div class="card-body">
                            <h1 class="card-title">Comuna</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <a href="departamentos">
                        <div class="card-body">
                            <h1 class="card-title">Departamentos</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <a href="paises">
                        <div class="card-body">
                            <h1 class="card-title">Países</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <a href="municipios">
                        <div class="card-body">
                            <h1 class="card-title">Municipios</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Agrega el enlace a Bootstrap JS y jQuery (opcional) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

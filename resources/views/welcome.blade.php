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
            background-color: #f0f0f0;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            cursor: pointer;
        }

        .card:hover {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <a href="comunas">
                        <img src="comuna-image.jpg" class="card-img-top" alt="Comuna">
                        <div class="card-body">
                            <h5 class="card-title">Comuna</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <a href="departamentos">
                        <img src="departamentos-image.jpg" class="card-img-top" alt="Departamentos">
                        <div class="card-body">
                            <h5 class="card-title">Departamentos</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <a href="paises">
                        <img src="paises-image.jpg" class="card-img-top" alt="Países">
                        <div class="card-body">
                            <h5 class="card-title">Países</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <a href="municipios">
                        <img src="municipios-image.jpg" class="card-img-top" alt="Municipios">
                        <div class="card-body">
                            <h5 class="card-title">Municipios</h5>
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
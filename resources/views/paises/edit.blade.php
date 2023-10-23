<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
        <h1>Edit Country</h1>
        <form method="POST" action="{{ route('paises.update', ['pais' => $pais->pais_codi]) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="pais_nomb">Country Name</label>
                <input type="text" class="form-control" id="pais_nomb" name="pais_nomb" value="{{ $pais->pais_nomb }}">
            </div>
            <div class="form-group">
                <label for="pais_capi">Nationality</label>
                <input type="number" class="form-control" id="pais_capi" name="pais_capi" value="{{ $pais->pais_capi }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
  </body>
</html>
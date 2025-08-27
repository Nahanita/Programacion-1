<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css    ">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/semantic.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css" />

</head>

<body>
    <form action="/ejercicio1/registrar.php" method="post" onsubmit="return mostrarError();" ;>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">

                </div>
                <br>
                <div class="col-md-2">
                    <input type="number" class="form-control" name="edad" id="edad" placeholder="Edad">

                </div>
                <br>
                <div class="col-md-12 mt-3 col-lg-12">
                    <input type="submit" value="Guardar" class="btn btn-info">
                </div>

            </div>


        </div>
    </form>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

    <script>
        function mostrarError() {
            const nombre = document.getElementById('nombre');
            const edad = document.getElementById('edad');

            if (edad.value == "" && edad.value <= 0) {
                alertify.alert('Error❎', 'La edad no puede estar vacío o negativo', function() {});
                return false;
            }

            if (nombre.value == "") {
                alertify.alert('Error❎', 'EL nombre no puede estar vacío', function() {});
                return false;
            }
            return true
        }
    </script>

</body>

</html>
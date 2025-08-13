<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body>
    <form action="/ejercicioget/proceso.php" method="get">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <input type="numer" class="form-control" name="número1" id="número1" placeholder="Ingrese el primer número">

                </div>

                <div class="col-md-6">
                    <input type="numer" class="form-control" name="número2" id="número2" placeholder="Ingrese el segundo número">

                </div>

                <div class="col-md-12 mt-3">
                    <input type="submit" value="Enviar" class="btn btn-info">
                </div>
            </div>
        </div>
        
       
    </form>
</body>


</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ejercicio 1</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css"/>

</head>


<body>

    <form action="/ejercicio1/registrar.php" method="post" onsubmit="return mostrarError();">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre">
                </div>
                
                <div class="col-md-6">
                    <input type="number" class="form-control" name="Edad" id="Edad" placeholder="Edad">
                </div>
                
                <div class="col-md-12 mt-3">
                    <input type="submit" value="Guardar" class="btn btn-info">
                </div>
                
                
            </div>
        </div>
    </form>

        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

        <script> 
        function mostrarError(){
            const nombre = document.getElementById('Nombre');
        const edad = document.getElementById('Edad');

         if(edad.value == "" && edad.value <= 0) {
            alertify.alert('Error✖️', 'Ingrersó un dato vacío o negativo', function() {});
            return false;
         }

         if (nombre.evalue == "") {
            alertify.alert('Error✖️', 'El nombre no puede ser vacío', function() {});
            return false;


         }
         return true;
        }
       

        </script>


</body>


</html>
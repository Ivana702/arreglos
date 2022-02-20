<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos Asociativos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <main>

        <h1>Arreglos Asociativos</h1>

        <h2>Ingresar los datos de 3 empleados</h2>

        <div class="container">
        <div class="row">
            <form class="col s12" action="secuencia.php" method="post">

                <h3>Primer Empleado: </h3>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Nombre1" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Nombre:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Apellido1" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Apellido:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Cedula1" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Cedula:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Sueldo1" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Sueldo:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Departamento1" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Departamento:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Lugar1" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Lugar de Trabajo:</label>
                    </div>
                </div>


                <h3>Segundo Empleado: </h3>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Nombre2" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Nombre:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Apellido2" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Apellido:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Cedula2" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Cedula:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Sueldo2" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Sueldo:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Departamento2" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Departamento:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Lugar2" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Lugar de Trabajo:</label>
                    </div>
                </div>


                <h3>Tercer Empleado: </h3>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Nombre3" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Nombre:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Apellido3" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Apellido:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Cedula3" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Cedula:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Sueldo3" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Sueldo:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Departamento" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Departamento:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" data-length="10" name="Lugar3" required>
                        <label class="light-blue-text text-darken-4" for="input_text">Lugar de Trabajo:</label>
                    </div>
                </div>

                
                <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Registrar</button>
            </form>
        </div>
    </div>


    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/d6ff169d2d.js" crossorigin="anonymous"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });

    </script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems,{
                duration: 500,
                indicators: true,
                fullWidth: true
            });
        });

    </script>

</body>
</html>

    
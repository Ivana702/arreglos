<?php
$nombre1= $_POST['Nombre1'];
$apellido1= $_POST['Apellido1'];
$cedula1= $_POST['Cedula1'];
$sueldo1= $_POST['Sueldo1'];
$departamento1= $_POST['Departamento1'];
$trabajo1= $_POST['lugar1'];


$nombre2= $_POST['Nombre2'];
$apellido2= $_POST['Apellido2'];
$cedula2= $_POST['Cedula2'];
$sueldo2= $_POST['Sueldo2'];
$departamento2= $_POST['Departamento2'];
$trabajo2= $_POST['lugar2'];


$nombre3= $_POST['Nombre3'];
$apellido3= $_POST['Apellido3'];
$cedula3= $_POST['Cedula3'];
$sueldo3= $_POST['Sueldo3'];
$departamento3= $_POST['Departamento3'];
$trabajo3= $_POST['lugar3'];


$empleados[0] = array ('Nombre'=>$_POST['Nombre1'],
                       'apellido'=>$_POST['Apellido1'],
                       'cedula'=>$_POST['Cedula1'],
                       'sueldo'=>$_POST['Sueldo1'],
                       'departamento'=>$_POST['Departamento1'],
                       'lugarTrabajo'=>$_POST['Lugar1'],
);

$empleados[1] = array ('Nombre'=>$_POST['Nombre2'],
                       'apellido'=>$_POST['Apellido2'],
                       'cedula'=>$_POST['Cedula2'],
                       'sueldo'=>$_POST['Sueldo2'],
                       'departamento'=>$_POST['Departamento2'],
                       'lugarTrabajo'=>$_POST['Lugar2'],
);

$empleados[2] = array ('Nombre'=>$_POST['Nombre3'],
                       'apellido'=>$_POST['Apellido3'],
                       'cedula'=>$_POST['Cedula3'],
                       'sueldo'=>$_POST['Sueldo3'],
                       'departamento'=>$_POST['Departamento3'],
                       'lugarTrabajo'=>$_POST['Lugar3'],
);

    echo '<h1>REGISTRO DE EMPLEADOS: </h1>';

        foreach ($empleados as $posicion) {
            echo '<h3>Nombre: ' . $posicion['Nombre'] . '</h3>';
            echo '<h3>Apellido: ' . $posicion['apellido'] . '</h3>';
            echo '<h3>Cédula: ' . $posicion['cedula'] . '</h3>';
            echo '<h3>Sueldo: ' . $posicion['sueldo'] . '</h3>';
            echo '<h3>Departamento: ' . $posicion['departamento'] . '</h3>';
            echo '<h3>Lugar donde trabaja: ' . $posicion['lugarTrabajo'] . '</h3>';
            echo '<hr>';
        }
?>
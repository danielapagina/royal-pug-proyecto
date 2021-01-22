<?php
  $serv="localhost";
  $user="root";
  $key="";
  $base="prueba";

  $enlace = mysqli_connect($serv, $user, $key, $base);

  if(!$enlace){
    echo"error";
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">

  <title>Formulario de Registro</title>

  <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">

  <script src="jquery-3.2.1.min.js"></script>
  <script src="alertifyjs/alertify.js"></script>

</head>
<body>
  <form action="#" class="Formulario" id="Formulario" name="formulario" method="POST">
  <section class="form-register">
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="nombre" id="Nombres" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="apellido" id="Apellidos" placeholder="Ingrese su Apellido">
    <input class="controls" type="text" name="edad" id="Edad" placeholder="Ingrese su Edad">
    <input class="controls" type="text" name="sexo" id="Sexo" placeholder="Ingrese el Nombre de su Mascota">
    <input class="controls" type="text" name="correo" id="Correo" placeholder="Ingrese su Correo">
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" name="envia" value="Enviar">

    
  </section>
</form>
</body>
</html>

<?php

    if(isset($_POST['envia'])){
      
      $id = rand(1000,10000);
      $no=$_POST["nombre"];
      $apell=$_POST["apellido"];
      $ed=$_POST["edad"];
      $sex=$_POST["sexo"];
      $mai=$_POST["correo"];
      $mensaje="Conserva este numero para obtener tu gafete en taquilla:\n". $id;
      
      $insertar = "INSERT INTO datos VALUES('$id',
      '$no', 
      '$apell',
       '$ed', 
       '$sex',
       '$mai') ";
       mail($mai, 'Tu numero de confirmacion es: ', $mensaje);
       $Eje = mysqli_query($enlace, $insertar);
       header('Location:mensaje-de-envio.html');

       if(!$Eje){

        echo"errorxxxxxxxxxxx";
       }
    }

?>
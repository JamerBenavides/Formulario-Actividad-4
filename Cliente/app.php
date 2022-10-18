<?php
include_once('../config/config.php');
include('inscricciones.php');


if ( isset($_POST) && !empty($_POST)){
     $p= new cliente();

    $save = $p->save($_POST); 
    if($save){
      $mensaje= '<div class="alert alert-success" role="alert">cliente creado correctamente </div>' ;
    }else{
      $mensaje= '<div class="alert alert-danger" role="alert"> Error al crear el cliente </div>';
    }
  }
?>

<!DOCTYPE html>
<html>

   <head>
    <meta charset="UTF-8">
    
    <title>Crear cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
   </head>
  <body>
      <?php include('../menu.php') ?>
   <div class="container">
     <?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
      ?>

      <h2 class="text-center mb-5" > Jugadores Nuevos </h2>
      <form method="POST" enctype="multipart/form-data" >
        <div class="row mb-2">
            <div class="col">
                <input type="text" name="nombres" id="nombres" placeholder="Nombres" class="form-control" >

            </div>
            <div class="col">
               <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" class="form-control" >

            </div>
        </div>
        
        <div class="row mb-2">
            <div class="col">
                <input type="email" name="documento" id="documento" placeholder="Documento cliente" class="form-control" >

            </div>
            <div class="col">
               <input type="number" name="fecha" id="fecha" placeholder=" Fecha de Nacimiento" class="form-control" >

            </div>
        </div>


        <div class="row mb-2">
            <div class="col">
                <input type="text" name="imagen" id="imagen" placeholder="Imagén del cliente"  class="form-control" >

            </div>
           
        </div>
        
        
        <button  class="btn btn-success"> Enviar Datos </button>

      </form>
   </div>
  </body>
</html>
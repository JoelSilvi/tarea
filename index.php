<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="app.css">
</head>
<body>
  <h1>Registro Clientes</h1>
    <fieldset>
      <legend>Datos Cliente</legend> 

        <form method="post">	
          <div class="codCliente">
            <label>Código cliente:</label>
            <input type="number" class="cod" name="cod"  >
          </div>
          
          <div class="nomCliente">
            <label>Nombre cliente:</label>
            <input type="text" class="nom" name="name"  >
          </div>

          <div class="rutCliente">
            <label>Rut cliente:</label>
            <input type="text" class="rut" name="rut"  >
          </div>

          <div class="edadCliente">
            <label>Edad del cliente:</label>
            <input type="text" class="edad" name="edad" >
          </div>

          <div class="emailCliente">
            <label>Correo electrónico cliente:</label>
            <input type="email" class="email" name="email" >
          </div>
      <div class="botones">
          <input type="submit" class="insertar" name="insertar" value="INSERTAR">
          <input type="submit" class="delete" name="delete" value="ELIMINAR">
          <input type="submit" class="update" name="update" value="ACTUALIZAR">
        </div>

      </form>
    </fieldset>

<?php 
include("insertar.php");
include("eliminar.php");
include("update.php");
?>
</body>
</html>
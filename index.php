<!DOCTYPE html>
<html>

<?php 
  if($_POST){
    // var_dump($_POST);
    $codigo = $_POST["cod"];
    $nombre = $_POST["name"];
    $claseCod = "";
    $claseNombre = "";

    if($codigo == ""){
      $msgCod = "Falta Ingresar el código del cliente";
      $claseCod = "error";
    }
    if($nombre == ""){
      $msgNombre = "Falta Ingresar el nombre del cliente";
      $claseNombre = "error";
    }
  }

?>

<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
  <style>
    div label{
      display: block;
      border: solid 4px gray;
      width: 25%; 
      border-radius:10px;
      padding:5px;
    }

    input {
      border: solid 3px blue;
      margin-bottom:20px;
      width: 25%; 
      border-radius:10px;
      padding:5px;
    }

    .error{
      border: solid 4px red;
    }

  </style>

</head>
<body>
  <h1>Registro Clientes</h1>
  
    <form name="form1" method="POST" action="index.php">
      <fieldset>
    <legend>Datos Cliente</legend>
    
      <div class="<? echo $claseCod; ?>">
          <label>Código cliente:</label>
          <input type="text" name="cod" >
      </div>
      <div class="<? echo $claseNombre; ?>">
          <label>Nombre cliente:</label>
          <input type="text" name="name" >
      </div>
      <div>
        <label>Rut cliente:</label>
        <input type="text" name="rut">
      </div>
      <div>
        <label>Edad del cliente:</label>
        <input type="text" name="edad">
      </div>
      <div>
        <label>Correo electrónico cliente:</label>
        <input type="email" name="email">
      </div>
      <div>
        
        <input type="submit" value="INSERTAR">

      </div>
      
    </form>
    </fieldset>




</body>
</html>
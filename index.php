  
<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
</head>
<body>
    <form method="post">
    	<h1>Registro Clientes</h1>
      <input type="text" name="cod" placeholder="Código Cliente">
    	<input type="text" name="name" placeholder="Nombre Completo">
      <input type="text" name="rut" placeholder="Escriba Rut">
      <input type="text" name="edad" placeholder="Escriba Edad">
    	<input type="email" name="email" placeholder="Escriba Email">
    	<input type="submit" name="register" value="INSERTAR">
    	<input type="submit" name="delete" value="ELIMINAR">
    	<input type="submit" name="update" value="ACTUALIZAR">
    	
    </form>
        <?php 
        include("insertar.php");
        include("eliminar.php");
        ?>
</body>
</html>
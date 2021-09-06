<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
</head>
<body>
    <form method="post">
    	<h1>Registro Clientes</h1>
      <input type="text" name="nomUsuario" placeholder="Nombre Usuario" required>
    	<input type="text" name="pass" placeholder="Contraseña Usuario" required >
      <input type="submit" name="crear" value="CREAR">

    </form>
        <?php 
        include("crear.php");
        ?>
</body>
</html>
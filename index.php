  
<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
</head>
<body>
    <form method="post">
    	<h1>Registro Clientes</h1>
      <input type="text" name="cod" placeholder="Código Cliente" required>
    	<input type="text" name="name" placeholder="Nombre Completo" required >
      <input type="text" name="rut" placeholder="Escriba Rut" required>
      <input type="text" name="edad" placeholder="Escriba Edad" required>
    	<input type="email" name="email" placeholder="Escriba Email" required>
    	<input type="submit" name="register">
    </form>
        <?php 
        include("insertar.php");
        ?>
</body>
</html>
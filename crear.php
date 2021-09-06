<?php 
include("conexion.php");

if (isset($_POST['crear'])) {
    if (strlen($_POST['nomUsuario']) >= 1 && strlen($_POST['pass']) >= 1) {

	    $nomUsuario = trim($_POST['nomUsuario']);
	    $pass = trim($_POST['pass']);

      $encriptacionSHA1 = sha1($pass);
	    
	    $consulta = "INSERT INTO usuarios(nombre,pass) VALUES ('$nomUsuario','$encriptacionSHA1')";
	    $resultado = mysqli_query($conex,$consulta);

	    if ($consulta) {
	    	?> 
	    	<h3 class="bien">Usuario creado exitosamente</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="mal">Ha ocurrido un error</h3>
           <?php
	    }
    }  
}
?>

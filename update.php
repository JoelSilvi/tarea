<?php 

include("conexion.php");


if (isset($_POST['update'])) {
  
  $cod = trim($_POST['cod']);
  $name = trim($_POST['name']);
  $rut = trim($_POST['rut']);
  $edad = trim($_POST['edad']);
  $email = trim($_POST['email']);

      $consulta="UPDATE registro SET nombreCliente = '$name', rutCliente = '$rut', edadCliente = '$edad', emailCliente = '$email'  WHERE codCliente = '$cod'";
	    $resultado = mysqli_query($conex,$consulta);


	    if ($consulta) {
	    	?> 
	    	<h3 class="bien">Registro actualizado correctamente</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="mal">Ha ocurrido un error</h3>
           <?php
	    }
    
}


?>
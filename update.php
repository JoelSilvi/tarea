<?php 

include("conexion.php");

if (isset($_POST['update'])) {
    if (strlen($_POST['cod']) >= 1 && strlen($_POST['email']) >= 1 ) {

	    $cod = trim($_POST['cod']);
	    $email = trim($_POST['email']);
	   
	    
	    $consulta = "UPDATE registro SET emailCliente = 'jaguilar@ggl.cl' WHERE codCliente = '$cod'";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="bien">Registro actualizado correctamente</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="mal">Ha ocurrido un error</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="mal">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
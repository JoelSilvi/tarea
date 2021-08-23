<?php 

include("conexion.php");

if (isset($_POST['delete'])) {
    if (strlen($_POST['cod']) >= 1 ) {

	    $cod = trim($_POST['cod']);
	   
	    
	    $consulta = "DELETE FROM registro WHERE codCliente = '$cod'";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="bien">Registro elimado correctamente</h3>
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
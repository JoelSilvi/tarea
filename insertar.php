<?php 

include("conexion.php");

if(empty($_POST['cod'])){
  echo '<script language="javascript">alert("debe ingresar el Código");</script>';
}elseif (empty($_POST['name'])){
  echo '<script language="javascript">alert("debe ingresar el Nombre");</script>';
}elseif (empty($_POST['rut'])){
  echo '<script language="javascript">alert("debe ingresar el Rut");</script>';
}elseif (empty($_POST['edad'])) {
  echo '<script language="javascript">alert("debe ingresar la Edad");</script>';
}elseif (empty($_POST['email'])) {
  echo '<script language="javascript">alert("debe ingresar el Correo electrónico");</script>';
}

if (isset($_POST['insertar'])) {
    if (strlen($_POST['cod']) >= 1 && strlen($_POST['name']) >= 1 && strlen($_POST['rut']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['email']) >= 1) {


      $cod = trim($_POST['cod']);
      $name = trim($_POST['name']);
      $rut = trim($_POST['rut']);
      $edad = trim($_POST['edad']);
      $email = trim($_POST['email']);

	    $consulta = "INSERT INTO registro(codCliente,nombreCliente, rutCliente, edadCliente, emailCliente ) VALUES ('$cod','$name','$rut','$edad','$email')";
	    $resultado = mysqli_query($conex,$consulta);

	    if ($consulta) {
	    	?> 
	    	<h3 class="bien">Te has inscripto correctamente</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="mal">Ha ocurrido un error</h3>
           <?php
	    }
    }  
}
?>
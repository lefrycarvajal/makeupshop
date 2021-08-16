<?php
include("conexion_db.php");

if(isset($_POST['enviar'])){

	if(strlen($_POST['nombre']) >= 1 &&
   
	   strlen($_POST['apellido']) >= 1 && 
	  
	   strlen($_POST['correo']) >= 1 &&
		 
	   strlen($_POST['mensaje']) >= 1) {
	
		
		$nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$correo = trim($_POST['correo']);
		$mensaje = trim($_POST['mensaje']);
		$fechareg = date("d/m/y");
		$consulta = "INSERT INTO datos_contacto(nombre, apellido, correo, mensaje, fecha) VALUES ('$nombre','$apellido','$correo','$mensaje','$fechareg')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<h3 class="ok">MENSAJE ENVIADO CORRECTAMENTE</h3>
<?php
		} else {
			?>
	<h3 class="bad">HA OCURRIDO UN ERROR</h3>
			
			<?php
			}
		} else {
		
              ?>
<h3 class="bad">PORFAVOR COMPLETE LOS CAMPOS</h3>
			<?php
			
		}
		
}
	



?>



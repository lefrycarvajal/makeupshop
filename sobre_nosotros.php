   <?php
include_once("header.php")
?> 

 <body>
	    
	<nav class="menu">

      <div class="logo">
			<a href="#"><img class="logo" src="img/logo.png" width="100px" alt="logo"></a>
			</div>
		<div></div>
		 <a class="icono" href="#"> <i class="fa fa-bars"></i> </a>
		
		
     <div class="menu_links">		
	<ul>
	<li><a href="index.php">INICIO</a></li>	   
	<li><a href="coleccion.php">COLECCION</a></li>	   
	<li><a href="bersh_series.php">BERSH SERIE</a></li>	
	<li><a href="ofertas.php">OFERTAS</a></li>	   
	<li><a  class="activado" href="#">SOBRE NOSOTROS</a></li>	   
	   </ul>
	
	</div>
	</nav>
	   
	<div class="banner">
		 <div class="contenedor2">
			 <div class="banner_contenido3">
				 
	   <h5>SOBRE NOSOTROS</h5>
	   </div>
	   </div>
	   </div>
	   
	   <h1 class="historia">HISTORIA</h1>
	   
    
	   <div class="texto0">
	   <div class="seccion011">
		   <table align="center" class="tabla">
			<tbody>
				<tr>
		   <td>
		  
		   <p>makeup es una cadena de tiendas de ropa perteneciente al grupo español Inditex, fundado por el empresario Amancio Ortega. En abril de 1998, makeup abrió su primer comercio. Hasta finales del año 2018 su sede se encontraba en el municipio barcelonés de Tordera, se planteó su traslado a Barcelona, pero finalmente fue trasladada a Arteijo. Descripción</p></td></tr>
			<tr>	
				
				<td>
		   <p >Creada en 19984 como una marca del grupo Inditex, fundado por el empresario español Amancio Ortega, cuenta en la actualidad con más de mil tiendas en diversos países. La marca, que se creó dirigida hacia la mujer joven, cuenta también con secciones de moda masculina. En marzo de 2017, la marca tenía 1096 tiendas distribuidas en 70 países.

La marca cuenta con tres líneas principales: makeup, BSK y Hombre que ofrecen prendas casual, básicos, deportivo, vaqueros, accesorios y calzado.</p></td></tr>
				
				
			
			
					
					
				
				</tbody>
			   </table>
   </div>
   </div>
<div class="tamano">
	<h1 align="center">CONTACTO</h1>
	   <div class="container_form">
  <form   method="POST" name="contacto" onsubmit="return validar_contacto()">
    <div class="row">
      <div class="col-25">
        <label for="fname">Primer Nombre</label>
      </div>
      <div class="col-75">
        <input type="text" id="nombre" name="nombre" placeholder="Primer Nombre" >
      </div>
    </div> 
	  
    <div class="row">
      <div class="col-25">
        <label for="lname">Apellido</label>
      </div>
      <div class="col-75">
        <input type="text" id="apellido" name="apellido" placeholder="Apellido" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Correo</label>
      </div>
      <div class="col-75">
        <input type="email" id="correo" name="correo" placeholder="correo" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Mensaje</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="mensaje" placeholder="mensaje" style="height:200px" ></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="enviar" value="Enviar">
    </div>
  </form>
</div>
</div>
	   


 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
   <script type="text/javascript" src="js/lightslider.js"></script> 
   <script src="js/script_carta.js"></script>
   <script src="js/script.js"></script>



  <script>
	   
function validar_contacto(){

    if ( document.contacto.nombre.value == ""){
        alert('Ingrese un nombre  valido.');
        return false
        }

        if ( document.contacto.apellido.value == ""){
            alert('Ingrese un apellido valido.');
            return false
            }
        
        if ( document.contacto.correo.value == ""){
            alert('Ingrese un correo electronico valido.');
            return false
            }
    
              
	
	if(document.contacto.subject.value.length <10){
alert('Comenta mas de 10 caracteres')
return false;
}
                    
                    
        
    

}
	   
	   
	   </script>
	   

	 
	    <?php
include_once("registrocontacto.php");
?> 
	 
	 
<?php
include_once("footer.php")
?>

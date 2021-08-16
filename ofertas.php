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
	<li><a class="activado" href="#">OFERTAS</a></li>	   
	<li><a href="sobre_nosotros.php">SOBRE NOSOTROS</a></li>	   
	   </ul>
	
	</div>
	</nav>
	   
	   <img class="banner" src="img/banner2.jpg" alt="banner">
	   
	   
	     <!--carta de producto-->
	   
	  <div class="container">
		     <!--slide-->
		   <ul id="autoWidth" class="cs-hidden">
			   <!--slide-->
			   <!---------------------------slide01--------------------------------------->
			    <li class="item-a"> 
					
			
					<div class="slide_carta">
		 <p class="titulo">Pudra Iluminatoare Milani Strobelight Instant Glow</p>
		 <img src="img/55.jpg" class="foto_carta" alt="carta1">
		   <div class="detalles">
			      <img src="img/19-01.png" class="logo_carta" width="100px" style="height: auto;" alt="logo">
			   <div class="texto_precio">
			   <span class="tachado">$495</span ><span class="descuento_color">$399</span>
				   </div>
		   </div>
		   </div>
			</li>
			   <!---------------------------slide02--------------------------------------->
			     <li class="item-a"> 
					
					<div class="slide_carta">
		 <p class="titulo">Baza machiaj NYX Professional Makeup Glitter Primer</p>
		<img src="img/56.jpg" class="foto_carta" alt="carta1">
		   <div class="detalles">
			   <img src="img/30-01.png" class="logo_carta" width="100px" style="height: auto;" alt="logo">
			  <div class="texto_precio">
			   <span class="tachado">$995</span><span class="descuento_color">$699</span>
				   </div>
		   </div>
		   </div>
			</li>
			   <!---------------------------slide03--------------------------------------->
			     <li class="item-a"> 
					
					<div class="slide_carta">
		 <p class="titulo">Corector Lichid Sleek MakeUP Lifeproof Concealer</p>
<img src="img/57.jpg" class="foto_carta" alt="carta1">
		   <div class="detalles">
			      <img src="img/33-01.png" class="logo_carta" width="100px" style="height: auto;" alt="logo">
			  <div class="texto_precio">
			   <span class="tachado">$595</span><span class="descuento_color">$399</span>
				   
		   </div>
		   </div>
		   </div>
			</li>
			   	   <!---------------------------slide04--------------------------------------->
			     <li class="item-a"> 
					
					<div class="slide_carta">
		 <p class="titulo">Pudra pulbere Boys`n Berries MicroTouch Perfecting Loose Powder</p>
		 <img src="img/58.jpg" class="foto_carta" alt="carta1">
		   <div class="detalles">
			   			   <img src="img/42-01.png" class="logo_carta" width="100px" style="height: auto;" alt="logo">
			   <div class="texto_precio">
			   <span class="tachado">$1195</span><span class="descuento_color">$699</span>
				   
		   </div>
		   </div>
		   </div>
			</li>
			   	   <!---------------------------slide05--------------------------------------->
			     <li class="item-a"> 
					
					<div class="slide_carta">
		 <p class="titulo">Lioele Super Gold Snail BB, SPF50+ PA+++ #23 Warm Beige</p>
		<img src="img/59.jpg" class="foto_carta" alt="carta1">
		   <div class="detalles">
			      <img src="img/25-01.png" class="logo_carta" width="100px" style="height: auto;" alt="logo">
			   <div class="texto_precio">
			   <span class="tachado">$795</span><span class="descuento_color">$599</span>
				   
		   </div>
		   </div>
		   </div>
			</li>
			   	   <!---------------------------slide06--------------------------------------->
			     <li class="item-a"> 
					
					<div class="slide_carta">
		 <p class="titulo">Paleta Iluminatoare Sleek MakeUP Solstice Highlighting Palette</p>
		 <img src="img/60.jpg" class="foto_carta" alt="carta1">
		   <div class="detalles">
			      <img src="img/42-01.png" class="logo_carta" width="100px" style="height: auto;" alt="logo">
			   <div class="texto_precio">
			   <span class="tachado">$1995</span><span class="descuento_color">$699</span>
				   
		   </div>
		   </div>
		   </div>
			</li>
			   
			</ul>
	   </div> 
	  
	   <br>
	 <div class="tamano">
	 <h1 align="center">RECIBIR NOTIFICACIONES</h1>
	 <h3 align="center">Subscribete para recibir nuestras ultimas ofertas</h3>
	   <div class="container_form">
  <form  method="post" name="contacto" onsubmit="return validar_contacto()">
    <div class="row">
      <div class="col-25">
        <label for="fname">Primer Nombre</label>
      </div>
      <div class="col-75">
        <input type="text" id="nombre" name="nombre" placeholder="Primer Nombre">
      </div>
    </div> 
	  
   
    <div class="row">
      <div class="col-25">
        <label for="fname">Correo</label>
      </div>
      <div class="col-75">
        <input type="email" id="correo" name="correo" placeholder="correo">
      </div>
    </div>
   <br>
    <div class="row">
      <input type="submit" name="enviar" value="Enviar">
    </div>
  </form>
</div>
</div>
	 
	
	 
	 

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

       
        
        if ( document.contacto.correo.value == ""){
            alert('Ingrese un correo electronico valido.');
            return false
            }

}
	   
	   
	   </script>
	   
  <?php
include_once("registrosubs.php");
?> 
	 
<?php
include_once("footer.php")
?>

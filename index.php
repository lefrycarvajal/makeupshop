<?php
include_once("header.php")
?> 

<!--menu-->
      <nav class="menu">
         <div class="logo">
            <a href="#"><img class="logo" src="img/logo.png" style="width:100px " alt="logo"></a>
         </div>
         <div></div>
         <a class="icono" href="#"> <i class="fa fa-bars"></i> </a>
         <div class="menu_links">
            <ul>
               <li><a class="activado" href="#">INICIO</a></li>
               <li><a href="coleccion.php">CATALOGO</a></li>
               <li><a href="bersh_series.php">GALERIA</a></li>
               <li><a href="ofertas.php">OFERTAS</a></li>
               <li><a href="sobre_nosotros.php">SOBRE NOSOTROS</a></li>
            </ul>
         </div>
      </nav>
      <!--menu_fin-->
      <!--imagen_slide-->
      <div class="slide">
         <div class="slide-contenido">
            <img src="img/slide_01.jpg" alt="slide1">
            <div class="slide-contenido-texto">
               <h5>LUCE MAS HERMOSA CON NUESTRO MAQUILLAJE</h5>
               <p>Compra los productos de nuestra linea y se la gran estrella que siempre quisiste ser.</p>
            </div>
         </div>
         <div class="slide-contenido">
            <img src="img/slide_02.jpg" alt="slide1">
            <div class="slide-contenido-texto">
               <h5>RESALTA TU BELLEZA CON NUESTROS PRODUCTOS</h5>
               <p>Ven a nuestras tiendas o en linea y adquieres estos increbiles productos y cautiva con tu belleza</p>
            </div>
         </div>
        
         
      </div>
      <!--imagen_slide_fin-->
      <h1 class="texto_titulo_carta">ULTIMOS PRODUCTOS</h1>
      <!--carta de producto-->
      <div class="container">
         <!--slide-->
         <ul id="autoWidth" class="cs-hidden">
            <!--slide-->
            <!---------------------------slide01--------------------------------------->
            <li class="item-a">
               <div class="slide_carta">
                  <p class="titulo">Baza machiaj ochi OFRA Eye Gel Primer</p>
                  <img src="img/card_01.jpg" class="foto_carta" alt="carta1">
                  <div class="detalles">
                     <img src="img/new-01.png" class="logo_carta" width="100px" style="height: auto;" alt="logo">
                     <p>$2,295.00</p>
                  </div>
               </div>
            </li>
            <!---------------------------slide02--------------------------------------->
            <li class="item-a">
               <div class="slide_carta">
                  <p class="titulo">Mixer Machiaj Sleek MakeUP Pigment Transformer</p>
                  <img src="img/card_02.jpg" class="foto_carta" alt="carta1">
                  <div class="detalles">
                     <img src="img/new-01.png" class="logo_carta" width="100px" style="height: auto;" alt="logo">
                     <p>$1,295.00</p>
                  </div>
               </div>
            </li>
            <!---------------------------slide03--------------------------------------->
            <li class="item-a">
               <div class="slide_carta">
                  <p class="titulo">Baza machiaj Boys`n Berries Primarry Me</p>
                  <img src="img/card_03.jpg" class="foto_carta" alt="carta1">
                  <div class="detalles">
                     <img src="img/new-01.png" class="logo_carta" width="100px" style="height: auto;" alt="logo">
                     <p>$2,695.00</p>
                  </div>
               </div>
            </li>
            <!---------------------------slide04--------------------------------------->
            <li class="item-a">
               <div class="slide_carta">
                  <p class="titulo">Baza machiaj BPerfect Perfect Prime</p>
                  <img src="img/card_04.jpg" class="foto_carta" alt="carta1">
                  <div class="detalles">
                     <img src="img/new-01.png" class="logo_carta" width="100px" style="height: auto;" alt="logo">
                     <p>$1,995.00</p>
                  </div>
               </div>
            </li>
            <!---------------------------slide05--------------------------------------->
            <li class="item-a">
               <div class="slide_carta">
                  <p class="titulo">Mixer machiaj Boys`n Berries ibooster Pro Makeup Mixer</p>
                  <img src="img/card_05.jpg" class="foto_carta" alt="carta1">
                  <div class="detalles">
                     <img src="img/new-01.png" class="logo_carta" width="100px" style="height: auto;" alt="logo">
                     <p>$2,695.00</p>
                  </div>
               </div>
            </li>
            <!---------------------------slide06--------------------------------------->
            <li class="item-a">
               <div class="slide_carta">
                  <p class="titulo">Baza de machiaj cremoasa theBalm Priming is Everything</p>
                  <img src="img/card_06.jpg" class="foto_carta" alt="carta1">
                  <div class="detalles">
                     <img src="img/new-01.png" class="logo_carta" width="100px" style="height: auto;" alt="logo">
                     <p>$1,995.00</p>
                  </div>
               </div>
            </li>
         </ul>
      </div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
   <script type="text/javascript" src="js/lightslider.js"></script> 
   <script src="js/script_carta.js"></script>
   <script src="js/script.js"></script>

<?php
include_once("footer.php")
?>

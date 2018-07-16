<?php
include "headerandfooder/header.php";
include "headerandfooder/fooder.php";
get_header();

 ?>
     <form class="nuevopost" action="index.php" method="post">

       <input class=" titulo" type="text"  placeholder="Titulo">
      <textarea name="comentarios" rows="20" cols="70" placeholder="Contenido del Articulo"style="margin-top:2%; width: 100%;"></textarea>
       <input  class="boton"type="submit"  value="Publicar">

     </form>
     <?php
     get_fooder();
      ?>

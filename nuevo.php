<?php
include "headerandfooder/header.php";
include "headerandfooder/fooder.php";
include_once "clases/FlashMessage.php";
include_once "clases/helpers.php";
get_header();

 ?>
     <form class="nuevopost" action="index.php" method="post">

       <input class=" titulo" type="text"  placeholder="Titulo">
      <textarea name="comentarios" rows="20" cols="70" placeholder="Contenido del Articulo"style="margin-top:2%; width: 100%;"></textarea>
       <input  class="boton"type="submit"  value="Publicar">

     </form>

     <?php if ($flashMessage->hasErrors() || $flashMessage->hasMessage()): ?>
    <div class="alert danger">
      <?php if ($flashMessage->hasMessage()): ?>
      <p><?= $flashMessage->getMessage() ?></p>
      <?php endif; ?>

      <?php if ($flashMessage->hasErrors()): ?>
        <ul>
          <?php foreach ($flashMessage->all() as $error): ?>
            <li><?= $error[0] ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
    <?php endif; ?>

    <?php if ($flashMessage->hasSuccessMessage()): ?>
    <div class="alert success">
      <?= $flashMessage->getSuccessMessage() ?>
    </div>
    <?php endif; ?>
    </div>
     <?php
    get_footer();
      ?>

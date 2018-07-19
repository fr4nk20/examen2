<?php
$connection= new mysqli('localhost','root','', 'blog');
include "headerandfooder/header.php";
include "headerandfooder/fooder.php";

get_header();

?>
<div class="parrafo">
  <P>
    Mostrando Publicaciones Recientes
  </P>
</div>
<?php
 foreach($connection->query('SELECT * from posts order by id desc') as $row){
    ?>
    <div class="back">
      <div class="title_date">
        <p class="titulo_Index">
          <br />
          <?php echo $row['title'] ?>
          <p class="date">
              <?php echo $row['date'] ?>
          </p>
        </p>
      </div>
      <div class="contenido">
        <div class="contenidoh">
          <p>
            <?php echo $row['content'] ?>
          </p>
        </div>
      </div>
    </div>

 <?php } ?>
<?php
 get_footer();
 ?>
 </div>

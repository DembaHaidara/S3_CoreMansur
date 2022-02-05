<?php require "view_begin_connecte.php" ?>
<section class="grid">




  <article>

    <?php if (!empty($commandes)) {
      foreach ($commandes as $key => $value) {

        echo $value["id_Article"];
      }
    }
    ?>

  </article>



</section>




<?php require "view_end.php" ?>
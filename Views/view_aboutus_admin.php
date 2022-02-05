<?php require "view_begin_admin.php" ?>


<section>
  <article>
   
      <div class="article1">

        <style type="text/css">
          .article1 {
            display: inline-flex;
          }

          .article1 div p {
            text-align: center;
            border-bottom: 2px solid grey;
          }
        </style>

        <div><img style='width: 100px; height: 150px;' src="<?= $aboutus['file_img']; ?>" alt="b">
          <p><?= $aboutus["id"]; ?> </br>
            <strong>Description :</strong><br> 
            <?= $aboutus["description"];?>
          </p>

        </div>
  </article>
  <br>

  <article>
    <center>
      <h3>Modifier Page About US</h3>
      <form action="?controller=aboutus_admin&action=ajouteraboutus" enctype="multipart/form-data" method="POST">

         <div class="ajout">
          <label for="description" style="margin-right: 10%;">description </label>
          <div><textarea name="description"></textarea> </div>
        </div>



        <div class="ajout">
          <label for="img" style="margin-right: 10%;">Lien IMG </label>
          <div><input type="file" name="img" /></div>
          <input type="hidden" name="MAX_FILE_SIZE" value="100000">

        </div>
        <input type="submit" value="Mettre à jour">
      </form>

    </center>

  </article>
  <br>
  <article>
   
  </article>
  <article>

  </article>
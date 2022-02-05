<?php require "view_begin_admin.php" ?>


<section>
  <article>
    <?php
    foreach ($shop as $key => $value) {
    ?>
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

        <div><img style='width: 100px; height: 150px;' src="<?= $value['file_img']; ?>" alt="b">
          <p><?= $value["id_Article"]; ?> </br>
            <?= $value["collection"]; ?></p>
        </div>

      </div>
    <?php } ?>
  </article>
  <br>
  <article>
    <center>
      <h3>Ajouter un Article</h3>
      <form action="?controller=admin&action=ajoutershop" enctype="multipart/form-data" method="POST">

        <div class="ajout">
          <label for="Nom_Article" style="margin-right: 10%;">Nom </label>
          <div><input type="text" name="Nom_Article" /></div>
        </div>

        <div class="ajout">
          <label for="prix" style="margin-right: 10%;">Prix </label>
          <div><input type="number" name="prix" /></div>
        </div>

        <div class="ajout">
          <label for="description" style="margin-right: 10%;">description </label>
          <div><textarea name="description"></textarea> </div>
        </div>


        <div class="ajout">
          <label for="collection" style="margin-right: 10%;">collection </label>
          <div><textarea name="collection"></textarea> </div>
        </div>


        <div class="ajout">
          <label for="file_img" style="margin-right: 10%;">Lien IMG </label>
          <div><input type="file" name="file_img" /></div>
          <input type="hidden" name="MAX_FILE_SIZE" value="100000">

        </div>
        <input type="submit" value="Mettre à jour">
      </form>
    </center>
  </article>
  <br>
  <article>
    <center>
      <h3>Supprimer un article</h3>
      <form action="?controller=admin&action=retirer" method="POST">

        <div class="ajout">
          <label for="id_Article" style="margin-right: 10%;">id de l'article </label>
          <div><input type="number" name="id_Article" /></div>
        </div>

        <input type="submit" value="Supprimer">
      </form>
    </center>
  </article>
  <article>

  </article>
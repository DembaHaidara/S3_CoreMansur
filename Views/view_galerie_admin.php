<?php require "view_begin_admin.php" ?>


<section>
  <article>
    <?php

    for ($i=1; $i < 15 ; $i++) { 
      
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

        <div><img style='width: 100px; height: 150px;' src="./Content/img/galerie/<?= $i?>.jpg" alt="b">
          <p><?= $i; ?> </br></p>

        </div>
      <?php } ?>
  </article>
  <br>

  <article>
    <center>
      <h3>Ajouter un Article</h3>
      <form action="?controller=galerie_admin&action=ajouterGalerie" enctype="multipart/form-data" method="POST">

        <div class="ajout">
          <label for="nom" style="margin-right: 10%;">Nom </label>
          <div><input type="text" name="nom" /></div>
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
    <center>
      <h3>Supprimer un article</h3>
      <form action="?controller=galerie_admin&action=retirer" method="POST">

        <div class="ajout">
          <label for="id" style="margin-right: 10%;">id de l'article </label>
          <div><input type="number" name="id" /></div>
        </div>

        <input type="submit" value="Supprimer">
      </form>
    </center>
  </article>
  <article>

  </article>
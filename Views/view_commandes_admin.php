<?php require "view_begin_admin.php" ?>
<section>
  <table>
    <th>Numero Commande</th>
    <th>Nom Article</th>
    <th>Taille</th>
    <th>ID Article</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Email</th>
    <th>Adress</th>
    <th>Date</th>
    <th>ID Payement Paypal</th>
    <th>ID Marchant Paypal</th>
    <th>Statut</th>

    <?php

    foreach ($commandes as $key => $value) {
    ?>
      <tr>
        <td><a href="?controller=commandes&action=detail&id=<?= $value['num_commande'] ?>"><?= $value['num_commande'] ?></a></td>
        <td>
          <?php foreach (explode(",", $value["nom_article"]) as $v) {
            echo "<p>" . $v . "</p> </br>";
          } ?>
        </td>
        <td>
          <?php foreach (explode(",", $value["taille_article"]) as $v) {
            echo "<p>" . $v . "</p> </br>";
          } ?>
        </td>
        <td>
          <?php foreach (explode(",", $value["id_article"]) as $v) {
            echo "<p>" . $v . "</p> </br>";
          } ?>
        </td>
        <td><?= $value["nom"] ?></td>
        <td><?= $value["prenom"] ?></td>
        <td><?= $value["Email"] ?></td>
        <td><?= $value["address"] ?></td>
        <td><?= $value["date"] ?></td>
        <td><?= $value["id_payement"] ?></td>
        <td><?= $value["id_marchant"] ?></td>
        <td><?= $value["statut"] ?></td>
      </tr>
    <?php
    }
    ?>


    <style type="text/css">
      table,
      td,
      th {
        border: 1px solid;
        border-collapse: collapse;
        font-size: 12px;
      }
    </style>
  </table>
</section>
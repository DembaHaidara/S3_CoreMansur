<?php require "view_begin_admin.php" ?>

<table>

  <?php foreach ($demandes as $key => $value) {

    echo "<tr>";

    echo "<td>" . $value["nom"] . "</td>
        <td>" . $value["mail"] . "</td>
        <td>" . $value["choix"] . "</td>
        <td>" . $value["numcommande"] . "</td>
        <td>" . $value["date"] . "</td>
        <td>" . $value["message"] . "</td>"; {
      echo '<td><a href="?controller=aide_admin&action=supprimer&id=' . $value["id"] . '">Supprimer</a></td>';
    }

    echo "</tr>";
  } ?>


  <style type="text/css">
    table,
    td,
    th {
      border: 1px solid;
      border-collapse: collapse;
      font-size: 12px;
      font-size: 20px;
      padding: 10px;
    }
  </style>

</table>
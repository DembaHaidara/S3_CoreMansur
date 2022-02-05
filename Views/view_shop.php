<?php require "view_begin.php" ?>



<?php


$x = 0;


foreach ($shop as $key => $value) {


    if ($x % 3 == 0) {
        echo "<div class='article'>";
        echo "<div class='section'>";
    }
?>
    <div class="article1">

        <div class="positonIMG">
            <a href="?controller=info_article&id=<?= $value['id_Article']; ?>">

                <img src="<?= $value['file_img']; ?>" alt="b"></a>
        </div>

        <p><?= $value["Nom_Article"]; ?><br>
            <?= $value["prix"]; ?>€</p>


    </div>




<?php

    if ($x % 3 == 2) {

        echo "</div>";
        echo "</div>";
    }
    $x = $x + 1;
} ?>




</div>



<?php require "view_end.php" ?>
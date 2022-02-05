<?php require "view_begin.php" ?>



<?php


$x = 0;


foreach ($collection as $key => $value) {


    if ($x % 3 == 0) {
        echo "<div class='article'>";
        echo "<div class='section'>";
    }
?>
    <div class="article1">

        <div class="positonIMG">

            <img src="<?= $value['file_img']; ?>" alt="b">
        </div>





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
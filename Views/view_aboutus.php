<?php require "view_begin.php" ?>
<div class="Entier">
    <article>
        <h1><strong> ABOUT US </strong></h1> <br>
        <section>
            <p>
               <?= $aboutus['description']?>
               
            </p>
        </section>
    </article>

    <aside>
        <div class="Image">
            <img src="<?= $aboutus['file_img'] ?>">
        </div>
    </aside>

</div>

<?php require "view_end.php" ?>


</body>

</html>
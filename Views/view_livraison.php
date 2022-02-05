<?php require "view_begin.php" ?>
<div id="padding">

    <h1>INDIQUEZ LES DETAILS DE LIVRAISON</h1>

    <form method="post" action="Livraison.php">
        <div class="duo">
            <input class="border-white" type="text" name="PRENOM" placeholder="PRENOM" required />
            <input class="border-white" type="text" name="NOM" placeholder="NOM" required />
        </div>
        <div class="duo">
            <input class="border-white" type="text" name="ADRESSE" placeholder="ADRESSE" required />
            <input class="border-white" type="text" name="VILLE" placeholder="VILLE" required />
        </div>
        <div class="duo">
            <input class="border-white" type="text" name="CODE POSTAL" placeholder="CODE POSTAL" required />
            <input class="border-white" type="text" name="PAYS" placeholder="PAYS" required />
        </div>
        <div class="duo">
            <input class="border-white" type="text" name="TELEPHONE" placeholder="TELEPHONE" required />
            <input class="border-white" type="text" name="EMAIL" placeholder="EMAIL" required />
        </div>
        <div id="envoi">
            <input id="soumettre" type="submit" value="SOUMETTRE">
        </div>
    </form>

</div>


<?php require "view_end.php" ?>


</body>

</html>
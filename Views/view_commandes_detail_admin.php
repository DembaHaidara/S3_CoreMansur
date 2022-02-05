<?php require "view_begin_admin.php";


?>

<div>

    <ul>
        <li>Numero de Commande : <?php echo $detail_commande['num_commande']; ?></li>
        <li>ID Article : <?php echo $detail_commande['id_article']; ?></li>
        <li>Nom Article : <?php echo $detail_commande['nom_article']; ?></li>
        <li>Prenom : <?php echo $detail_commande['prenom']; ?></li>
        <li>Nom : <?php echo $detail_commande['nom']; ?></li>
        <li>Email : <?php echo $detail_commande['Email']; ?></li>
        <li>ID Payement : <?php echo $detail_commande['id_payement']; ?></li>
        <li>Date Achat : <?php echo $detail_commande['date']; ?></li>
        <li>Address : <?php echo $detail_commande['address']; ?></li>
        <li>ID Marchand : <?php echo $detail_commande['id_marchant']; ?></li>
        <li>Taille : <?php echo $detail_commande['taille_article']; ?></li>
        <li style="color: red;">Statut : <?php echo $detail_commande['statut']; ?></li>
    </ul>
    <form action="?controller=commandes&action=changeStatutCommande&id=<?= $detail_commande['num_commande'] ?>" method="post">
        <select class="border-white" name="statut" id="dept" class="dept" required>
            <option value=" ">- Statut Commande -</option>
            <option value="En Attente">En Attente</option>
            <option value="En préparation">En préparation</option>
            <option value="Expédiée">Expédiée</option>
            <option value="Colis Recus">Colis Recus</option>
            <option value="Annuler">Annuler</option>



        </select>
        <input type="submit" name="ChangerStatut">
    </form>


</div>
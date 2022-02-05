<?php require_once "view_begin.php";

 $_SESSION['info'] = $info;

?>
<link rel="stylesheet" type="text/css" href="./Content/css/headerFooter.css">

<div class="boite1">
	<div class="img">
		<img src="./Content/img/valide.png" width="100" height="100">
	</div>
	<div>

		<h3> Merci de votre Commande <?= $info['nom'] . " " . $info['prenom'] ?> </h3>
		<h4>Votre commande a été enregistrée</h4>


	</div>
</div>

<div class="recap">
	<center>
		<h3>Recapitulatif</h3>
		<h4><?= $info['nom'] . " " . $info['prenom'] ?></h4>
		<h4>Mail de contact : <?= $info['email'] ?></h4>


		<h5>Expedié par Core Mansur</h5>
		<p><?= $info['nom_article'] ?> || Taille : <?= $info['taille_article'] ?></p>
		<p>Chez vous : <?= $info['address'] ?> </p>
		<h5>N° de commande : <?= $info['num_commande'] ?></h5>
		<a href="?controller=paypal&action=GenereFacture" target="_blank">Telecharger Facture</a>

	</center>
</div>
<style type="text/css">
	.recap {
		border: 1px solid grey;
	}

	.img {
		width: 200px;
		height: 180px;
	}

	.boite1 {
		display: flex;
		justify-content: center;
	}
</style>
</div>


<?php require_once "view_end.php"; ?>
<?php require "view_begin.php" ?>



<center>
	<h1>CREER UN COMPTE</h1>
	<?php
	if (isset($_SESSION['indication'])) {

		if ($_SESSION['indication'] != NULL) { ?>
			<h3 style="color:red">
				<strong>
				<?php echo $_SESSION['indication'];
			} ?>
				</strong>
			</h3>
		<?php $_SESSION['indication'] = "";
	} else {
		$_SESSION['indication'] = "";
	};
		?>



		<div id="full">
			<form action="?controller=inscription&action=ajt" method="post">
				<label for="nom">Nom</label>
				<input class="border-white" type="text" name="nom" for="nom" required><br>

				<label for="prenom">Prenom</label>
				<input class="border-white" type="text" name="prenom" for="prenom" required><br>

				<label for="Identifiant">Identifiant</label>
				<input class="border-white" type="text" name="Identifiant" for="Identifiant" required><br>

				<label for="datedenaissance">Date de Naissance</label>
				<input class="border-white" type="date" name="DateNaissance" for="datedenaissance" required><br>
				<label for="Email">Email</label>
				<input class="border-white" type="email" name="Email" id="email" required><br>



				<label for="mdp">Mot de passe</label>

				<input class="border-white" type="password" name="mdp" id="mdp" oninvalid="this.setCustomValidity('Le mot de passe doit contenir au moins 8 à 20 caractère, un caractère minuscule ,un caractère majuscule, un chiffre et un signe spécial :  @ # - _ % ^ & + = § !?')" required><br>

				<label for="telephone">Téléphone</label>
				<input class="border-white" type="tel" name="Telephone" id="telephone" oninvalid="this.setCustomValidity('Format numero Francais')" required>
				<br>




				<input id="soumettre" type="submit" name="">
		</div>

</center>
<?php require "view_end.php" ?>
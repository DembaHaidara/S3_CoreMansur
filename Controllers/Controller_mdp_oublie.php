<?php
// require_once "Models/Model.php";

class Controller_mdp_oublie extends Controller
{

	public function action_default()
	{




		$data = [];
		$this->render("mdp_oublie", $data);
	}



	public function action_envoiMail($mail)
	{

		$email = $mail;
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

			$this->action_error("Erreur mail");
			die();
		}

		$mdp = $this->genereMdp();
		$sujet2 = "Core Mansur";
		$monmail = "me@example.com";
		$destinataire2 = $email;
		//$header = 'From: '.$monmail."\n";
		$header = "MIME-Version: 1.0\r\n";
		$header .= 'From:"Core Mansur"<me@exemple.com>' . "\n";
		$header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
		$header .= 'Content-Transfer-Encoding: 8bit';


		$contenu_message2 = "
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset='utf-8' />
			<meta name='viewport' content='width=device-width, initial-scale=1' />

		  <title>Core_mansur</title>
		</head>
		<body>

		 <center><h3>Rénitialisez votre de passe</h3></center>
		 <section>

		 <p>Cher Client</p>

		 <p>Vous avez fait une demande de Mot de passe perdu</p>
		 <p>Voici le code provisoir :<h3 style='color:red'>" . $mdp . "</h3> a entrée dans le lien ci dessous</p>
		 <p>Veuillez le modifier lors de votre connexion</p>




		 <h5>Si vous n'avez pas demandé la réinitialisation de votre mot de passe,ignorez cet-email</h5>

		</section>




		</body>
		</html>
			   ";


		if (mail($email, $sujet2, $contenu_message2, $header)) {
						$_SESSION['indication'] = "Mot de passe provisoir envoyé<br>dans votre mail : ".$email."";

			header("Location:?controller=mdp_oublie");
		} else {
		}
	}

	public function genereMdp()
	{
		$password = "";
		$characters = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
		for ($i = 0; $i < 10; $i++) {
			$password .= ($i % 2) ? strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];
		}

		$a = password_hash($password, PASSWORD_DEFAULT);
		$m = Model::getModel();
		$m->updateMdpPerdu($_POST["email"], $a);
		return $password;
	}

	public function action_verifEmail()
	{

		$m = Model::getModel();
		if (!isset($_POST["email"])) {
			$_SESSION['indication'] = "Veuillez saisir un email";
			$this->render("mdp_oublie");
			die();
		}
		$a = $m->isInDataBaseEmail($_POST["email"]);
		if ($a === false) {
			$_SESSION['indication'] = "Email non reconnu";
			header('Location:?controller=mdp_oublie');
			die();
		} else {
			$this->action_envoiMail($_POST["email"]);
		}
	}
}

<?php  
require_once "Models/Model.php";

class Controller_inscription extends Controller
{
 	public function action_default()
	{
    	  $this->render("inscription");

	 
	}
	public function get_ip() {

    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }

    elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
        
    }
    }

	 public function action_ajt(){
       $this->action_verifDonne();
    	$m = Model::getModel();
        $a = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

 
    $marqueurs = ['nom', 'prenom', 'DateNaissance','Email','Identifiant','Telephone'];

    $infos=[];

	 foreach ($marqueurs as $key => $value) {
	 	$infos[$value] = $_POST[$value];
       
	 }
         $infos['mdp'] = $a;
	 $infos['ip'] = $this->get_ip();
     $infos['compte'] = "user";



	 $m->addUser($infos);
      $a = $m->isInDataBaseClient($_POST["Identifiant"]);
         $_SESSION['user'] = $a;
         $this->render('home');
    	 

    }
	public function action_verifDonne(){

       $marqueurs = ['nom', 'prenom', 'DateNaissance','Email','Identifiant','mdp','Telephone'];

		
      	foreach ($marqueurs as $key => $value) {

	      	if (!isset($_POST[$value]) and empty($_POST[$value])) {
				$_SESSION['indication'] = "Erreur champs non saisie";
             header('Location:?controller=connexion&action=creecompte');
            die();
			}
      	}

       /*
        $password = $_POST["mdp"];
       
        if(!empty($_POST['Email'])) {
                if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
                    // adresse e-mail valide
        } 
        else {
          // adresse e-mail invalide
            $_SESSION['indication'] = "adresse e-mail invalide";
             header('Location:?controller=connexion&action=creecompte');
            die();
            }
 if (!preg_match('/^(0|\\+33|0033)[1-9][0-9]{8}$
            /',$_POST['Telephone'])) 
        {
            $_SESSION['indication'] = "Numero de telephone invalide";
             header('Location:?controller=connexion&action=creecompte');
            die();
        }
        
        if (!preg_match("/([012]?[1-9]|[12]0|3[01])\/(0?[1-9]|1[012])\/([0-9]{4})/",$_POST['DateNaissance'])) {
            $_SESSION['indication'] = "Date de naissance invalide";
             header('Location:?controller=connexion&action=creecompte');
            die();
            
        }
        if (!preg_match("/^/w$/",$_POST['Identifiant'])) {
            $_SESSION['indication'] = "Format non respcter";
             header('Location:?controller=connexion&action=creecompte');
            die();
        }
         if (!preg_match("/^/w$/",$_POST['non'])) {
            $_SESSION['indication'] = "Format non respcter";
             header('Location:?controller=connexion&action=creecompte');
            die();
        }
         if (!preg_match("/^/w$/",$_POST['prenom'])) {
            $_SESSION['indication'] = "Format non respcter";
             header('Location:?controller=connexion&action=creecompte');
            die();
        }*/

        $m = Model::getModel();
        $a = $m->isInDataBaseClient($_POST['Identifiant']);
        if ($a !== false) {
             $_SESSION['indication'] = "Veuillez chosir un autre id !!!";
             header('Location:?controller=connexion&action=creecompte');
            die();
        }


	
}
}
?>
<?php  

require_once "Models/Model.php";

class Controller_connexion extends Controller
{
 	public function action_default()
	{

    	  $this->render("connexion");
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


  
    public function action_verifMDP(){

    	$m=Model::getModel();
        if(!isset($_POST["password"]) && !isset($_POST["Identifiant"])){
             $_SESSION['indication'] = "Erreur veuillez contactez l'administrateur du site ";
            $this->render("connexion");
            die();

        }
        $a = $m->getUserMDP($_POST["Identifiant"]);
        if ($a === false) {
        	 $_SESSION['indication'] = "Identifiant non reconnu";
             header('Location:?controller=connexion');
            die();

        }
    

        if(!password_verify($_POST["password"],$a['Mdp'])){
            $_SESSION['indication'] = "Mot de passe Inconrecte";
            header('Location:?controller=connexion');


            die();

        }  

        $a = $m->isInDataBaseClient($_POST["Identifiant"]);
        $_SESSION['user'] = $a;
        $b = $m->StatutUser($_POST["Identifiant"]);
        if ($b['compte'] === 'user') {
                    $this->render('home');
        }
        else if ($b['compte'] === "root"){
            $data = ['shop' => $m->getProduits()];
        $this->render("admin", $data);
        }
        else{
            $this->action_error('erreur');
        }
        
        
    
    }
    

   public function action_Invite(){

    $this->render("livraison");
   }

  public function action_connecter(){
            $m=Model::getModel();

    
    if ($_SESSION['user']['compte'] === 'user') {
        
                    $this->render('connecter');
        }
        else if ($_SESSION['user']['compte'] === "root"){
            header('Location:?controller=admin');
        // $this->render("admin", $data);
        }
        else{
            $_SESSION['indication'] = "Erreur veuillez contactez l'administrateur du site ";
            $this->render("connexion");
            die();

        }
  }
 
      public function action_creecompte(){

      // $this->render('inscription');
                   header('Location:?controller=inscription');

    
       }

}

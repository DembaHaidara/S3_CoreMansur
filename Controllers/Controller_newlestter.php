<?php  
require_once "Models/Model.php";

class Controller_newlestter extends Controller
{		

		public function action_default()
		{
		  $this->action_newlestter();

		}

	public function action_newlestter(){
	
		
       $marqueurs = ['mail'];
		
      	foreach ($marqueurs as $key => $value) {

	      	if (!isset($_POST[$value]) and empty($_POST[$value])) {
				$this->action_error("Vous n'avez pas saisie tout les champs");
				die();
			}


      	}

      	 $infos=[];
	 foreach ($marqueurs as $key => $value) {
	 	$infos[$value] = $_POST[$value];
       
	 }

		$m = Model::getModel();
	   $a = $m->addNewlestter($infos);
	    if ($a === false) {
	    	$this->action_error("Erreur lors de l'enregistrement");
				die();
	    
	    }
	    else{
	    	$this->action_envoiMail();
	    }

	
	
	}
	public function action_envoiMail(){
	
			$email =$_POST["mail"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
            $this->action_error("Erreur mail");
				die();
            }

       
       $sujet2 = "Core Mansur";
        $monmail = "serviceclient@coremansur.fr"; 
    	$destinataire2 = $email;
         //$header = 'From: '.$monmail."\n";
         $header="MIME-Version: 1.0\r\n";
         $header .='From:"Core Mansur"<serviceclient@coremansur.fr>'."\n";
         $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';


        $contenu_message2 = '
<!DOCTYPE html>
<html>
<head>
</head>
<body>
       <a href="https://coremansur.000webhostapp.com/">
     	<img src="https://coremansur.000webhostapp.com/Content/img/1.png" alt="new">
    	<br>
    	<img src="https://coremansur.000webhostapp.com/Content/img/1.png" alt="new"></a>
</body>
</html>';
       if(mail($email,$sujet2,$contenu_message2,$header)){
        	header("Location:?controller=home");
        }
	   else{}
	}







	
	
}


?>

<?php  

require_once "Models/Model.php";

class Controller_deconnexion extends Controller
{
   public function action_default()
   {
        $this->action_deconnecter();

    
   }

  public function action_deconnecter(){
          $_SESSION['user'] = NULL;


    $this->render("home");
  }
  }


?>
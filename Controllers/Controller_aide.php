<?php

require_once "Models/Model.php";

class Controller_aide extends Controller
{

    public function action_default()
    {
        if (isset($_SESSION['user']) && $_SESSION['user'] !== NULL) {
        $this->action_show_aide();
        }
        else 
        {$this->render("home");}
    }

    public function action_show_aide()
     {
        $this->render("aide");
     }


    public function action_send()
    {
        if (isset($_SESSION['user']) && $_SESSION['user'] !== NULL) {

                $m = Model::getModel(); 
                $demande = ["Identifiant"=>$_SESSION["user"]["Identifiant"],"demande"=>$_POST["demande"]];
                $m->addDemande($demande);
                $this->action_show_aide();
                echo "<p><strong>La demande a bien été soumise ! </strong></p> ";
        }
        else
        {
        $this->action_default();}
    }

    public function action_fin()
    {

    }
}


?>

<?php

require_once "Models/Model.php";

class Controller_commandes_connecte extends Controller
{

    public function action_default()
    {
        if (isset($_SESSION['user']))
        {
        $this->action_show_commandes_connecte();
        }
        else 
        {$this->render("home");}
    }

    public function action_show_commandes_connecte()
     {
        if (isset($_SESSION['user']))
        {
        $m = Model::getModel();
        $data = ["commandes"=>$m->detailCommande($_SESSION["user"]["Identifiant"])];
        $this->render("commandes_connecte",$data);
        }
     }

}


?>

<?php

require_once "Models/Model.php";

class Controller_aide_admin extends Controller
{

    public function action_default()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']["compte"] === "root")
        {
        $this->action_show_aide_admin();
        }
        else 
        {$this->render("home");}
    }

    public function action_show_aide_admin()
     {
        if (isset($_SESSION['user']) && $_SESSION['user']["compte"] === "root")
        {$m = Model::getModel();
        $data = ["demandes"=>$m->getDemandes()];
        $this->render("aide_admin",$data);}
     }



    public function action_fin()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']["compte"] === "root")
        {$m = Model::getModel();
        $m->finDemande($_GET["id"]);
        $this->action_show_aide_admin();}
    }

    public function action_reprendre()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']["compte"] === "root")
        {$m = Model::getModel();
        $m->reprendreDemande($_GET["id"]);
        $this->action_show_aide_admin();}
    }

    public function action_supprimer()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']["compte"] === "root")
        {$m = Model::getModel();
        $m->removeDemande($_GET["id"]);
        $this->action_show_aide_admin();}
    }


}


?>

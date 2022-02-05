<?php
// require_once "Models/Model.php";

class Controller_informations extends Controller
{

    public function action_default()
    {
        $this->action_show_informations();
    }

    public function action_show_informations()
    {
        $this->render("informations");
    }

    public function action_change_password()
    {
        $m = Model::getModel();
        $a = $m->getUserMDP($_SESSION["user"]["Identifiant"]);
        if (password_verify($_POST["mdpActuel"], $a["Mdp"])) {
            if ($_POST["mdpNew"] == $_POST["mdpNewBis"]) {
                $a = password_hash($_POST['mdpNew'], PASSWORD_DEFAULT);
                $m->updateMdp($_SESSION["user"]["Identifiant"], $a);
                $_SESSION["indication"] = "Mot de passe changé avec succès";
                header('Location:?controller=informations');
            } else {
                $_SESSION["indication"] = "Les 2 nouveaux mot de passe ne sont pas identique";
                header('Location:?controller=informations');
            }
        } else {
            $_SESSION["indication"] = "Pas le bon mot de passe actuel";
            header('Location:?controller=informations');
        }
    }
}

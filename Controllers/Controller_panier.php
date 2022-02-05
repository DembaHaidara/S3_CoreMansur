<?php
require_once "Models/Model.php";

class Controller_panier extends Controller
{

    public function action_default()
    {
        $this->action_show_panier();
    }

    public function action_show_panier()
    {
        $m = Model::getModel();
        $panierInformations = [];

        if (!empty($_SESSION["panier"])) {

            foreach ($_SESSION["panier"] as $value) {

                $panierInformations[] = [$m->getArticleInformation($value[0]), $value[1]];
            }
        }

        $data = ["listPanier" => $panierInformations];

        $_SESSION["panier2"] = $panierInformations;
        $this->render("panier", $data);
    }

    public function action_add_article()
    {
        $m = Model::getModel();
        if (isset($_POST["add_Article"]) and $m->isInDataBase($_POST["add_Article"])) {
            $_SESSION["panier"][] = [$_POST["add_Article"], $_POST["taille"]];
        }
        $_POST = 0;
        header("Location:?controller=panier");
        $this->action_show_panier();
    }

    public function action_remove_article()
    {
        if (isset($_GET["id"]) && isset($_GET["taille"])) {
            $i = 0;
            foreach ($_SESSION["panier"] as $value) {

                if ($value[0] == $_GET["id"] && $value[1] == $_GET["taille"]) {
                    array_splice($_SESSION["panier"], $i, 1);
                    header("Location:?controller=panier");
                    $this->action_show_panier();
                    die();
                }
                $i += 1;
            }
        }
        header("Location:?controller=panier");
        $this->action_show_panier();
    }
}

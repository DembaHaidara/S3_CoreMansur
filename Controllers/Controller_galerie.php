<?php
require_once "Models/Model.php";

class Controller_galerie extends Controller

{

    public function action_default()
    {
        $this->action_show_galerie();
    }

    public function action_show_galerie()
    {
        $m = Model::getModel();
        $data = ['galerie'=>$m->getGalerie()];
        $this->render("galerie",$data);
    }
}

?>
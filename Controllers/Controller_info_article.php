<?php
require_once "Models/Model.php";

class Controller_info_article extends Controller
{
    public function action_default()
    {
        $this->action_show_info();

    }

    public function action_show_info(){

        $m=Model::getModel();
        $data = ['article'=>$m->getArticleInformation($_GET['id'])];
        $this->render('info_article',$data);

    }

}


?>
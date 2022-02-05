<?php
require_once "Models/Model.php";

class Controller_shop extends Controller
{


 	public function action_default()
	{
    	  $this->action_shop();

	}
    public function action_shop()
    {
        $m=Model::getModel();
        $data = ['shop'=>$m->getProduits()];
        $this->render("shop",$data);


    }
    public function action_shopbis(){
                $m=Model::getModel();
                $data = ['shop'=>$m->getArticleInformation($_GET['nom'])];
                $this->render('shopbis',$data);



    }
    public function action_galerie()
    {

        $m=Model::getModel();
        $data = ['galerie'=>$m->getGalerie()];
        $this->render("galerie",$data);
}
    
}


?>

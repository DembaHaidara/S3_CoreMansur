<?php  
require_once "Models/Model.php";

class Controller_home extends Controller
{
	
	public function action_default()
	{
	  $m = Model::getModel();
	  $data =[];
	  $this->render("home",$data);

	}
	
	

}


?>
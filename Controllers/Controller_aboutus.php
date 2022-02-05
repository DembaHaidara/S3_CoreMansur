<?php  
// require_once "Models/Model.php";

class Controller_aboutus extends Controller
{		

		public function action_default()
		{          $m=Model::getModel();

		          $data = ['aboutus'=>$m->getAboutus()];
		  $this->render("aboutus",$data);

		}
		
}

<?php
require_once "Models/Model.php";

class Controller_admin extends Controller
{

	public function action_default()
	{
		$this->action_form_add();
	}

	public function action_form_add()
	{
		$m = Model::getModel();
		$data = ['shop' => $m->getProduits()];
		$this->render("shopadmin", $data);

	}

	public function action_ajoutershop()

	{
		if (!isset($_POST['Nom_Article']) or !isset($_POST['prix']) or !isset($_FILES['file_img']) or !isset($_POST['description']) or !isset($_POST['collection']))
		{
			$this->action_form_add();
			die();
		}
		$dossier = './Content/img/';
        $fichier = basename($_FILES['file_img']['name']);
        if(move_uploaded_file($_FILES['file_img']['tmp_name'], $dossier . $fichier)) 
         {
          echo 'Upload effectué avec succès !';
         }
        else //Sinon (la fonction renvoie FALSE).
        {
          $this->action_error('Echec de l\'upload !');

        }
        $extensions = array('.png', '.gif', '.jpg', '.jpeg'); // extension accepter

        $extension = strrchr($_FILES['file_img']['name'], '.'); // recup apres le point pour connaitre l'extension

        if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
        {
			$this->action_error('Vous devez uploader un fichier de type png, gif, jpg, jpeg'); 
        }
   

         

		if (empty($_POST['description']))
			{$_POST['description'] = null;
			}
		$marqueurs = ["Nom_Article","prix","description","collection"];

			$info = [];
			   foreach ($marqueurs as $key => $value) {
				   $info[$value] = $_POST[$value];}
				   $info["file_img"] = $dossier."".$_FILES['file_img']['name'];

		$m = Model::getModel();
		$m->addArticle($info);
		$data = ['shop'=>$m->getProduits()];
		$this->render("shopadmin",$data);

	}


	public function action_retirer(){

		$m = Model::getModel();

		if (isset($_POST["id_Article"])){
			$m->removeArticle($_POST["id_Article"]);
		}

		$data = ['shop'=>$m->getProduits()];
		$this->render('shopadmin',$data);

	}

	public function action_redirection(){
   if (!isset($_GET['page'])) {
   
   }
    if ($_GET['page'] == 'shopadmin') {
    	  		$m = Model::getModel();
    		$data = ['shop'=>$m->getProduits()];
    		$this->render($_GET['page'],$data);
		
    }
    if ($_GET['page'] == 'collectionadmin') {
    		$m = Model::getModel();
    		$data = ['collection'=>$m->getCollection()];
    		$this->render($_GET['page'],$data);
    	
    }
    if ($_GET['page'] == 'aboutsUsadmin') {
    		$m = Model::getModel();
    		$data = ['shop'=>$m->getProduits()];
    		$this->render($_GET['page'],$data);
    	
    }
    if ($_GET['page'] == 'Galerieadmin') {
    		$m = Model::getModel();
    		$data = ['shop'=>$m->getProduits()];
    		$this->render($_GET['page'],$data);
    	
    }


  
 }



}

?>

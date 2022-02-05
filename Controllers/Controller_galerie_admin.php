<?php

require_once "Models/Model.php";

class Controller_galerie_admin extends Controller
{

	public function action_default()
	{
		$this->action_form_add();
	}

	public function action_form_add()
	{
		$m = Model::getModel();
		$data = ['shop' => $m->getGalerie()];
		$this->render("galerie_admin", $data);

	}

	public function action_ajouterGalerie()

	{
		if (!isset($_POST['nom']) or !isset($_FILES['img']))
		{
			$this->action_form_add();
			die();
		}
		$dossier = './Content/img/';
        $fichier = basename($_FILES['img']['name']);
        if(move_uploaded_file($_FILES['img']['tmp_name'], $dossier . $fichier)) 
         {
          echo 'Upload effectué avec succès !';
         }
        else //Sinon (la fonction renvoie FALSE).
        {
          $this->action_error('Echec de l\'upload !');

        }
        $extensions = array('.png', '.gif', '.jpg', '.jpeg'); // extension accepter

        $extension = strrchr($_FILES['img']['name'], '.'); // recup apres le point pour connaitre l'extension

        if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
        {
			$this->action_error('Vous devez uploader un fichier de type png, gif, jpg, jpeg'); 
        }
   

        
		$marqueurs = ["nom"];

			$info = [];
			   foreach ($marqueurs as $key => $value) {
				   $info[$value] = $_POST[$value];}
				   $info["img"] = $dossier."".$_FILES['img']['name'];

		$m = Model::getModel();
		$m->addGalerie($info);
		$data = ['shop'=>$m->getGalerie()];
		$this->render("galerie_admin",$data);

	}


	public function action_retirer(){

		$m = Model::getModel();

		if (isset($_POST["id"])){
			$m->removeGalerie($_POST["id"]);
		}

		$data = ['shop'=>$m->getGalerie()];
		$this->render('galerie_admin',$data);

	}
  
}

?>

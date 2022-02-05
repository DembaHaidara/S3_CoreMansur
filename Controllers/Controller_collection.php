<?php  
require_once "Models/Model.php";

class Controller_collection extends Controller
{
	
	public function action_default()
	{
	  $this->action_collection();

	}

	public function action_collection()
    {
        $m=Model::getModel();
        $data = ['collection'=>$m->getCollection()];
        $this->render("collection",$data);


    }

    public function action_ajouterCollection()

	{
		if (!isset($_FILES['file_img']))
		{
			$this->action_collection();
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
   

         	
				   $info["file_img"] = $dossier."".$_FILES['file_img']['name'];

		$m = Model::getModel();
		$m->addCollection($info);
		$data = ['collection'=>$m->getCollection()];
		$this->render("collectionadmin",$data);

	}
	public function action_retirer(){

		$m = Model::getModel();

		if (isset($_POST["id_Article"])){
			$m->removeCollection($_POST["id_Article"]);
		}

		$data = ['collection'=>$m->getCollection()];
		$this->render('collectionadmin',$data);

	}
	
	

}

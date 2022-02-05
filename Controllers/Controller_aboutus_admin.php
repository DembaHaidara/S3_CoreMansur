<?php
require_once "Models/Model.php";

class Controller_aboutus_admin extends Controller
{
    public function action_default()
    {
        $this->action_show_info();

    }

    public function action_show_info(){

        $m=Model::getModel();
        $data = ['aboutus'=>$m->getAboutus()];
        $this->render('aboutus_admin',$data);
       

    }
   

    public function action_ajouteraboutus()

    {
        if (!isset($_POST['description']) or !isset($_FILES['img']))
        {
            $this->action_show_info();
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
   

        
        $marqueurs = ["description"];

            $info = [];
               foreach ($marqueurs as $key => $value) {
                   $info[$value] = $_POST[$value];}
                   $info["img"] = $dossier."".$_FILES['img']['name'];

        $m = Model::getModel();
        $m->updateAboutus($info);
        $data = ['aboutus'=>$m->getAboutus()];
        $this->render("aboutus_admin",$data);

    }



}


?>
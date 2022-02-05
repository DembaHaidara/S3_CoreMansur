<?php

require_once "Models/Model.php";

class Controller_commandes extends Controller
{

    public function action_default()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']["compte"] === "root")
        {
        $this->action_show_commandes_admin();
        }
        else
        {$this->render("home");}
    }

    public function action_show_commandes_admin()
     {
        if (isset($_SESSION['user']) && $_SESSION['user']["compte"] === "root")
        {
        $m = Model::getModel();
        $data = ["commandes"=>$m->getCommandes()];
        $this->render("commandes_admin",$data);
        }
     }


    public function action_fin()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']["compte"] === "root")
        {$m = Model::getModel();
        $m->finCommande($_GET["id"]);
        $this->action_show_commandes_admin();}
    }

    public function action_changeStatutCommande()
    {
        $m = Model::getModel();
        $m->changeStatutCommande($_POST["statut"],$_GET['id']);
        $this->action_EnvoiMail($_GET['id']);
        $this->action_detail($_GET['id']);

    }

    public function action_supprimer()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']["compte"] === "root")
        {$m = Model::getModel();
        $m->removeCommande($_GET["id"]);
        $this->action_show_commandes_admin();}
    }

    public function action_detail()
    {
        $m = Model::getModel();
        $data = ["detail_commande"=>$m->detailCommande($_GET["id"])];
        $this->render("commandes_detail_admin",$data);

    }
     public function action_EnvoiMail()
    {
         $m = Model::getModel();
        $detail_commande=$m->detailCommande($_GET["id"]);

            $email =$detail_commande["Email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $this->action_error("Erreur mail");
                die();
            }


       $sujet2 = "Core Mansur";
        $monmail = "me@example.com";
        $destinataire2 = $email;
         $header="MIME-Version: 1.0\r\n";
         $header .='From:"Core Mansur"<me@exemple.com>'."\n";
         $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
$contenu_message2 = "
<!DOCTYPE html>
<html>
<head>
<title>Core Mansur Commande N°". $detail_commande['num_commande']."</title>
</head>
<body>
<h2>Bonjour ". $detail_commande['nom']." ".  $detail_commande['prenom']."</h2>
<h5>Merci de votre achat.</h5>
<h4>Votre Commande N° ".  $detail_commande['num_commande']." est ".  $detail_commande['statut']."</h4>

<div class='recap'>
    <center>
    <h3>Recapitulatif</h3>
    <h4>".  $detail_commande['nom']." ".  $detail_commande['prenom']."</h4>
    <h4>Mail de contact :".  $detail_commande['email']."</h4>


    <h5>Expedié par Core Mansur</h5>
    <p>".  $detail_commande['nom_article']." || Taille : ".  $detail_commande['taille_article']."</p>
    <p>Chez vous : ".  $detail_commande['address']."</p>
    <h5>N° de commande :  ".  $detail_commande['num_commande']."</h5>
</center>

</div>
<style type='text/css'>
    .recap{
        border: 1px solid grey;
    }
    .img{
        width: 200px; height: 180px;
    }
    .boite1{ display: flex; justify-content: center; }

</style>
</div>
</body>
</html>";
        if(mail($email,$sujet2,$contenu_message2,$header)){}
       else{}
    }









}


?>

<?php
require_once "Models/Model.php";

class Controller_contact extends Controller

{

    public function action_default()
    {
        $this->render("contact");
    }
    public function action_NousContacte()
    {

      if (!isset($_POST['mail']) or !isset($_POST['message']) or !isset($_POST['nom']) or !isset($_POST['numcommande'])) {
          $_SESSION['indication']="Erreur dans le formulaire !";
          $this->render("aide");
          die();
      }

      if (empty($_POST['mail']) or empty($_POST['message']) or empty($_POST['choix']) or empty($_POST['nom'])) {
         $_SESSION['indication']="Veuillez remplir tout les champs";
         $this->render("aide");
          die();
      }

      if (empty($_POST['numcommande'])) {
            $_POST['numcommande'] = 0;
      }

    $mail =$_POST["mail"];

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['indication']="Mauvais format pour le mail !";
        $this->render("aide");
        die();
        }

     $info = [];
     $info["mail"] = $_POST['mail'];
     $info["message"] = $_POST['message'];
     $info["choix"] = $_POST['choix'];
     $info["nom"] = $_POST['nom'];
     $info["numcommande"] = $_POST['numcommande'];



      $m=Model::getModel();
        $m->addMessageContact($info);
        $this->action_envoieMail();
         $_SESSION['indication']="Message envoyé !";
        header("Location:?controller=contact");


    }

    public function action_NousContacteConnecte()
    {

        if (isset($_SESSION['user'])) {
            if ($_SESSION['user'] !== NULL) {

                if (!isset($_POST['message']) or !isset($_POST['numcommande'])) {
                    $this->render("view_aide.php");
                }

                if (empty($_POST['message']) or empty($_POST['choix'])) {
                    $this->render("view_aide.php");
                }
                if (empty($_POST['numcommande'])) {
                      $_POST['numcommande'] = 0;
                }

               $info = [];
               $info["mail"] = $_SESSION["user"]["Email"];
               $_POST["mail"] = $_SESSION["user"]["Email"];
               $info["message"] = $_POST['message'];
               $info["choix"] = $_POST['choix'];
               $info["nom"] = $_SESSION["user"]["Nom"];
               $_POST["nom"] = $_SESSION["user"]["Nom"];
               $info["numcommande"] = $_POST['numcommande'];

                $m=Model::getModel();

                $m->addMessageContact($info);
                $this->action_envoieMail();
                $this->action_success("Message envoyé !");
                

            }
        }
    }





    
    public function action_envoieMail(){

           $mail = $_POST["mail"];
           $nom = $_POST['nom'];
       $sujet2 = "Core Mansur";
        $monmail = "me@example.com";
        $destinataire2 = $mail;
         $header="MIME-Version: 1.0\r\n";
         $header .='From:"Core Mansur"<me@exemple.com>'."\n";
         $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';


        $contenu_message2 = "
<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <h2>Bonjour". $nom."</h2>
 <br><p>J\'ai bien recus votre message vous serez contacté prochainement</p>
<br><p>Merci</p>
</body>
</html>";
if(mail($mail,$sujet2,$contenu_message2,$header)){}
       else{}
    }

    }



?>

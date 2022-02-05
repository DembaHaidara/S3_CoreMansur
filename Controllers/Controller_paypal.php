<?php 
use Dompdf\Dompdf;

require_once "Models/Model.php";

class Controller_paypal extends Controller
{  
	

	public function action_default()
    {

        $this->action_test();
    }
    public function action_test()
    { 


    	 $tab= ['id_article','nom_article','prenom','nom','email','id_payement','address','id_marchant',"taille_article"];

          $info = [];
          $info['num_commande'] = $this->action_GenereNumCommande();

          foreach ($tab as $key => $value) {
          	  $info[$value] = $_GET[$value];
          }
       

          $m = Model::getModel();
          $m->addNewCommande($info);

          // $this->action_envoiMail();
    	$data = ['info'=>$info];
      

        $this->render("payementConfirme",$data);                   
        $this->action_GenereFacture($info,$data);      

    }
      public function action_GenereFacture()
    {
        //  dompdf est une librairi de php qui permet de convertir du HTML vers PDF écrit en PHP,

        require_once 'dompdf/autoload.inc.php';
        // require_once 'facture.php';
        // die();
    
        $dompdf = new Dompdf();
        //on va stoker le facture dans une variable grace au buffer
        // c est une memoir qui va stocke en arriere plan le pdf grace au buffer(le temps de l'eccution)
        ob_start();
        setlocale(LC_TIME, 'fr_FR');
        date_default_timezone_set('Europe/Paris');
        $date['date'] = utf8_encode(strftime('%A %d %B %Y, %H:%M'));
        $info = $_SESSION['info'];
        $m = Model::getModel();
        $a = $m->getArticleInformation($info['id_article']);
        $_SESSION['facture'] = $a + $info + $date;

         require_once 'facture_files/facture.php';
        
        $html = ob_get_contents(); //recupere le contenue de la facture dans la var $html

        
        ob_end_clean();

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4');

        $dompdf->render();

        $ficher = 'Facture_CoreMansur.pdf';
        $dompdf->stream($ficher);

        
               

                

    }



      public function action_GenereNumCommande()
    {

    $amount = 100; //the amount of ids
	$previousValues = array();
	for ($i = 0; $i < $amount; $i++){    
    $rand = rand(0,9999);
    while (in_array($rand, $previousValues)){
        $rand = rand(0, 9999);
    }
    $previousValues[] = $rand;
    $today = date("dmY");
    $unique = $today.$rand;
   
	}
	return $unique;

    }
    /*
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
    */

}
?>
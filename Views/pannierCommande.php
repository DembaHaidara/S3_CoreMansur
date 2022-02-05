<?php
require_once "../Models/Model.php";
require_once "../Controllers/Controller.php";

function action_GenereNumCommande()
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


$info = [];
           $info = $_POST['info'];
                
$info['num_commande'] = action_GenereNumCommande();
$m = Model::getModel();
$_SESSION['info2'] = $info;
 $m->addNewCommande($info);

   unset($_SESSION['panier']);
           unset($_SESSION['panier2']);
   
          header('Location:../Views/payementConfirmePanier.php');







?>
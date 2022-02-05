<?php
session_start();



require_once "Utils/functions.php";

require_once "Models/Model.php";

require_once "Controllers/Controller.php";



$controllers = ["home","collection","newlestter","connexion","retour","shop","aboutus","admin",


    "panier","info_article","inscription","deconnexion","CGV","contact","galerie","mdp_oublie","paypal",

    "commandes", "aide", "informations","aide_admin","commandes_connecte","galerie_admin","aboutus_admin"];


$controller_default = "home";

if (isset($_GET['controller']) and in_array($_GET['controller'], $controllers)) {
    $nom_controller = $_GET['controller'];
} else {
    $nom_controller = $controller_default;
}

$nom_classe = 'Controller_' . $nom_controller;

//On détermine le nom du fichier contenant la définition du contrôleur
$nom_fichier = 'Controllers/' . $nom_classe . '.php';

//Si le fichier existe et est accessible en lecture
if (is_readable($nom_fichier)) {
    //On l'inclut et on instancie un objet de cette classe
    require_once $nom_fichier;
    new $nom_classe();
} else {
    die("Error 404: not found!");
}

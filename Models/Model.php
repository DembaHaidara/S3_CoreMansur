<?php


class Model
{
    private $bd;

    private static $instance = null;


    private function __construct()
    {
        require_once "infoconexion.php";
        $this->bd = new PDO($dsn, $login, $mdp);
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->bd->query("SET nameS 'utf8'");
    }

 //Requete SQL Supp pour une question de securite
}

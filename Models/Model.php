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


    public static function getModel()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }


    public function getUserMDP($id)
    {
        $requete = $this->bd->prepare("SELECT `Mdp` FROM `users` WHERE `Identifiant`=:id");
        $requete->bindValue(':id', $id);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }


    public function getArticleInformation($id)
    {
        $requete = $this->bd->prepare('Select * from produits WHERE id_Article = :id');
        $requete->bindValue(':id', $id);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }
    public function getAboutus()
    {
        $requete = $this->bd->prepare("SELECT * FROM aboutus");
        // $requete->bindValue(':id', $id);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }


    public function isInDataBaseClient($id)
    {

        $requete = $this->bd->prepare("SELECT * FROM `users` WHERE `Identifiant`=:id");
        $requete->bindValue(':id', $id);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }


    public function isInDataBaseEmail($email)
    {

        $requete = $this->bd->prepare("SELECT * FROM `users` WHERE `Email`=:mail");
        $requete->bindValue(':mail', $email);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

    public function isInDataBase($id)
    {

        $requete = $this->bd->prepare("SELECT * FROM `produits` WHERE `id_Article`=:id");
        $requete->bindValue(':id', $id);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);

        return $this->getArticleInformation($id) !== false;
    }


    public function getProduits()
    {
        $requete = $this->bd->prepare('SELECT * FROM `produits`');
        $requete->execute();
        return $requete->fetchall(PDO::FETCH_ASSOC);
    }

    public function getGalerie()
    {
        $requete = $this->bd->prepare('SELECT * FROM `galerie`');
        $requete->execute();
        return $requete->fetchall(PDO::FETCH_ASSOC);
    }
    public function getCollection()
    {
        $requete = $this->bd->prepare('SELECT * FROM `collection`');
        $requete->execute();
        return $requete->fetchall(PDO::FETCH_ASSOC);
    }



    public function addUser($infos)
    {

        $requete = $this->bd->prepare("INSERT INTO `users`(`id`, `Nom`, `Prenom`, `DateNaissance`, `Email`, `Identifiant`, `Mdp`, `Telephone`, `IP`, `dateDernierConnex`,`compte`) VALUES (NULL,:nom,:prenom,:DateNaissance,:Email,:Identifiant, :mdp,:Telephone,:ip,NOW(),:compte)");

        $marqueurs = ['nom', 'prenom', 'DateNaissance', 'Email', 'Identifiant', 'mdp', 'Telephone', 'ip', 'compte'];


        foreach ($marqueurs as $value) {
            $requete->bindValue(':' . $value, $infos[$value]);
        }

        //Exécution de la requête
        $requete->execute();

        return (bool) $requete->rowCount();
    }


    public function addArticle($infos)
    {
        $requete = $this->bd->prepare("INSERT INTO `produits` (`id_Article`,`prix`,`Nom_Article`,`file_img`,`description`,`lien_shop`,`collection`) VALUES (NULL,:prix, :Nom_Article, :file_img, :description, 0,:collection)");
        $marqueurs = ['prix', 'Nom_Article', 'file_img', 'description', 'collection'];
        foreach ($marqueurs as $value) {
            $requete->bindValue(':' . $value, $infos[$value]);
        }
        $requete->execute();
    }
    public function addCollection($infos)
    {
        $requete = $this->bd->prepare("INSERT INTO `collection` (`id_Article`, `file_img`) VALUES (NULL,:file_img)");
        $marqueurs = ['file_img'];
        foreach ($marqueurs as $value) {
            $requete->bindValue(':' . $value, $infos[$value]);
        }
        $requete->execute();
    }

    public function addNewlestter($infos)
    {
        $requete = $this->bd->prepare("INSERT INTO `newlestter`(`id`, `mail`, `date`) VALUES (NULL,:mail,NOW())");
        $marqueurs = ['mail'];
        foreach ($marqueurs as $value) {
            $requete->bindValue(':' . $value, $infos[$value]);
        }
        $requete->execute();
    }
    public function addMessageContact($infos)
    {
        $requete = $this->bd->prepare("INSERT INTO `contact`(`id`, `nom`, `mail`, `message`, `choix`, `numcommande`, `date`)  VALUES (NULL,:nom,:mail,:message,:choix,:numcommande,NOW())");
        $marqueurs = ['nom', 'mail', 'message', 'choix', 'numcommande'];
        foreach ($marqueurs as $value) {
            $requete->bindValue(':' . $value, $infos[$value]);
        }
        $requete->execute();
    }


    public function removeArticle($id)
    {
        $requete = $this->bd->prepare("DELETE FROM `produits` WHERE `id_Article` = :id");
        $requete->bindValue(':id', $id, PDO::PARAM_INT);
        $requete->execute();
    }
    public function removeCollection($id)
    {
        $requete = $this->bd->prepare("DELETE FROM `collection` WHERE `id_Article` = :id");
        $requete->bindValue(':id', $id, PDO::PARAM_INT);
        $requete->execute();
    }
    public function StatutUser($iden)
    {
        $requete = $this->bd->prepare("SELECT `compte` FROM `users` WHERE `Identifiant` = :iden");
        $requete->bindValue(':iden', $iden);
        $requete->execute();
        return $requete->fetch();
    }

    public function addNewCommande($infos)
    {
        $requete = $this->bd->prepare("INSERT INTO `commandes`(`num_commande`,`id_article`,`nom_article`,`prenom`,`nom`,`Email`,`id_payement`, `date`, `address`, `id_marchant`,`taille_article`, `statut`) VALUES (:num_commande,:id_article,:nom_article,:prenom,:nom,:email,:id_payement,NOW(),:address,:id_marchant,:taille_article,'en Attente')");

        $marqueurs = ['num_commande', 'id_article', 'nom_article', 'prenom', 'nom', 'email', 'id_payement', 'address', 'id_marchant', 'taille_article'];

        foreach ($marqueurs as $value) {
            $requete->bindValue(':' . $value, $infos[$value]);
        }
        $requete->execute();
    }




    public function addDemande($demande)
    {
        $requete = $this->bd->prepare("INSERT INTO `demandes`(`id_demande`,`Identifiant`,`demande`,`etat`) VALUES (NULL,:Identifiant,:demande,TRUE)");

        $marqueurs = ['Identifiant', 'demande'];

        foreach ($marqueurs as $value) {
            $requete->bindValue(':' . $value, $demande[$value]);
        }

        $requete->execute();
    }

    public function removeDemande($id)
    {
        $requete = $this->bd->prepare("DELETE FROM `contact` WHERE `id` = :id");
        $requete->bindValue(':id', $id, PDO::PARAM_INT);
        $requete->execute();
    }

    public function finDemande($id)
    {
        $requete = $this->bd->prepare("UPDATE `contact` WHERE `id` = :id SET `etat` = FALSE ");
        $requete->bindValue(':id', $id, PDO::PARAM_INT);
        $requete->execute();
    }

    public function reprendreDemande($id)
    {
        $requete = $this->bd->prepare("UPDATE `demandes` WHERE `id_demande` = :id SET `etat` = TRUE ");
        $requete->execute();
    }

    public function getDemandes()
    {
        $requete = $this->bd->prepare('SELECT * FROM `contact`');
        $requete->execute();
        return $requete->fetchall(PDO::FETCH_ASSOC);
    }

    public function getCommandes()
    {
        $requete = $this->bd->prepare('SELECT * FROM `commandes`');
        $requete->execute();
        return $requete->fetchall(PDO::FETCH_ASSOC);
    }

    public function removeCommande($id)
    {
        $requete = $this->bd->prepare("DELETE FROM `commandes` WHERE `num_commande` = :id");
        $requete->bindValue(':id', $id, PDO::PARAM_INT);
        $requete->execute();
    }

    public function finCommande($id)
    {
        $requete = $this->bd->prepare("UPDATE `commandes` WHERE `num_commande` = :id SET `etat` = FALSE ");
        $requete->execute();
    }

    public function changeStatutCommande($statut, $num_commande)
    {
        $requete = $this->bd->prepare("UPDATE `commandes` SET `statut`= :statut WHERE `num_commande`= :num_commande ");
        $requete->bindValue(':statut', $statut);
        $requete->bindValue(':num_commande', $num_commande);
        $requete->execute();
    }

    public function detailCommande($id)
    {
        $requete = $this->bd->prepare("SELECT * FROM `commandes` WHERE `num_commande` = :id");
        $requete->bindValue(':id', $id, PDO::PARAM_INT);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

    public function updateAboutus($infos)
    {
        $requete = $this->bd->prepare("UPDATE `aboutus` SET `description`= :description,`file_img`= :img WHERE `id`= 1");
        $marqueurs = ['description', 'img'];
        foreach ($marqueurs as $value) {
            $requete->bindValue(':' . $value, $infos[$value]);
        }
        $requete->execute();
    }
    public function addGalerie($infos)
    {
        $requete = $this->bd->prepare("INSERT INTO `galerie` (`id`,`nom`,`img`) VALUES (NULL,:nom, :img)");
        $marqueurs = ['nom', 'img'];
        foreach ($marqueurs as $value) {
            $requete->bindValue(':' . $value, $infos[$value]);
        }
        $requete->execute();
    }

    public function removeGalerie($id)
    {
        $requete = $this->bd->prepare("DELETE FROM `galerie` WHERE `id` = :id");
        $requete->bindValue(':id', $id, PDO::PARAM_INT);
        $requete->execute();
    }

    public function updateMdpPerdu($mail, $mdp)
    {
        $requete = $this->bd->prepare("UPDATE `users` SET `mdp` = :mdp WHERE `Email` = :mail");
        $requete->bindValue(':mail', $mail);
        $requete->bindValue(':mdp', $mdp);
        $requete->execute();
    }

    public function updateMdp($id, $mdp)
    {
        $requete = $this->bd->prepare("UPDATE `users` SET `mdp` = :mdp WHERE `Identifiant` = :id");
        $requete->bindValue(':id', $id);
        $requete->bindValue(':mdp', $mdp);
        $requete->execute();
    }
}

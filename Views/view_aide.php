<?php require_once 'view_begin_connecte.php'; ?>

<link rel="stylesheet" type="text/css" href="./Content/css/contact.css">
<div class="Entier">

  <article>
    <center>
      <h1><strong>Contact</strong></h1> <br>
      <section>

        <div class="full">
          <div class="connexion">
            <?php
            if (isset($_SESSION['indication'])) {

              if ($_SESSION['indication'] != NULL) { ?>
                <h3 style="color:red">
                  <strong>
                  <?php echo $_SESSION['indication'];
                } ?>
                  </strong>
                </h3>
              <?php $_SESSION['indication'] = "";
            } else {
              $_SESSION['indication'] = "";
            };
              ?>




              <div class="form">
                <form method="post" action="?controller=contact&action=NousContacteConnecte">

                  <p for="dept">Categorie</p>

                  <select class="border-white" name="choix" id="dept" class="dept" required>
                    <option value="">- Categorie -</option>
                    <option value="Demande de renseignement">Demande de renseignement</option>
                    <option value="Probleme lié a nos produit">Problème lié à nos produit</option>

                    <option id="lr" value="Livraison et retour">Livraison et retour</option>
                    <option value="Probleme de connexion">Problème de connexion</option>
                    <option value="Autre">Autre</option>

                  </select>

                  <div class="sousdemande flex">
                    <p>Numero de commande</p>
                    <input class="border-white" type="text" name="numcommande" placeholder="Optionnel">


                  </div>

                  <p>Message</p>
                  <textarea style="resize: vertical;" class="border-white" id="message" name="message" required> </textarea>
              </div>
              <div class="center ">
                <button class="submit fontsize" type="submit">Envoyer</button>
              </div>
          </div>
        </div>
        </form>

</div>



</div>
</center>
</section>
</article>



</div>
<?php require "view_begin.php" ?>
<div id="overall">
  <h1 id="connect">CONNEXION</h1>

  <center>
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





          <form method="post" action="?controller=connexion&action=verifMDP">
            <p>IDENTIFIANT</p>
            <input class="border-white" type="text" name="Identifiant" required>

            <p id="margintop">MOT DE PASSE</p>

            <input class="border-white" type="password" name="password" required>
            <small><a href="?controller=mdp_oublie" class="mdp">Mot de passe oublié?</a></small><br>
            <div class="center">
              <button class="submit fontsize" type="submit">SE CONNECTER</button>
            </div>
          </form>
          <a href="?controller=inscription" class="center fontsize">Créer un compte</a>

      </div>



    </div>
  </center>
  <?php require "view_end.php" ?>
  </body>

  </html>
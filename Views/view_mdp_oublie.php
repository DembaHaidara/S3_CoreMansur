<?php require "view_begin.php" ?>
<div id="overall">
  <h1 id="connect">CONNEXION</h1>
  <p>Nous vous ferons parvenir un courriel pour réinitialiser votre mot de passe</p>
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





          <form method="post" action="?controller=mdp_oublie&action=verifEmail">
            <p>COURRIEL</p>
            <input class="border-white" type="text" name="email" required>

            <div class="center">
              <button class="submit fontsize" type="submit">Réinitialisé le mot de passe</button>
            </div>
          </form>
          <a href="?controller=inscription" class="center fontsize">Créer un compte</a>

      </div>



    </div>
  </center>
  <?php require "view_end.php" ?>
  </body>

  </html>
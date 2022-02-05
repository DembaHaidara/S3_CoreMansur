<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title></title>

  <!-- Lien pour la police d'écriture de la globalité du site-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

  <!-- Lien pour les logos -->
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">

  <!-- Lien pour la police d'écriture du footer-->
  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="../Content/css/headerFooter.css">



  <link rel="stylesheet" type="text/css" href="../Content/css/connexion.css">

</head>

<body>

  <div class="navbar">
    <div class="logo">
      <a href="?controller=home">
        <img src="./Content/img/logocore.png" width="100" height="100" /></a>
    </div>


    <div class="menuheader">
      <ul id="MenuItems">
        <a href="?controller=shop">
          <li><i>Shop</i></li>
        </a>

        <a href="?controller=collection">
          <li><i>Collections</i></li>
        </a>
        <a href="?controller=aboutus">
          <li><i><strong>Abous us</strong></i></li>
        </a>
        <a href="Galerie.html">
          <li><i>Galerie</i></li>
        </a>
        <li><i>|| Radio</i></li>
        <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />

          </svg>

        </li>
        <a href="?controller=connexion">
          <li><svg aria-hidden="true" width="16" height="16" focusable="false" role="presentation" class="icon icon-user" viewBox="0 0 64 64">
              <path d="M35 39.84v-2.53c3.3-1.91 6-6.66 6-11.41 0-7.63 0-13.82-9-13.82s-9 6.19-9 13.82c0 4.75 2.7 9.51 6 11.41v2.53c-10.18.85-18 6-18 12.16h42c0-6.19-7.82-11.31-18-12.16z"></path>
            </svg>
        </a>
        </li>
      </ul>
      <i class="fa fa-bars" aria-hidden="true" class="menu_icon" onclick="menutoggle()" alt=""></i>
    </div>
  </div>
  <div id="overall">
    <h1 id="connect">CONNEXION</h1>


    <div class="full">
      <div class="connexion">
        <form method="post" action="?controller=connexion&action=verifMDP">
          <p>COURRIEL</p>
          <input class="border-white" type="text" name="Identifiant">

          <p id="margintop">MOT DE PASSE</p>

          <input class="border-white" type="password" name="password">
          <small><a href="" class="mdp">Mot de passe oublié?</a></small><br>
          <div class="center">
            <button class="submit fontsize" type="submit">SE CONNECTER</button>
          </div>
        </form>
        <a href="?controller=connexion&action=creecompte" class="center fontsize">Créer un compte</a>

      </div>


    </div>

    <?php require "view_end.php" ?>
</body>

</html>
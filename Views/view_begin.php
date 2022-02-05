<!DOCTYPE html>
<html>

<head>


  <title></title>


  <link rel="stylesheet" type="text/css" href="Content/css/<?php

                                                            if (isset($_GET['action'])) {
                                                              echo $_GET['action'];
                                                            } else {
                                                              echo $_GET['controller'];
                                                            }
                                                            ?>.css">

  <link rel="stylesheet" type="text/css" href="./Content/css/headerFooter.css">



  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <!-- Lien pour les logos -->
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">
  <!-- Lien pour la police d'écriture du footer-->
  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">


</head>

<body>

  <!-- partial:index.partial.html -->

  <div class="navbar">
    <div class="logo">
      <a href="?controller=home">
        <img src="./Content/img/logocore.png" width="100" height="100" /></a>
    </div>

    <div class="menuheader">
      <ul id="MenuItems">

        <li> <a href="?controller=shop">
        <li><i>Shop</i></li></a>

        <li> <a href="?controller=collection">
        <li><i>Collection</i></li></a>
        <li><a href="?controller=galerie">
        <li><i>Galerie</i></li></a>
        <li><a href="?controller=aboutus">
        <li><i>About us</i></li></a>
        <li><a href=" https://open.spotify.com/playlist/4TyIK0EMh6L4Dn3N3zp5pf" target="_blank">
        <li><i>Radio</i></li></a>



        <li>
          <i>
            <svg aria-hidden=" true" id="cart" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">

              <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"></path>
            </svg></i>
        </li>


        <li>
          <?php

          if (isset($_SESSION['user'])) {
            if ($_SESSION['user'] !== NULL) {

          ?>

              <a style="font-size: 18px" href="?controller=connexion&action=connecter"><?php echo "<strong>" . $_SESSION['user']['Prenom'] . "</strong>";
                                                                                      } ?></a>

            <?php  } else { ?>
              <a href="?controller=connexion">

                <svg aria-hidden="true" width="16" height="16" focusable="false" role="presentation" class="icon icon-user" viewBox="0 0 64 64">
                  <path d="M35 39.84v-2.53c3.3-1.91 6-6.66 6-11.41 0-7.63 0-13.82-9-13.82s-9 6.19-9 13.82c0 4.75 2.7 9.51 6 11.41v2.53c-10.18.85-18 6-18 12.16h42c0-6.19-7.82-11.31-18-12.16z"></path>
                </svg>
              <?php } ?>
        </li>
        </a>
      </ul>
      <!--end navbar-right -->
      <div class="menu_icon"> <i class="menu_icon fa fa-bars " aria-hidden="true" onclick="menutoggle()" alt=""></i>
      </div>
    </div>
    <!--end container -->
  </div>





  <?php


  $total = 0;
  $nombreProduit = 0;

  if (empty($_SESSION["panier2"])) {
  } else {
    foreach ($_SESSION["panier2"] as $value) {
      $total += $value[0]["prix"];
      $nombreProduit += 1;
    }
  }
  ?>


  <div class="container ">
    <div class="shopping-cart">
      <div class="shopping-cart-header">
        <i class="fa fa-shopping-cart cart-icon"></i><span class="badge"><?= $nombreProduit ?></span>
        <div class="shopping-cart-total">

          <span class="lighter-text">Total:</span>

          <span class="main-color-text"><?= $total ?>€</span>

        </div>
      </div>
      <!--end shopping-cart-header -->

      <ul class="shopping-cart-items">

        <?php


        $x = 0;
        if (empty($_SESSION["panier2"])) {
          echo "Panier Vide";
        } else {
          foreach ($_SESSION["panier2"] as $value) {


        ?>
            <li class="clearfix">

              <div class="imgPanier">
                <img src="<?= $value[0]['file_img']; ?>" alt="item1" />
              </div>
              <div class="cont1">
                <span class="item-name"><?= $value[0]["Nom_Article"]; ?></span>
                <span class="item-price"><?= $value[0]["prix"]; ?>€</span>
                <span class="item-quantity"><?= $value[1]; ?></span>
              </div>
            </li>
        <?php }
        } ?>

        <a href="?controller=panier" class="button">Checkout</a>
    </div>
    <!--end shopping-cart -->
  </div>
  <!--end container -->
  </div>

  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="./Content/js/script.js"></script>
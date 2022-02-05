<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./Content/css/panier.css">




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
        <li><i>Collections</i></li></a>
        <li><a href="?controller=shop&action=galerie">
        <li><i>Galerie</i></li></a>
        <li><a href="https://open.spotify.com/playlist/4TyIK0EMh6L4Dn3N3zp5pf" target="_blank">
        <li><i>|| Radio</i></li></a>
        <li><a href="?controller=aboutus">
        <li><i>About us</i></li></a>


        <li>
          <i>
            <svg aria-hidden="true" id="cart" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">

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

  <!-- partial:index.partial.html -->
  <div id="aaaa">
    <h1>Panier</h1>

    <div class="shopping-cart">

      <div class="column-labels">
        <label class="product-image">Image</label>
        <label class="product-details">Product</label>
        <label class="product-price">Taille</label>
        <label class="product-quantity">Quantité</label>
        <label class="product-removal">Remove</label>
        <label class="product-line-price">Total</label>
      </div>


      <?php

      $total = 0;
      $x = 0;
      foreach ($listPanier as $value) {


        $total += $value[0]["prix"];
      ?>
        <div class="product">
          <div class="product-image">
            <a href="?controller=info_article&id=<?= $value[0]['id_Article']; ?>"> <img src="<?= $value[0]['file_img']; ?>" alt="b"></a>
          </div>
          <div class="product-details">
            <div class="product-title"><a href="?controller=info_article&id=<?= $value[0]['id_Article']; ?>"><?= $value[0]["Nom_Article"]; ?></a></div>
            <p class="product-description"><?= $value[0]["description"]; ?></p>
          </div>
          <div class="product-price"><?= $_SESSION["panier"][$x][1] ?></div>
          <div class="product-quantity">
            1
          </div>
          <div class="product-removal">
            <button class="remove-product">
              <a href="?controller=panier&action=remove_article&id=<?= $value[0]['id_Article'] ?>&taille=<?= $_SESSION["panier"][$x][1] ?>">Remove</a>
            </button>
          </div>
          <div class="product-line-price"><?= $value[0]["prix"]; ?>€</div>
        </div>

      <?php
        $tabNomArticle[] = $value[0]["Nom_Article"];
        $tabIdarticle[] =  $value[0]["id_Article"];
        $tabTaille[] = $_SESSION["panier"][$x][1];
        $x += 1;
      } ?>


      <div class="totals">
        <div class="totals-item">
          <label>Total Article</label>
          <div class="totals-value" id="cart-subtotal"><?= $total ?>€</div>
        </div>
        <div class="totals-item">
          <label>Livraison</label>
          <?php
          if (empty($_SESSION["panier"])) {
            $liv = 0;
          } else {
            $liv = 5;
          }


          ?>
          <div class="totals-value" id="cart-shipping"><?= $liv ?>€</div>
        </div>
        <div class="totals-item totals-item-total">
          <label>Total</label>
          <div class="totals-value" id="cart-total"><?= $total += $liv ?>€</div>
        </div>
      </div>
      <div class="checkout" id="paypal-button-container">
      </div>

    </div>

    <script src="https://www.paypal.com/sdk/js?client-id=Af22s7NKJTGQoQSBp510R_9Spr_bMC2KsX2U_j7XETVggPofX6vukDke5VP6mZQlHjfN-12SS8rL58WO">
    </script>




    <script>
      paypal.Buttons({
        createOrder: function(data, actions) {
          // This function sets up the details of the transaction, including the amount and line item details.
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: <?= $total  ?>
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          // This function captures the funds from the transaction.
          return actions.order.capture().then(function(details) {
            // This function shows a transaction success message to your buyer.
            let nom_article = "<?= implode(',', $tabNomArticle) ?>";
            let id_article = "<?= implode(',', $tabIdarticle) ?>";
            // var e = document.getElementById("taille");
            var taille_article = "<?= implode(',', $tabTaille) ?>";
            let prenom = details.payer.name.given_name;
            let nom = details.payer.name.surname;
            let email = details.payer.email_address;
            let id_payement = details.payer.payer_id;
            let id_marchant = details.purchase_units[0].payee.merchant_id;
            let address1 = details.purchase_units[0].shipping.address.address_line_1;
            let address2 = details.purchase_units[0].shipping.address.admin_area_1;
            let address3 = details.purchase_units[0].shipping.address.admin_area_2;
            let address4 = details.purchase_units[0].shipping.address.admin_area_2;
            let address5 = details.purchase_units[0].shipping.address.country_code;
            let address6 = details.purchase_units[0].shipping.address.postal_code;

            let address = address1 + " " + address2 + " " + address3 + " " + address4 + " " + address5 + " " + address6;






            let info = {
              'id_article': id_article,
              'nom_article': nom_article,
              'prenom': prenom,
              'nom': nom,
              'email': email,
              'id_payement': id_payement,
              'address': address,
              'id_marchant': id_marchant,
              'taille_article': taille_article
            };




            var send = $.post('http://127.0.0.1/eds-www/Inme/back%20end/Views/pannierCommande.php', {
              info
            }, function(donnees) {

              $(".return").html(donnees);

                  
                      document.location.href ='./Views/payementConfirmePanier.php';

            });

          });
        }
      }).render('#paypal-button-container');
    </script>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="./Content/js/panier2.js"></script>

  </div>
  <?php require "view_end.php" ?>
<?php require "view_begin.php" ?>
<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>



<div class="boite">

  <div class="img">
    <img id="image" src="<?= $article['file_img']; ?>">

  </div>

  <div class="boite2">

    <div class="titre">
      <h2>
        <?= $article['Nom_Article'] ?>
      </h2>
    </div>

    <div class="titre2">
      <p> <?= $article['description'] ?></p>
    </div>
    <div class="titre3">
      <p><?= $article['prix'] ?>€
      <p>
    </div>
    <div class="taille">
      <form method="post" action="?controller=panier&action=add_article">

        <p>
          <label for="taille">Taille</label><br />
          <select name="taille" id="taille">
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>

          </select>
        </p>

        <input type="hidden" name="add_Article" value="<?= $_GET["id"] ?>">

        <input type="submit" id="submit" name="" value="Ajouter au Panier">

      </form>

    </div>
  </div>






</div>

<center>

  <div>
    <script src="https://www.paypal.com/sdk/js?client-id=Af22s7NKJTGQoQSBp510R_9Spr_bMC2KsX2U_j7XETVggPofX6vukDke5VP6mZQlHjfN-12SS8rL58WO">
      // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
    </script>

    <div id="paypal-button-container"></div>
  </div>

  <script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: <?= $article['prix'] ?>
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
          // This function shows a transaction success message to your buyer.
          let nom_article = "<?= $article['Nom_Article'] ?>";
          let id_article = "<?= $article['id_Article'] ?>";
          var e = document.getElementById("taille");
          var taille_article = e.options[e.selectedIndex].value;
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
            'nom_article': nom_article,
            'prenom': prenom,
            'nom': nom,
            'email': email,
            'id_payement': id_payement
          };



          document.location.href = "?controller=paypal&nom_article=" + nom_article + "&prenom=" + prenom + "&nom=" + nom + "&email=" + email + "&id_payement=" + id_payement + "&id_article=" + id_article + "&address=" + address + "&id_marchant=" + id_marchant + "&taille_article=" + taille_article + "";





        });
      }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
    function RedirectionJavascript() {

    }
  </script>
</center>

<?php require_once "view_end.php"  ?>




</body>

</html>
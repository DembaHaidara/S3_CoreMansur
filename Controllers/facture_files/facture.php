<?php 

$nom_Client = $_SESSION['facture']['nom']." ".$_SESSION['facture']['prenom'];
$Adresse_client = $_SESSION['facture']['address'];
$Email = $_SESSION['facture']['email'];
$numcommande = $_SESSION['facture']['num_commande'];

?>
<!DOCTYPE html PUBLIC>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body style="font-family:Tahoma;font-size:12px;color: #333333;background-color:#FFFFFF;" data-new-gr-c-s-check-loaded="14.1043.0" data-gr-ext-installed="">
<table align="center" border="0" cellpadding="0" cellspacing="0" style="height:842px; width:595px;font-size:12px;">
  <tbody>
    <tr>
    <td valign="top"><table width="100%" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
          <td valign="bottom" width="50%" height="50"><div align="left"><img src="https://coremansur.000webhostapp.com/Content/img/logocore.png" width="150" height="150"></div><br></td>
          <td width="50%">&nbsp;</td>
        </tr>
      </tbody></table>Destinataire: <br><br>
      <table width="100%" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
        <td valign="top" width="35%" style="font-size:12px;"> <strong><?=$nom_Client?></strong><br> 
Adresse :<?=$Adresse_client?><br>Email : <?=$Email?> 

</td>
        <td valign="top" width="35%">
</td>
        <td valign="top" width="30%" style="font-size:12px;">Date de facturation: <?=$_SESSION['facture']['date']?><br>

    
    
    </td>

      </tr>
    </tbody></table>
    <table width="100%" height="100" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td><div align="center" style="font-size: 14px;font-weight: bold;">N°Commande : <?=$numcommande?> 
          </div></td>
      </tr>
    </tbody></table>
<table width="100%" cellspacing="0" cellpadding="2" border="1" bordercolor="#CCCCCC">
      <tbody><tr>

        <td width="35%" bordercolor="#ccc" bgcolor="#f2f2f2" style="font-size:12px;"><strong>Désignation </strong></td>
        <td bordercolor="#ccc" bgcolor="#f2f2f2" style="font-size:12px;"><strong>Taille</strong></td>
        <td bordercolor="#ccc" bgcolor="#f2f2f2" style="font-size:12px;"><strong>Prix</strong></td>
  
        </tr>
        
         
      <tr style="display:none;"><td colspan="*">

       
          </td></tr><tr>

<td valign="top" style="font-size:12px;"><?=$_SESSION['facture']['nom_article']?></td>
<td valign="top" style="font-size:12px;"><?=$_SESSION['facture']['taille_article']?></td>
<td valign="top" style="font-size:12px;"><?=$_SESSION['facture']['prix']?></td>
 
</tr>
    </tbody></table>
<table width="100%" cellspacing="0" cellpadding="2" border="0">
      <tbody><tr>
        <td style="font-size:12px;width:50%;"><strong> </strong></td>
        <td><table width="100%" cellspacing="0" cellpadding="2" border="0">
  <tbody><tr>
<td align="right" style="font-size:12px;">Total</td>
    <td align="right" style="font-size:12px;"><?=$_SESSION['facture']['prix']?>€</td><td>
  </td></tr>
  <tr>

    <td align="right" style="font-size:12px;"><b>Total TTC</b></td>
    <td align="right" style="font-size:12px;"><b><?=$_SESSION['facture']['prix']?>€</b></td>
  </tr></tbody></table>
</td>
      </tr>
</tbody></table> 

<p>
    <table width="100%" cellspacing="0" cellpadding="2">
      <tbody><tr>
        <td width="33%" style="border-top:double medium #CCCCCC;font-size:12px;" valign="top"><b>Conditions de réglement : </b> Paiement en Ligne<br><br>

</td>
      </tr>
    </tbody></table>


Garantie 2 ans<br>
* Retrouvez tous nos services et conditions sur le site
Merci d'avoir choisi CoreMansur !<br>
Pour effectuer un retour ou bénéficier de votre droit à la rétractation, connectez-vous directement sur votre compte client CoreMansur.
Conformément à l’article 8.1 de nos CGV, vous disposez d’un délai de rétractation de 14 jours calendaires pour retourner les produits ne vous convenant
pas. Ce délai court à compter du jour de la réception du produit, ou du dernier produit livré en cas de commandes de plusieurs produits vendus et
expédiés par CoreMansur.
Ce délai expiré, vous ne disposez plus de ce droit de rétractation.
Lorsque ce délai expire un week-end, jour férié ou chômé, il est prolongé jusqu’au prochain jour ouvrable. Consultez nos CGV à l'adresse
suivante : http://www.rueducommerce.fr/aide/cgv.htm
Les produits de déstockage ou d’occasion sont des produits qui ne sont plus vendus par les circuits classiques de distribution.
Ces produits peuvent provenir de la rétractation d’un client, d’un retour SAV, de lots en fin de série ou d’invendus.
Ces produits connaissent une " deuxième vie " en étant vendus à des prix inférieurs à leur prix de vente traditionnel.
RueDuCommerce - 44-50 Av. du Capitaine Glarner - 93585 Saint-Ouen Cedex
RCS Bobigny B422 797 720 00030 - Code APE 4791B
TVA intracommunautaire FR 26422797720 - S.A.S. au capital de 2 823 837 euros
Intérêt de retard : Taux de base bancaire + 2 points
Notice officielle d’information sur la copie privée disponible à l’adresse : http://www.copieprivee.culture.gouv.fr
Remboursement/exonération de la rémunération pour usage professionnel : Vous avez la possibilité de vous faire rembourser de la rémunération pour
copie privée acquittée à l’occasion de votre achat</p>
   
</body>
</html>
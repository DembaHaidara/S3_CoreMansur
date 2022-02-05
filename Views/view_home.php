<?php



?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./Content/js/main.js" defer></script>
    <link rel="stylesheet" href="./Content/css/home.css" type="text/css">
    <link rel="stylesheet" href="./Content/css/headerFooter.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">


    <!-- Lien pour les logos -->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">
    <!-- Lien pour la police d'écriture du footer-->
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">


    <title>Acceuil</title>
</head>

<body>
    <div class="container">

        <div class="bg">
            <section class="bg1" aria-label="Photos">
                <div class="carousel" data-carousel>
                    <button class="carousel-button prev" data-carousel-button="prev"><i class="fas fa-arrow-right"></i></button>
                    <button class="carousel-button next" data-carousel-button="next"><i class="fas fa-arrow-left"></i></button>
                    <ul data-slides>
                        <li class="slide" data-active>
                            <img src="./Content/img/diapo1.jpg" alt="image1">
                        </li>
                        <li class="slide">
                            <img src="./Content/img/diapo2.jpg" alt="image2">
                        </li>
                        <li class="slide">
                            <img src="./Content/img/diapo3.jpg" alt="image3">
                        </li>
                    </ul>
                </div>
                <div class="navbar head">




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
                            <li><a href="https://open.spotify.com/playlist/4TyIK0EMh6L4Dn3N3zp5pf" target="_blank">
                            <li><i>Radio</i></li></a>



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

                                    <?php } else {
                                    ?>
                                        <a href="?controller=connexion">
                            <li>
                                <svg aria-hidden="true" width="16" height="16" focusable="false" role="presentation" class="icon icon-user" viewBox="0 0 64 64">
                                    <path d="M35 39.84v-2.53c3.3-1.91 6-6.66 6-11.41 0-7.63 0-13.82-9-13.82s-9 6.19-9 13.82c0 4.75 2.7 9.51 6 11.41v2.53c-10.18.85-18 6-18 12.16h42c0-6.19-7.82-11.31-18-12.16z"></path>
                                </svg>
                            </li></a>
                        <?php  } ?>


                        </ul>
                        <div class="menu_icon"> <i class="menu_icon fa fa-bars " aria-hidden="true" onclick="menutoggle()" alt=""></i>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg2">
            </section>

            <div class="placement">
                <div id="padding">
                    <h2>CORE MANSUR MEMBERS CLUB</h2>
                    <form method="post" action="?controller=newlestter&action=envoiMail">

                        <div class="duo">
                            <p>Courriel</p>
                            <input class="border-white" type="email" name="mail" placeholder="E-mail" required />
                            <br>
                            <div>
                                <input class="submit" type="submit" value="S'ABONNER">
                            </div>
                        </div>
                    </form>
                </div>

            </div>



            <?php require_once 'view_end.php'; ?>
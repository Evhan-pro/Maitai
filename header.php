<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <title>Maïtaï</title>
    <?php if(isset($stylesheets)):foreach($stylesheets as $stylesheet): ?>
        <link rel="stylesheet" href=<?php echo($stylesheet) ?>>
    <?php endforeach; endif ?>

    <script>
            jQuery(function(){
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 200 ) { 
                            $('#scrollUp').css('right','10px');
                        } else { 
                            $('#scrollUp').removeAttr( 'style' );
                        }
 
                    });
                });
            });
</script>
</head>
<body>
    <div class="preloader" data-preloader> <!--Ecran de chargement-->
        <div class="circle"></div>
    </div>

    <!--Début Header-->
    <header class="header" data-header>
        <div class="container">

        <div class="home">
        <img src="img/logo.png" alt="Logo entre" width="15%">
        <ul class="menu cf">
            <li class="plongee"><a href="#plongee">Plongée</a></li>
            <li class="gonflage"><a href="#gonflage">Gonflage</a></li>
            <li class="carte"><a href="">Carte</a></li>
            <li class="restaurant"><a href="">Restaurant</a></li>
            <li class="formation"><a href="">Formation</a></li>
            <li class="hebergement"><a href="">Hébergement</a></li>
            <li class="boutique"><a href="">Boutique</a></li>
        </ul>
    </div>

            <button data-nav-toggler data-nav-toggle-btn="Toggle menu"><img class="menu" src="img/burger.png"> <!-- Insertion de l'image menu burger-->

      </button>
            <!--Début navabar-->
            <nav class="navbar" data-navbar>
                <ul class="navbar-list">

                    <li>
                        <a href="index.php" class="navbar-link"><img src="img/icon/hebergement.png" alt=""> Accueil</a>
                    </li>

                    <li>
                        <a href="recette.php" class="navbar-link">Restauration</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link">Plongée</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link">Hébergement</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link">Formation</a>
                    </li>
                    <li>
                        <a href="#" class="navbar-link">Carte</a>
                    </li>
                    <li>
                        <a href="#" class="navbar-link">Boutique</a>
                    </li>

                </ul>
            </nav>
            <!--Fin navabar-->

            <div class="recouvrir" data-nav-toggler data-recouvrir></div>

        </div>
    </header>
<!--Fin Header-->

    <script src="js/script.js"></script>

</body>
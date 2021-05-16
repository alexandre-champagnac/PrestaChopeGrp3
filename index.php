<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== Le site des icons ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--========== Le css ==========-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Prestachope</title>
</head>
<body>

<!--========== La barre du scroll ==========-->
<a href="#" class="scrolltop" id="scroll-top">
    <i class='bx bx-chevron-up scrolltop__icon'></i>
</a>

<!--- Php --->
<?php
    session_name("prestachope3");
    session_start();
    $page = "accueil";
    include_once("tools/SuperControleur.php");
    if (!empty($_GET['page']))
    {
        $page = $_GET['page'];
    }
?>
<!--========== Le header ==========-->
<header class="l-header" id="header">

    <nav class="nav bd-container">
        <a href="#" class="nav__logo">PrestaChope3</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="index.php?page=accueil" class="nav__link active-link">Accueil</a></li>
                <?php
                if($page!= 'connexion' && $page != 'inscription') {
                    if($page == 'accueil'){
                ?>
                        <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                        <li class="nav__item"><a href="index.php?page=contact" class="nav__link">Contact</a></li>

                <?php
                    }
                if(isset($_SESSION['idClient']) && $page != 'compte'){ ?>
                    <li class="nav__item"><a href="index.php?page=compte" class="nav__link">Modifier Profil</a></li>
                <?php }
                if(!isset($_SESSION['idClient']) && $page != 'inscription'){ ?>
                    <li class="nav__item"><a href="index.php?page=connexion" class="nav__link">Connexion</a></li>
                    <li class="nav__item"><a href="index.php?page=inscription" class="nav__link">Inscription</a></li>
                <?php }
                if(isset($_SESSION['idClient'])){ ?>
                    <li class="nav__item"><a href="index.php?page=deconnexion" class="nav__link">Deconnexion</a></li>
                <?php }
                if(isset($_SESSION['idClient'])){ ?>
                    <li class="nav__item"><a href="index.php?page=panier" class="nav__link">Panier</a></li>
                <?php }
                if(!empty($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == 1){ ?>
                    <li class="nav__item"><a href="index.php?page=admin" class="nav__link">espace Admin</a></li>
                <?php }} ?>


                <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
            </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
</header>

<?php
    SuperControleur::callPage($page);
?>

<!--==========  ==========-->
<?php if($page != 'inscription'){ ?>
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">PrestaChope</a>
                <span class="footer__description">Restaurant</span>
                <div>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Services</h3>
                <ul>
                    <li><a href="#" class="footer__link">Livraison</a></li>
                    <li><a href="#" class="footer__link">Prix</a></li>
                    <li><a href="#" class="footer__link">Repas rapide</a></li>
                    <li><a href="#" class="footer__link">Reserve une table</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Information</h3>
                <ul>
                    <li><a href="#" class="footer__link">Evenements</a></li>
                    <li><a href="#" class="footer__link">Nous contactez</a></li>
                    <li><a href="#" class="footer__link">Terms of services</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Adresse</h3>
                <ul>
                    <li>Nantes - France</li>
                    <li>PrestaChopeStaf</li>
                    <li>06 00 00 00 00</li>
                    <li>prestachoped@gmail..com</li>
                </ul>
            </div>
        </div>

        <p class="footer__copy">&#169; 2021 Prestachoppe</p>
</footer>
<?php } ?>

<!--========== Le reveal du scroll ==========-->
<script src="https://unpkg.com/scrollreveal"></script>

<!--========== Import javascript ==========-->
<script src="assets/js/main.js"></script>
</body>
</html>
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

<!--========== Le header ==========-->
<header class="l-header" id="header">


    <nav class="nav bd-container">
        <a href="#" class="nav__logo">PrestaChope3</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="#home" class="nav__link active-link">Accueil</a></li>
                <li class="nav__item"><a href="#about" class="nav__link">A propos</a></li>
                <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                <li class="nav__item"><a href="index.php?page=connexion" class="nav__link">Connexion</a></li>
                <li class="nav__item"><a href="index.php?page=deconnexion" class="nav__link">Deconnexion</a></li>


                <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
            </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
</header>

<main class="l-main">
    <!--========== Accueil ==========-->
    <section class="home" id="home">
        <div class="home__container bd-container bd-grid">
            <div class="home__data">
                <h1 class="home__title">Prestachope</h1>
                <h2 class="home__subtitle">Le bar de votre <br> commune</h2>
                <a href="#" class="button">Voir le menu</a>
            </div>

            <img src="assets/img/logo_Prestachoppe.png" alt="" class="home__img">
        </div>
    </section>

    <!--========== A propos ==========-->
    <section class="about section bd-container" id="about">
        <div class="about__container  bd-grid">
            <div class="about__data">
                <span class="section-subtitle about__initial">A propos</span>
                <h2 class="section-title about__initial">Nous sommes un petit <br> bar à bières</h2>
                <p class="about__description">installez dans la commune de Nantes</p>
                <a href="#" class="button">En savoir plus</a>
            </div>

            <img src="assets/img/about.jpg" alt="" class="about__img">
        </div>
    </section>

    <!--========== Services ==========-->
    <section class="services section bd-container" id="services">
        <span class="section-subtitle">Nos offres</span>
        <h2 class="section-title">Découvrez nos services</h2>

        <div class="services__container  bd-grid">
            <div class="services__content">

                <h3 class="services__title">Services</h3>
                <p class="services__description">Nous proposons à nos clients un service de qualité tout au long de la journée</p>
            </div>

            <div class="services__content">

                <h3 class="services__title">Preparation rapide</h3>
                <p class="services__description">Nous garantissons une préparation rapide de vos commandes</p>
            </div>

            <div class="services__content">

                <h3 class="services__title">Livraison</h3>
                <p class="services__description">Nous proposons une option de livraison à tous nos clients.</p>
            </div>
        </div>
    </section>


    <section class="menu section bd-container" id="menu">
        <span class="section-subtitle">Special</span>
        <h2 class="section-title">Menu de la semaine</h2>

        <div class="menu__container bd-grid">
            <div class="menu__content">
                <img src="assets/img/plate1.png" alt="" class="menu__img">
                <h3 class="menu__name">Salade 1</h3>
                <span class="menu__detail">Desc</span>
                <span class="menu__preci">$22.00</span>
                <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
            </div>

            <div class="menu__content">
                <img src="assets/img/plate2.png" alt="" class="menu__img">
                <h3 class="menu__name">Salade 2</h3>
                <span class="menu__detail">Desc</span>
                <span class="menu__preci">$12.00</span>
                <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
            </div>

            <div class="menu__content">
                <img src="assets/img/plate3.png" alt="" class="menu__img">
                <h3 class="menu__name">Salade 3</h3>
                <span class="menu__detail">Desc</span>
                <span class="menu__preci">$9.50</span>
                <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
            </div>
        </div>
    </section>

    <!--===== Section application =======-->
    <section class="app section bd-container">
        <div class="app__container bd-grid">
            <div class="app__data">
                <span class="section-subtitle app__initial">Application</span>
                <h2 class="section-title app__initial">L'application de notre restaurant</h2>
                <p class="app__description">Telechargez notre application :</p>
                <div class="app__stores">
                    <a href="#"><img src="assets/img/app1.png" alt="" class="app__store"></a>
                    <a href="#"><img src="assets/img/app2.png" alt="" class="app__store"></a>
                </div>
            </div>

            <img src="assets/img/movil-app.png" alt="" class="app__img">
        </div>
    </section>

    <!--========== Nous contacter ==========-->
    <section class="contact section bd-container" id="contact">
        <div class="contact__container bd-grid">
            <div class="contact__data">
                <span class="section-subtitle contact__initial">Discuton</span>
                <h2 class="section-title contact__initial">Nous contacter</h2>
                <p class="contact__description">Pour nous contacter et obtenir des informations supplémentaires</p>
            </div>

            <div class="contact__button">
                <a href="#" class="button">Nous contacter</a>
            </div>
        </div>
    </section>
</main>

<!--==========  ==========-->
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

<!--========== Le reveal du scroll ==========-->
<script src="https://unpkg.com/scrollreveal"></script>

<!--========== Import javascript ==========-->
<script src="assets/js/main.js"></script>
</body>
</html>
<main class="l-main">
    <!--========== Accueil ==========-->
    <section class="home" id="home">
        <div class="home__container bd-container bd-grid">
            <div class="home__data">
                <h1 class="home__title">Prestachope</h1>
                <h2 class="home__subtitle">Le bar de votre <br> commune</h2>
                <a href="#menu" class="button">Voir le menu</a>
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
                <p>Ouvert de 8h à 18h du lundi au vendredi</p>
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
    <div class="categorie">
        <div>
            <p>Lister par catégorie :</p>
                <?php
                    $categories = CategorieDAO::getCategorie();
                    foreach ($categories as $values){ ?>
                        <p><a href="index.php?page=accueil&id=<?php echo $values->getIdCategorie();?>"><?php echo $values->getNom(); ?></a></p>
                <?php } ?>
        </div>
        <section class="menu section bd-container" id="menu">
            <span class="section-subtitle">Special</span>
            <h2 class="section-title">Menu de la semaine</h2>
            <div class="menu__container bd-grid">
            <?php
            if(empty($_GET['id'])) {
                $produits = ControllerAccueil::produit();
            }else{
                $produits = ProduitDAO::produitCategorie($_GET['id']);
            }
            if($produits != null ){
                foreach ($produits as $value){
                    if($value->getQuantité() > 0){ ?>

                            <div class="menu__content">
                                <img src="<?php echo $value->getPhoto(); ?>" alt="" class="menu__img">
                                <h3 class="menu__name"><?php echo $value->getNomProduit(); ?> </h3>
                                <span class="menu__detail"><?php echo $value->getDescription();?></span>
                                <span class="menu__preci"> <?php echo $value->getPrix(); ?>€</span>
                                <a href="index.php?page=voirProduit&id=<?php echo $value->getIdProduit() ; ?>" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                            </div>
            <?php }}}else{ ?><h3>Il n'y a pas encore de produits ici pour le moment</h3>    <?php } ?>
            </div>
        </section>
    </div>

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
                <a href="index.php?page=contact" class="button">Nous contacter</a>
            </div>
        </div>
    </section>
</main>
<main class="l-main">
    <!--========== Accueil ==========-->
    <section class="menu section bd-container" id="menu">
        <span class="section-subtitle">Special</span>
        <h2 class="section-title">Menu de la semaine</h2>
        <div class="menu__container bd-grid">
            <?php $produits = ControllerVoirProduit::produit();
            foreach ($produits as $value){
                if($value->getQuantité() > 0){ ?>

                    <div class="menu__content">
                        <img src="<?php echo $value->getPhoto(); ?>" alt="" class="menu__img">
                        <h3 class="menu__name"><?php echo $value->getNomProduit(); ?> </h3>
                        <span class="menu__detail">Desc</span>
                        <span class="menu__preci"> <?php echo $value->getPrix(); ?>€</span>
                        <a href="index.php?page=voirProduit&id=<?php echo $value->getIdProduit() ; ?>" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>

                <?php }} ?>
        </div>
    </section>
</main>

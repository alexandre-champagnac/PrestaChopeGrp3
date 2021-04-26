<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Accueil</title>

</head>
    <body>
        <div class="listProduits">
            <?php
            include_once "pages/accueil/ControllerAccueil.php";
            include_once "DTO/ProduitDTO.php";
            $produits = ControllerAccueil::produit();
            foreach ($produits as $value){
                if($value->getQuantité() > 0){ ?>
                    <div class="produit">
                        <h3> <?php echo $value->getNomProduit() ?></h3>
                        <img class="photo" src="<?php echo $value->getPhoto() ?>" alt="">
                        <h3><?php echo $value->getPrix() ?></h3>
                        <button onclick="document.location.href='index.php?page=voirProduit'" class="button">voir le produit</button>
                    </div>
            <?php }} ?>
        </div>
    </body>
</html>
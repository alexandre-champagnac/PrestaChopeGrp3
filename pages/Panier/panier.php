<!DOCTYPE html>
<html>
<head>
    <title>PrestaChoppe - Panier</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style_panier.css">-->
</head>
<body>
<!--PHP-->
<?php
include_once "DAO/ProduitDAO.php";
?>
<!--Fin-->

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">Panier</div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Produits Selectionés</h2>
                    <?php
                    $total = 0;
                        foreach ($_SESSION['panier'] as $value){;
                            $produit = ProduitDAO::getProduitById($value[0]);?>
                            <img  src="<?php echo $produit->getPhoto(); ?>" alt=""/>
                            <p href="">X</p>
                            <h4> <?php echo $produit->getNomProduit(); ?></h4>
                            <p class="ParaPrix"><?php echo $produit->getPrix() ."X". $value[1];?></p>

                        <?php $total += $produit->getPrix() * $value[1]; } ?>
                    <p>Total : <?php echo $total; ?></p>
                    <button><a href="">Commander maintenant !</a></button>
                </div>
            </div>
        </div>
    </div>

</body>





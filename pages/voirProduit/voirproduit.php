<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale 1">
    <title>Produit</title>
    <link rel="stylesheet" href="assets/css/style_voirproduit.css">
</head>
<!--- Php --->
<?php
include_once "DAO/ProduitDAO.php";
$produit = ProduitDAO::getProduitById($_GET['id']);
?>
<main class="page">

    <div class="produitContainer">
        <h4 class="titreProduit"><?php echo $produit->getNomProduit(); ?></h4>
        <div class="imgProduit">
            <img  src="<?php echo $produit->getPhoto() ?>" alt=""/>
        </div>
        <div class="AlignPanier">
            <div class="prix">
                <p>Prix :</p>
                <p class="ParaPrix"><?php echo $produit->getPrix(); ?></p>
            </div>
            <button class="ajoutpanier"><a href=""> ajouter au pannier </a></button>
        </div>
        <div>
            <p>Information sur le produit :</p><br>
            <p><?php echo $produit->getDescription(); ?></p>
        </div>
    </div>


</main>


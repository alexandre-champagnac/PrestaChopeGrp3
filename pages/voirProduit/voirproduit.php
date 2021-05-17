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
            <img src="<?php echo $produit->getPhoto() ?>" alt=""/>
        </div>
        <div class="AlignPanier">
            <div class="prix">
                <p>Prix :</p>
                <p class="ParaPrix"><?php echo $produit->getPrix(); ?> €</p>
            </div>
        </div>
        <div>
            <p>Information sur le produit :</p><br>
            <p><?php echo $produit->getDescription(); ?></p>
        </div>
    </div>
    <?php  if(!empty($_SESSION['idClient']) && $_SESSION['isAdmin'] == 0){ ?>
    <form method="post" action="index.php?page=ajoutproduit">
        <input type="hidden" name="id" value="<?php echo $produit->getIdProduit() ;?>">
        <input type="number" min="1" max="<?php echo $produit->getQuantité(); ?>" name="quantite" placeholder="quantité">
        <input type="submit" value="Ajouter au panier">
    </form>
    <?php }if (!empty($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == 1){ ?>
        <button><a href="index.php?page=modifier&id=<?php echo $produit->getIdProduit(); ?>">modifier le produit</a></button>
    <?php } ?>


</main>


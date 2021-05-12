

<!DOCTYPE html>
<html>
<head>
    <title>PrestaChoppe - Panier</title>
    <link rel="stylesheet" href="assets/css/style_panier.css">
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
                            <button><a href="index.php?page=supprPanier">supprimer</a></button>
                            <h4> <?php echo $produit->getNomProduit(); ?></h4>
                            <p class="ParaPrix"><?php echo $produit->getPrix() ."X". $value[1];?></p>
                    <?php }if(!empty($_SESSION['panier'])){ $total += $produit->getPrix() * $value[1];?>
                        <p>Total : <?php echo $total; ?> </p>
                        <button><a href="index.php?page=commander">Commander maintenant !</a></button>
                    <?php }
                    else{ echo "Votre panier est vide"; } ?>
                </div>
            </div>
        </div>
    </div>


    <h1>Panier - Prestachoppe</h1>
<table class="content-table">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Quantite</th>
            <th>Prix</th>
        </tr>
    </thead>
    <tbody>
    <?php /*

    foreach ($_SESSION['panier'] as $ligne)
    {
        $nom_Prod  = ControlleurPanier::getNom($ligne[0]);
        $prix = ControlleurPanier::getPrix($ligne[0]);
        $quantite = $ligne[1];

        ?><tr>
        <td><?php echo $nom_Prod;?></td>
        <td><?php echo $quantite;?></td>
        <td><?php echo $prix; ?></td>
        </tr>
        <?php
    } */
    ?>
    </tbody>
</table>
</body>





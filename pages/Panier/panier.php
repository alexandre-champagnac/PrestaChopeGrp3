

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
    <h1>Panier - Prestachoppe</h1>
<table class="content-table">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Quantite</th>
            <th>Prix</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $total = 0;
    foreach ($_SESSION['panier'] as $ligne)
    {
        $nom_Prod  = ControlleurPanier::getNom($ligne[0]);
        $prix = ControlleurPanier::getPrix($ligne[0]);
        $quantite = $ligne[1];
        $somme = $quantite * $prix;
        $total += $somme;

        ?><tr>
        <td><?php echo $nom_Prod;?></td>
        <td><?php echo $quantite;?></td>
        <td><?php echo $prix. '€';?></td>
        <td><?php echo $somme. '€';?></td>
        </tr>
        <?php

    }
    ?>
    <tr>
        <td>Prix total à payer :</td>
        <td><?php echo $total. '€'; ?></td>
        <td><button><a href="index.php?page=commander">Commander</a></button></td>

    </tr>
    </tbody>
</table>
</body>





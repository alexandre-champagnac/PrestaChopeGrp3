

<!DOCTYPE html>
<html>
<head>
    <title>PrestaChoppe - Panier</title>
    <link rel="stylesheet" href="assets/css/style_panier.css">
</head>
<body>
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
    <?php

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
    }
    ?>
    </tbody>
</table>
</body>





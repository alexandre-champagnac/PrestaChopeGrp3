<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale 1">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>addProduit   </title>
</head>
<div class="addProduit">
<body>

    <form action="index.php?page=actAjoutProd" method="post">

        <input type="file" name="importation">

        <h5>Nom du produit :</h5>
            <input type="text" class="input" name="nomProduit">

        <h5>Prix du produit :</h5>
            <input type="number" class="input" name="prixProduit">

        <h5>Stock :</h5>
        <input type="number" class="input" name="quantiteProduit">

        <h5>Description du produit :</h5>
        <textarea class="area" name="descProduit"></textarea>

        <h5>Selectioner la categories :</h5>

        <SELECT name="idCategorie" size="1">
            <OPTION hidden>Catégorie</OPTION>
            <?php
            $listeCategorie = controllerAddProduit::listeCategorie();
            foreach ($listeCategorie as $value) { ?>
            <OPTION value="<?php echo $value['idCategorie']; ?>"> <?php  echo $value['nom'] ;?> </OPTION>
            <?php } ?>
        </SELECT>
        <input type="submit" class="btn" value="OK">

    </form>
</div>
</body>
</html>
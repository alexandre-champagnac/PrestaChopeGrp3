<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale 1">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>addProduit   </title>
</head>
<div class="addProduit">
    <h4>Nom des categorie</h4>
    <?php
    $listeCategorie = controllerAddProduit::listeCategorie();
    foreach ($listeCategorie as $value)
    {

        echo $value['idCategorie']." ". $value['nom']."</br>";
    }
    ?>
<body>
    <form action="index.php?page=addProduit" method="post">

        <h5>Nom du produit</h5>
            <input type="text" class="input" name="nomProduit">

        <h5>Prix du produit</h5>
            <input type="text" class="input" name="prixProduit">

        <h5>Qunatite du produit</h5>
        <input type="text" class="input" name="quantiteProduit">

        <h5>Description du produit</h5>
        <input type="text" class="input" name="descProduit">

        <h5>Selectioner la categories</h5>
        <SELECT name="idCategorie" size="1">
            <?php
            $listeCategorie = controllerAddProduit::listeCategorie();
            foreach ($listeCategorie as $value)
            {
                ?>
                <OPTION> <?php echo $value['idCategorie'];
            }
            ?>
        </SELECT>
        <input type="submit" class="btn" value="OK">

    </form>
</div>
</body>
</html>
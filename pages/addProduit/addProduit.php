<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale 1">
    <title>addProduit   </title>
</head>

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

        <input type="submit" class="btn" value="OK">

    </form>
</body>
</html>
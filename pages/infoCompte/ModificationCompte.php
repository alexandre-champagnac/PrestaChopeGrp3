<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="">
</head>
<body>

<form action="index.php?page=compte" method="post">
    <div>
        <label for="pseudo">Modifier votre pseudo:</label>
        <input type="text" id="pseudo" name="pseudo" value="<?php ClientDTO::getPseudo(); ?>">

        <label for="password">Modifier votre Mots de Passe:</label>
        <input type="password" id="mdp" name="mdp">

        <label for="nom">Modifier votre Nom</label>
        <input type="text" id="nom" name="nom">

        <label for="Prenom">Modifier votre Prenom</label>
        <input type="text" id="Prenom" name="Prenom">

        <label for="adresse">Modifier votre adresse</label>
        <input type="text" id="adresse" name="adresse">

        <label for="mail">Modifier votre mail</label>
        <input type="text" id="mail" name="mail">

        <p><input type="submit" value="OK"></p>
    </div>
</form>
</body>
</html>

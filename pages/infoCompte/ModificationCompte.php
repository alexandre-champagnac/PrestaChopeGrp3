<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="">
</head>
<body>
<?php
include_once 'DAO/ClientDAO.php';
include_once 'DTO/ClientDTO.php';
$client = ClientDAO::getInfos($_SESSION['pseudo'],$_SESSION['mdp']);
?>
<form action="index.php?page=compte" method="post">
    <div>
        <label for="pseudo">Modifier votre pseudo:</label>
        <input type="text" id="pseudo" name="pseudo" value="<?php echo $client->getPseudo(); ?>"/>

        <label for="password">Modifier votre Mots de Passe:</label>
        <input type="password" id="mdp" name="mdp" value="<?php echo $client->getPassword(); ?>"/>

        <label for="nom">Modifier votre Nom</label>
        <input type="text" id="nom" name="nom" value="<?php echo $client->getNom(); ?>"/>

        <label for="Prenom">Modifier votre Prenom</label>
        <input type="text" id="Prenom" name="Prenom" value="<?php echo $client->getPrenom(); ?>"/>

        <label for="adresse">Modifier votre adresse</label>
        <input type="text" id="adresse" name="adresse" value="<?php echo $client->getAdresse(); ?>"/>

        <label for="mail">Modifier votre mail</label>
        <input type="text" id="mail" name="mail" value="<?php echo $client->getMail(); ?>"/>

        <p><input type="submit" value="OK"></p>
    </div>
</form>
</body>
</html>

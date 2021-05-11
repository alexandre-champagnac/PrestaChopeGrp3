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
$client = ClientDAO::getInfos($_SESSION['idClient']);
?>
<p style="margin-top: 5rem">MODIFIER VOTRE COMPTE : </p>
<form action="index.php?page=modifcompte" method="post">
    <div style="display: flex; flex-direction: column">

        <label for="nom">Modifier votre Nom</label>
        <input type="text" id="nom" name="nom" minlength="3" value="<?php echo $client->getNom(); ?>"/>

        <label for="Prenom">Modifier votre Prenom</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $client->getPrenom(); ?>"/>

        <label for="adresse">Modifier votre adresse</label>
        <input type="text" id="adresse" name="adresse" value="<?php echo $client->getAdresse(); ?>"/>

        <label for="mail">Modifier votre mail</label>
        <input type="text" id="mail" name="mail" value="<?php echo $client->getMail(); ?>"/>

        <p><input type="submit" value="OK"></p>
    </div>
</form>
</body>
</html>

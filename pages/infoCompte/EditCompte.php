<?php
include_once 'DAO/ClientDAO.php';
include_once 'DTO/ClientDTO.php';
$client = ClientDAO::getInfos($_SESSION['idClient']);
?>

<!DOCTYPE html>
<html>
<head>
        <title>Profil</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style_compte.css">
</head>
<body>
    <center>
        <form action="index.php?page=modifcompte" method="post">
            <div class="box">

                <label for="nom">Modifier votre Nom :</label>
                <input type="text" id="nom" name="nom" minlength="3" value="<?php echo $client->getNom(); ?>"/>

                <label for="Prenom">Modifier votre Prenom :</label>
                <input type="text" id="prenom" name="prenom" value="<?php echo $client->getPrenom(); ?>"/>

                <label for="adresse">Modifier votre Adresse :</label>
                <input type="text" id="adresse" name="adresse" value="<?php echo $client->getAdresse(); ?>"/>

                <label for="mail">Modifier votre Mail :</label>
                <input type="text" id="mail" name="mail" value="<?php echo $client->getMail(); ?>"/>

                <label for="pseudo">Modifier votre Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" value="<?php echo $client->getPseudo(); ?>"/>

                <label for="password">Nouveau MDP</label>
                <input type="password" id="password" name="password"/>

                <label for="password">Confirmer MDP</label>
                <input type="password" id="newpassword" name="newpassword"/>

                <input type="submit"  class="submitbutton" value="OK">
            </div>
    </center>
</body>
</html>
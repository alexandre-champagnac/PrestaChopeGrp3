<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale 1">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>addProduit   </title>
</head>
    <body>
        <div class="listeUser">
            <h2>
            <?php
            echo "Liste des utilisateur"."</br>"."</br>";?>
            </h2>
            <div style="display: flex; flex-direction: column;">
            <?php
                $listeUser = ControllerListeUser::listeUser();
                foreach ($listeUser as $value) { ?>
                    <div style="display: flex;margin-bottom: 15px ">
                        <h3><?php echo $value['pseudo'].'</br>'; ?></h3>
                        <button style="margin-left: 1rem "><a href="index.php?page=supprCompte&id=<?php echo $value['idClient']; ?>">Supprimer</a></button>
                    </div>
                        <?php } ?>

            </div>
        </div>
    </body>
</html>
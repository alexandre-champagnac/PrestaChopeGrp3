<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale 1">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>addProduit   </title>
</head>
    <body>
        <div class="margin_top">
            <h2>
            <?php
            echo "Liste des utilisateur"."</br>"."</br>";?>
            </h2>
            <?php
                $listeUser = ControllerListeUser::listeUser();
                foreach ($listeUser as $value)
                {
                    echo $value['pseudo'].'</br>';

                }
                ?>
        </div>
    </body>
</html>
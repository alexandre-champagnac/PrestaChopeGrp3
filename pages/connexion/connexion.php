<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale 1">
    <title>Connexion</title>
    <link rel="stylesheet" href="assets/css/style_login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
    <img class="wave" src="assets/img/wave.png" alt="">
    <div class="container">
        <div class="img">
            <img src="assets/img/drink.svg" alt="">
        </div>
        <div class="loginform-container">
            <form action="index.php?page=connexion" method="post">
                <img src="assets/img/logo_Prestachoppe.png" alt="" class="avatar">
                <h2>Bienvenue !</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Pseudo</h5>
                        <input type="text" class="input" name="pseudo">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Mot de passe</h5>
                        <input type="password" class="input" name="mdp">
                    </div>
                </div>
                <a href="index?page=inscription">Pas encore inscrit ?</a>
                <input type="submit" class="btn" value="OK">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/login.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Prestachope</title>
</head>
<body>
<header>
    <div class="banniere">
        <p>prestachope</p>
        <?php
        session_start();
	        $page = "accueil";
	        include_once("tools/SuperControleur.php");
	        if (!empty($_GET['page'])) {
	            $page = $_GET['page'];
	        }
	        if((!isset($_SESSION['pseudo']) && $page!='connexion' && $page != 'inscription')){
	            ?>
	            <button onclick="document.location.href='index.php?page=connexion'" class="button">se connecter</button>
	            <button onclick="document.location.href='index.php?page=inscription'" class="button">s'inscrire</button>
	            <?php
	        }
	        if(isset($_SESSION['pseudo'])){ ?>
	            <button onclick="document.location.href='index.php?page=deconnexion'" class="button">se deconnecter</button>
                <?php if($page != 'compte'){ ?>
                    <button onclick="document.location.href='index.php?page=compte'" class="button">Modifier Votre Compte</button>
	            <?php
                }
	        }
	        if ($page != 'accueil'){ ?>
                <button onclick="document.location.href='index.php?page=accueil'" class="button">accueil</button>
            <?php } ?>
    </div>
</header>
<main>
    <?php
        SuperControleur::callPage($page);
    ?>
</main>
<footer>

</footer>
</body>
</html>
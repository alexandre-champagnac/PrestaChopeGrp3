<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Prestachope</title>
</head>
<body>
<header>
    <div class="banniere">
        <p>prestachope</p>
        <?php
        session_start();
	        $page = "connexion";
		    include_once("tools/SuperControleur.php");
		    if(!empty($_GET['page']))
		    {
		        $page = $_GET['page'];
		    }
	        $page = "connexion";
	        include_once("tools/SuperControleur.php");
	        if (!empty($_GET['page'])) {
	            $page = $_GET['page'];
	        }
	        if((!isset($_SESSION['pseudo']) && $page!='connexion')){
	            ?>
	            <button href="" class="button">se connecter</button>
	            <button href="" class="button">s'inscrire</button>
	            <?php
	        }
	        elseif(isset($_SESSION['pseudo'])){ ?>
	            <button onclick="document.location.href='index.php?page=deconnexion'" class="button">se deconnecter</button>
                <button onclick="document.location.href='index.php?page=compte'" class="button">Modifier Votre Compte</button>
	            <?php
	        }
        ?>
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
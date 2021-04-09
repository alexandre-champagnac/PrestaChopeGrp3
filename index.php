<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>World Bounty Hunters Agency</title>
</head>
<body>
<header>
    <div class="banniere">
        <img class="" src="" alt=""/>
        <?php
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
	            <button href="" class="button">se deconnecter</button>
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
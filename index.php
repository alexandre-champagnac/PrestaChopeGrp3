<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>World Bounty Hunters Agency</title>
	</head>
	<body>

<?php
	include_once("tools/SuperControleur.php");
    $page = "connexion";

  	if(!empty($_GET['page'])) {
		$page = $_GET['page'];
	}


  	SuperControleur::callPage($page);


?>



	</body>
</html>
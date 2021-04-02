<?php

include_once('tools/DatabaseLinker.php');
include_once('DAO/DatabaseUserDAO.php');

class ControleurConnexionr{



    public function includeView(){

        include_once('pages/connexion/view/login.php');

    }

    public static function authenticate($username, $password){

        //le DAO est pas encore créer, lenaig fait les redirections (les include_once);
        $user = ClientDAO::getUser($username, $password);
        if($user != null){
            $_SESSION['pseudo'] = $user -> getUserPseudo();

            //if isset de _session pseudo = connecté

            return true;
        }

        return false;

    }

    public function redirectUser(){

        header("Location: index.php?page=viewArticle");
    }

}

?>
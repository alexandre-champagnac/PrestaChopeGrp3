<?php
include_once "DAO/ClientDAO.php";
class ControlleurInscription
{
    public function includeView()
    {
        include_once "pages/inscription/inscription.php";
    }

    public function register($prenom, $nom, $pseudo, $password, $mail, $adresse){
        ClientDAO::register($prenom, $nom, $pseudo, $password, $mail, $adresse);
    }
}
<?php
include_once "DAO/ClientDAO.php";

class ControllerListeUser
{
    public function includeView()
    {
        include_once "pages/ListeUser/ListeUser.php";
    }
    public function listeUser(){
       return ClientDAO::listeUser();
    }
}
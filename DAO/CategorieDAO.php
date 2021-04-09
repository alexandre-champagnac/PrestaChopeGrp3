<?php

include_once 'DTO/CategorieDTO.php';

class CategorieDAO
{
    public function insertCategorie($categorie){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('INSERT INTO categorie(nom) VALUE(?)');
        $reponse->execute(array($categorie));
    }
}
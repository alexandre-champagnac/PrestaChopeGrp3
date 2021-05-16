<?php

include_once 'DTO/CategorieDTO.php';
include_once "tools/DatabaseLinker.php";
class CategorieDAO
{
    public function insertCategorie($categorie){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('INSERT INTO categorie(nom) VALUE(?)');
        $reponse->execute(array($categorie));
    }
    public static function getCategorie(){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare("SELECT * FROM Categorie");
        $reponse->execute(array());
        $result = $reponse->fetchAll();
        $tabCategories = array();
        foreach ($result as $ligne){
            $tabCategories[]= new CategorieDTO($ligne['idCategorie'],$ligne['nom']);
        }
        return $tabCategories;
    }

    public static function categorie(){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare("SELECT * FROM Categorie");
        $reponse->execute(array());
        $result = $reponse->fetchAll();
       return $result;}
}
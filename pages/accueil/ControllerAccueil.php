<?php
include_once "DAO/ProduitDAO.php";
include_once "DAO/CategorieDAO.php";
class ControllerAccueil
{
    public function includeview(){
        include_once "pages/accueil/accueil.php";
    }
    public static function produit(){
        $tabProduit = ProduitDAO::allProduit();
        return $tabProduit;
    }
}
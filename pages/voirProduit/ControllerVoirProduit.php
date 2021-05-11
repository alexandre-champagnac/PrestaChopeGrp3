<?php


class ControllerVoirProduit{

    public function includeview(){
        include_once "pages/voirProduit/voirproduit.php";
    }

    public function getProduitById($id){
        $produit = ProduitDAO::getProduitById($id);
        return $produit;
    }
}
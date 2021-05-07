<?php


class ControllerVoirProduit{

    public function includeview(){
        include_once "pages/voirProduit/voirproduit.php";
    }

    public function getProduitById($id){
        ProduitDAO::getProduitById($id);
    }
}
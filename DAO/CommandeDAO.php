<?php
include_once "tools/DatabaseLinker.php";
include_once "DAO/ProduitDAO.php";

class CommandeDAO
{
    public function commander($panier){
        $nbproduit= count($panier);
        $montantTotal = 0;
        for($i = 0 ; $i < count($panier);$i++){
            $produit = ProduitDAO::getProduitById($panier[0]);
            $montantTotal = $produit->getPrix() + $panier[1];
        }
        $bdd = DatabaseLinker::getConnexion();
        $
    }
}
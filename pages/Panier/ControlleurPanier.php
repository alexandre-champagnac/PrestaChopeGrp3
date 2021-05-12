<?php
require "DAO/ProduitDAO.php";

class ControlleurPanier
{
    public function includeView()
    {
        include_once "pages/Panier/panier.php";
    }

    public static function getNom($id)
    {
        $produit = ProduitDAO::getProduitById($id);
        $nom = $produit->getNomProduit();
        return $nom;
    }

    public static function getPrix($id)
    {
        $prix1 = ProduitDAO::getProduitById($id);
        $prix = $prix1->getPrix();
        return $prix;
    }








}
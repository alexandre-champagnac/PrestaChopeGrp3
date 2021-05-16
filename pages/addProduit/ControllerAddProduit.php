<?php
include_once "DAO/ProduitDAO.php";
include_once "DAO/CategorieDAO.php";

class controllerAddProduit
{
    public function includeView()
    {
        include_once "pages/addProduit/addProduit.php";
    }


    public function addProduit($nom,$prix,$quantite,$desc,$idCategorie,$image)
    {
        ProduitDAO::addProduit($nom,$prix,$quantite,$desc,$idCategorie,$image);
    }
    public function listeCategorie()
    {
        return CategorieDAO::categorie();
    }


    public function redirectUser()
    {
        header("Location:index.php?page=accueil");
    }
}
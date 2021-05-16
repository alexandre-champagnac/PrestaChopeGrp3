<?php
include_once "DAO/ProduitDAO.php";

class controllerAddProduit
{
    public function includeView()
    {
        include_once "pages/addProduit/addProduit.php";
    }


    public function addProduit($nom,$prix,$quantite,$desc)
    {
        ProduitDAO::addProduit($nom,$prix,$quantite,$desc);
    }


    public function redirectUser()
    {
        header("Location:index.php?page=accueil");
    }
}
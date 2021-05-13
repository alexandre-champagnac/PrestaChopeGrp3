<?php
include_once "tools/DatabaseLinker.php";
include_once "DAO/ProduitDAO.php";

class CommandeDAO
{
    public static function commander($nbProduit,$montant,$idClient){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare("INSERT INTO commande(nbProduit,montant,idClient)VALUES(?,?,?)");
        $reponse->execute(array($nbProduit,$montant,$idClient));
    }
}
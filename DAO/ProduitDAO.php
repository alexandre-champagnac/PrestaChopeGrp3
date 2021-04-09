<?php

include_once 'DTO/ProduitDTO.php';

class ProduitDAO
{
    public function allProduit(){
        $tab = array();
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * FROM produit');
        $reponse->execute(array());
        $result = $reponse->fetchAll();
        if(isset($result[0]['nom'])){
            foreach($result as $value){
                $produits = new ProduitDTO($value['idProduit'], $value['nom'], $value['datePeremption'], $value['quantite'],$value['prix'],$value['photo']);
                $tab= $produits;
            }
            return $tab;
        }
        return null;
    }
    public function searchProduit($recherche)
    {
        $recherche = '%' . $recherche . '%';
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * FROM produit WHERE nom LIKE ? ');
        $reponse->execute(array($recherche));
        $result = $reponse->fetchAll();
        $tab = array();
        if (isset($result[0]['nom'])) {
            foreach ($result as $value) {
                $produit = new ProduitDTO($value['idProduit'], $value['nom'], $value['datePeremption'], $value['quantite'],$value['prix'],$value['photo']);
                $tab = $produit;
            }
            return $tab;
        }
        return null;
    }
    public function  modifProduit($produit){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('UPDATE produit SET prix = ?, nom = ?,photo = ?, datePeremption = ?, quantite = ? WHERE idProduit = ?');
        $reponse->execute(array($produit->getPrix,$produit->getNom,$produit->getPhoto,$produit->getDateperemption,$produit->getQuantite,$produit->getIdProduit));
    }
}
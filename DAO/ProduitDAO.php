<?php

include_once 'DTO/ProduitDTO.php';
include_once 'tools/DatabaseLinker.php';
class ProduitDAO
{
    public static function allProduit(){
        $tab = array();
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * FROM produit');
        $reponse->execute(array());
        $result = $reponse->fetchAll();
        if(isset($result[0]['nom'])){
            foreach($result as $value){
                $produits = new ProduitDTO($value['idProduit'], $value['nom'], $value['datePeremption'], $value['quantite'],$value['prix'],$value['photo']);
                $tab[]= $produits;
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
        $reponse->execute(array($produit->getPrix,$produit->getNom,$produit->getPhoto,$produit->getDateperemption,$produit->getQuantite,$produit->getIdProduit,$produit->getDescription));
    }
    public function produitCategorie($idCategorie){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * FROM produit as po inner join appartient as appart on po.idProduit = appart.idProduit inner join categorie as cate on appart.idCategorie = cate.idCategorie WHERE cate.idCategorie = ?');
        $reponse->execute(array($idCategorie));
        $result = $reponse->fetchAll;
        $tab = array();
        foreach ($result as $value) {
            $produit = new ProduitDTO($value['idProduit'], $value['nom'], $value['datePeremption'], $value['quantite'],$value['prix'],$value['photo'],$value['description']);
            $tab = $produit;
        }
        return $tab;
    }
    public static function getProduitById($id){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * FROM produit WHERE idProduit = ?');
        $reponse->execute(array($id));
        $result = $reponse->fetch();
        $produit = new ProduitDTO($result['idProduit'], $result['nom'], $result['datePeremption'], $result['quantite'],$result['prix'],$result['photo'],$result['description']);
        return $produit;
    }
}
<?php

include_once 'DTO/ProduitDTO.php';
include_once 'tools/DatabaseLinker.php';

class ProduitDAO
{
    public static function allProduit()
    {
        $tab = array();
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * FROM produit');
        $reponse->execute(array());
        $result = $reponse->fetchAll();
        if (isset($result[0]['nom'])) {
            foreach ($result as $value) {
                $produits = new ProduitDTO($value['idProduit'], $value['nom'], $value['quantite'], $value['prix'], $value['photo'], $value['description']);
                $tab[] = $produits;
            }
            return $tab;
        }
        return null;
    }

    public static function produitCategorie($idCategorie)
    {
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * FROM produit WHERE idCategorie = ?');
        $reponse->execute(array($idCategorie));
        $result = $reponse->fetchAll();
        $tabProdCat = array();
        if ($result) {
            foreach ($result as $value) {
                $produit = new ProduitDTO($value['idProduit'], $value['nom'], $value['quantite'], $value['prix'], $value['photo'], $value['description']);
                $tabProdCat[] = $produit;
            }
            return $tabProdCat;
        }
        return null;
    }

    public static function getProduitById($id)
    {
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * FROM produit WHERE idProduit = ?');
        $reponse->execute(array($id));
        $result = $reponse->fetch();
        $produit = new ProduitDTO($result['idProduit'], $result['nom'], $result['quantite'], $result['prix'], $result['photo'], $result['description']);
        return $produit;
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
                $produit = new ProduitDTO($value['idProduit'], $value['nom'], $value['quantite'], $value['prix'], $value['photo'], $value['description']);
                $tab = $produit;
            }
            return $tab;
        }
        return null;
    }

    public function modifProduit($produit)
    {
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('UPDATE produit SET prix = ?, nom = ?,photo = ?, quantite = ? WHERE idProduit = ?');
        $reponse->execute(array($produit->getPrix, $produit->getNom, $produit->getPhoto, $produit->getQuantite, $produit->getIdProduit, $produit->getDescription));
    }


    public static function imgProduit($image) {
        $_FILES['importation']=$image;
        var_dump($image);
        $dossier = 'assets/img';
        $fichier = basename($_FILES['importation']['name']);
        move_uploaded_file($_FILES['importation']['tmp_name'], $dossier . $fichier);
        $chemin =  $dossier . $fichier ;
        return $chemin;
    }
    public static function addProduit($nom,$prix,$quantite,$desc,$idCategorie,$image)
{
    $bdd = DatabaseLinker::getConnexion();
    $reponse = $bdd->prepare('INSERT INTO produit(nom,prix,quantite,description,idCategorie,photo) VALUES (?,?,?,?,?,?)');
    $reponse->execute(array($nom,$prix,$quantite,$desc,$idCategorie,$image));
}
}
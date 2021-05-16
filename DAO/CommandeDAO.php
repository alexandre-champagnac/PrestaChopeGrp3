<?php
include_once "tools/DatabaseLinker.php";
include_once "DAO/ProduitDAO.php";
include_once "DAO/ClientDAO.php";

class CommandeDAO
{
    static function createCommand($id) {
        $bdd = DataBaseLinker::getConnexion();
        $panier = $_SESSION['panier'];
        if ($panier != null) {
            $cagnotte = ClientDAO::getInfos($id)->getCagnotte();
            $state = $bdd->prepare('INSERT INTO commande(idClient) VALUES(?) ');
            $state->execute(array($id));
            $lastId = $bdd->lastInsertId();

            foreach ($panier as $value) {
                $reponse = $bdd->prepare('INSERT INTO produitcommande(idProduit,idCommande,quantite) VALUES(?,?,?) ');
                $reponse->execute(array($value[0], $lastId, $value[1]));

                $state = $bdd->prepare('UPDATE produit SET quantite = quantite - ? WHERE idProduit = ? ');
                $state->execute(array($value[1], $value[0]));
            }

            $repons = $bdd->prepare('SELECT SUM(produit.prix * produitcommande.quantite) from produitcommande,produit WHERE produit.idProduit = produitcommande.idProduit and idCommande = ? ');
            $repons->execute(array($lastId));
            $somme = $repons->fetch();

            $repon = $bdd->prepare('INSERT INTO facture(idCommande,montant,date) VALUES(?,?,CURRENT_TIMESTAMP) ');
            $repon->execute(array($lastId, $somme[0]));

            unset($_SESSION['panier']);
            $repons = $bdd->prepare('SELECT montant FROM facture WHERE idCommande = ?');
            $repons->execute(array($lastId));
            $somme = $repons->fetch();

            $rep = $bdd->prepare('UPDATE clients SET cagnotte = ? where idClient = ?');
            $rep->execute(array($cagnotte - $somme[0], $id));
            print_r($somme[0]);
        }
    }
}
<?php
include_once 'tools/DatabaseLinker.php';
include_once 'DTO/ClientDTO.php';
class ClientDAO
{
    public function redirectUser(){
        header('Location(index.php?page=accueil)');
    }
    public function register($prenom, $nom, $pseudo, $password, $mail, $adresse)
    {
        $password = sha1($password);
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('INSERT INTO clients(nom,prenom,pseudo,password,mail,adresse) VALUES(?,?,?,?,?,?)');
        $reponse->execute(array($prenom, $nom, $pseudo, $password, $mail, $adresse));
    }

    public static function connexion($pseudo, $password)
    {
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * from clients WHERE pseudo = ?');
        $reponse->execute(array($pseudo));
        $result = $reponse->fetch();
        if (isset($result['pseudo'])) {
            if ($result['password'] == $password) {
                $client = new ClientDTO($result['idClient'], $result['prenom'], $result['nom'], $result['pseudo'], $result['password'], $result['mail'], $result['adresse'], $result['avatar'], $result['cagnotte'], $result['isAdmin']);
                return $client;
            } else {
                return null;
            }
        }
    }

    public function searchClientByNom($recherche)
    {
        $recherche = '%' . $recherche . '%';
        $tab = array();
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * FROM client WHERE pseudo LIKE ? ');
        $reponse->execute(array($recherche));
        $result = $reponse->fetchAll();
        if (isset($result[0]['nom'])) {
            foreach ($result as $value) {
                $client = new ClientDTO($value['idClient'], $value['nom'], $value['prenom'], $value['pseudo'], $value['password'], $value['mail'], $value['adresse'], $value['avatar'], $value['cagnotte'], $value['isAdmin']);
                $tab = $client;
            }
            return $tab;
        }
        return null;
    }
    public function modifPassword($client){
            $bdd = DatabaseLinker::getConnexion();
            $reponse = $bdd->prepare('UPDATE client SET nom = ?,prenom = ?, pseudo = ?, password = ?, mail = ? adresse = ? WHERE idProduit = ?');
            $reponse->execute(array($client->getNom,$client->getPrenom,$client->getPseudo,$client->getPassword,$client->getMail,$client->getAdresse,$client->getIdClient));

    }
}
<?php

include_once 'DTO/ClientDTO.php';

class ClientDAO
{
    public function register($prenom, $nom, $pseudo, $password, $mail, $adresse){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('INSERT INTO clients(nom,prenom,pseudo,password,mail,adresse) VALUES(?,?,?,?,?,?)');
        $reponse->execute(array($prenom,$nom,$pseudo,$password,$mail,$adresse));
    }
    public function connexion($pseudo, $password)
    {
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * from clients WHERE pseudo = ?');
        $reponse->execute(array($pseudo));
        $result = $reponse->fetch();
        if (isset($result)) {
            if ($result['password'] == $password) {
                $client = new ClientDTO($result['idClient'], $result['prenom'], $result['nom'], $result['pseudo'], $result['password'], $result['mail'], $result['adresse'], $result['avatar'], $result['cagnotte'], $result['isAdmin']);
                return $client;
            } else {
                return null;
            }
        }
    }
    public function searchClientByNom($recherche){
        $recherche = '%' . $recherche . '%';
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * FROM client WHERE pseudo LIKE ? ');
        $reponse->execute(array($recherche));
        $result = $reponse->fetchAll();
        foreach ($result as $value){
            $client
        }
    }
}
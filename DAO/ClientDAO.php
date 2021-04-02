<?php

include_once 'DTO/ClientDTO.php';
class ClientDAO
{
    public function connexion($pseudo,$password){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * from clients WHERE pseudo = ?');
        $reponse->execute(array($pseudo));
        $result =  $reponse->fetch();
        if(isset($result)){
            if($result['password'] == $password){
                $client = new ClientDTO($result['idClient'], $result['prenom'], $result['nom'], $result['pseudo'], $result['password'], $result['mail'], $result['adresse'], $result['avatar'], $result['cagnotte'], $result['isAdmin']);
            }
        }

    }
}
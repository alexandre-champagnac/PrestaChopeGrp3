<?php
include_once 'tools/DatabaseLinker.php';
include_once 'DTO/ClientDTO.php';
class ClientDAO
{
    public static function register($prenom, $nom, $pseudo, $password, $mail, $adresse)
    {
        $password = sha1($password);
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('INSERT INTO clients(nom,prenom,pseudo,password,mail,adresse) VALUES(?,?,?,?,?,?)');
        $reponse->execute(array($prenom, $nom, $pseudo, $password, $mail, $adresse));
    }

    public static function connexion($pseudo, $password)
    {
        $password = sha1($password);
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * from clients WHERE pseudo = ?');
        $reponse->execute(array($pseudo));
        $result = $reponse->fetch();
        if (isset($result['pseudo'])) {
            if ($result['password'] == $password) {
                $client = new ClientDTO();
                $client->setIdClient($result['idClient']);
                $client->setIsAdmin($result['isAdmin']);
                return $client;
            } else {
                return null;
            }
        }
    }
    public static function getInfos($id)
    {
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * from clients WHERE idClient = ?');
        $reponse->execute(array($id));
        $result = $reponse->fetch();
        $client = new ClientDTO();
        $client->setIdClient($result['idClient']);
        $client->setIsAdmin($result['isAdmin']);
        $client->setPseudo($result['pseudo']);
        $client->setPrenom($result['prenom']);
        $client->setNom($result['nom']);
        $client->setMail($result['mail']);
        $client->setAdresse($result['adresse']);
        $client->setCagnotte($result['cagnotte']);
        return $client;
    }

    public function searchClientByPseudo($recherche)
    {
        $recherche = '%' . $recherche . '%';
        $tab = array();
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * FROM client WHERE pseudo LIKE ? ');
        $reponse->execute(array($recherche));
        $result = $reponse->fetchAll();
        if (isset($result[0]['nom'])) {
            foreach ($result as $value) {
                $client = new ClientDTO();
                $client->setIdClient($result['idClient']);
                $client->setIsAdmin($result['isAdmin']);
                $client->setPseudo($result['pseudo']);
                $client->setPrenom($result['prenom']);
                $client->setNom($result['nom']);
                $client->setMail($result['mail']);
                $client->setAdresse($result['adresse']);
                $client->setCagnotte($result['cagnotte']);
                $tab[] = $client;
            }
            return $tab;
        }
        return null;
    }
    public static function modifInfo($nom,$prenom,$mail,$adresse,$pseudo,$id){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('UPDATE clients SET nom = ?,prenom = ?, mail = ?,adresse = ?,pseudo = ? WHERE idClient = ?');
        $reponse->execute(array($nom,$prenom,$mail,$adresse,$pseudo,$id));

    }
    public static function modifPassword($password,$id){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('UPDATE clients SET password = ? WHERE idClient = ?');
        $reponse->execute(array(sha1($password),$id));
    }
    public static function listeUser()
    {
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('SELECT * FROM clients');
        $reponse->execute(array());
        $result = $reponse->fetchAll();
        return $result;
    }
    public static function supprimerCompte($id){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('DELETE FROM clients WHERE idClient = ?');
        $reponse->execute(array($id));
    }
}
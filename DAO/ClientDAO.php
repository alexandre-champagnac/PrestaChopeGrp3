<?php
include_once 'tools/DatabaseLinker.php';
include_once 'DTO/ClientDTO.php';
class ClientDAO
{
    public function register($prenom, $nom, $pseudo, $password, $mail, $adresse)
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
        $client->setAvatar($result['avatar']);
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
                $client->setAvatar($result['avatar']);
                $tab[] = $client;
            }
            return $tab;
        }
        return null;
    }
    public function modifInfo($client){
            $password = sha1($client->getPassword);
            $bdd = DatabaseLinker::getConnexion();
            $reponse = $bdd->prepare('UPDATE client SET nom = ?,prenom = ?, pseudo = ?, password = ?, mail = ? adresse = ? WHERE idClient = ?');
            $reponse->execute(array($client->getNom,$client->getPrenom,$client->getPseudo,$password,$client->getMail,$client->getAdresse,$client->getIdClient));

    }
    public function modifAvatar($idClient,$chemin){
        $bdd = DatabaseLinker::getConnexion();
        $reponse = $bdd->prepare('UPDATE client SET avatar = ? where idClient = ?');
        $reponse->execute(array($chemin, $idClient));
    }
}
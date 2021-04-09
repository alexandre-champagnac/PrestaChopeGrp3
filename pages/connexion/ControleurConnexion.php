<?php
class ControleurConnexion
{
    public function includeView()
    {
        include_once "pages/connexion/connexion.php";
    }

    public function authenticate($pseudo, $mdp)
    {
        include_once("DAO/ClientDAO.php");
        $verif = ClientDAO::connexion($pseudo, $mdp);

            if ($verif) {
                $_SESSION['idClient'] = $verif->getIdClient();
                $_SESSION['prenom'] = $verif->getPrenom();
                $_SESSION['nom'] = $verif->getNom();
                $_SESSION['pseudo'] = $verif->getPseudo();
                $_SESSION['mail'] = $verif->getMail();
                $_SESSION['avatar'] = $verif->getAvatar();
                $_SESSION['cagnotte'] = $verif->getCagnotte();
                $_SESSION['isAdmin'] = $verif->getIsAdmin();
                $_SESSION['adresse'] = $verif->getAdresse();
                return true;
            }
            else {
                return false;
            }
        }

    public function redirectUser()
    {
        header("Location: index.php?page=listeProduit");
    }
}
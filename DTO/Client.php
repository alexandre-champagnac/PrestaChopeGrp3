<?php


class Client
{
    private $idClient;
    private $nom;
    private $prenom;
    private $pseudo;
    private $password;
    private $mail;
    private $adresse;
    private $avatar;
    private $cagnotte;
    private $isAdmin;

    /**
     * Client constructor.
     * @param $idClient
     * @param $nom
     * @param $prenom
     * @param $pseudo
     * @param $password
     * @param $mail
     * @param $adresse
     * @param $avatar
     * @param $cagnotte
     * @param $isAdmin
     */
    public function __construct($idClient, $nom, $prenom, $pseudo, $password, $mail, $adresse, $avatar, $cagnotte, $isAdmin)
    {
        $this->idClient = $idClient;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->mail = $mail;
        $this->adresse = $adresse;
        $this->avatar = $avatar;
        $this->cagnotte = $cagnotte;
        $this->isAdmin = $isAdmin;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @return mixed
     */
    public function getCagnotte()
    {
        return $this->cagnotte;
    }

    /**
     * @param mixed $cagnotte
     */
    public function setCagnotte($cagnotte)
    {
        $this->cagnotte = $cagnotte;
    }

    /**
     * @return mixed
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param mixed $isAdmin
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }


}
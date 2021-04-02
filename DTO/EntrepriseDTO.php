<?php


class EntrepriseDTO
{
    private $isEntreprise;
    private $Tresorie;
    private $nbCommande;
    /**
     * EntrepriseDTO constructor.
     * @param $isEntreprise
     * @param $Tresorie
     * @param $nbCommande
     */
    public function __construct($isEntreprise, $Tresorie, $nbCommande)
    {
        $this->isEntreprise = $isEntreprise;
        $this->Tresorie = $Tresorie;
        $this->nbCommande = $nbCommande;
    }

    /**
     * @return mixed
     */
    public function getIsEntreprise()
    {
        return $this->isEntreprise;
    }

    /**
     * @param mixed $isEntreprise
     */
    public function setIsEntreprise($isEntreprise)
    {
        $this->isEntreprise = $isEntreprise;
    }

    /**
     * @return mixed
     */
    public function getTresorie()
    {
        return $this->Tresorie;
    }

    /**
     * @param mixed $Tresorie
     */
    public function setTresorie($Tresorie)
    {
        $this->Tresorie = $Tresorie;
    }

    /**
     * @return mixed
     */
    public function getNbCommande()
    {
        return $this->nbCommande;
    }

    /**
     * @param mixed $nbCommande
     */
    public function setNbCommande($nbCommande)
    {
        $this->nbCommande = $nbCommande;
    }

}
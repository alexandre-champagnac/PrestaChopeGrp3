<?php


class CommandeDTO
{
    private $idCommande;
    private $nbProduit;
    private $montant;
    private $dateCommande;
    private $idClient;

    /**
     * CommandeDTO constructor.
     * @param $idCommande
     * @param $nbProduit
     * @param $montant
     * @param $dateCommande
     * @param $idClient
     */
    public function __construct($idCommande, $nbProduit, $montant, $dateCommande, $idClient)
    {
        $this->idCommande = $idCommande;
        $this->nbProduit = $nbProduit;
        $this->montant = $montant;
        $this->dateCommande = $dateCommande;
        $this->idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * @param mixed $idCommande
     */
    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;
    }

    /**
     * @return mixed
     */
    public function getNbProduit()
    {
        return $this->nbProduit;
    }

    /**
     * @param mixed $nbProduit
     */
    public function setNbProduit($nbProduit)
    {
        $this->nbProduit = $nbProduit;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return mixed
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * @param mixed $dateCommande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;
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

}
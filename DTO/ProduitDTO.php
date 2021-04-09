<?php


class ProduitDTO
{
    private $idProduit;
    private $prix;
    private $photo;
    private $nomProduit;
    private $datePeremption;
    private $quantité;

    /**
     * ProduitDTO constructor.
     * @param $idProduit
     * @param $nomProduit
     * @param $datePeremption
     * @param $quantité
     */
    public function __construct($idProduit, $nomProduit, $datePeremption, $quantité,$prix,$photo)
    {
        $this->idProduit = $idProduit;
        $this->nomProduit = $nomProduit;
        $this->datePeremption = $datePeremption;
        $this->quantité = $quantité;
        $this->prix =$prix;
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * @param mixed $idProduit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }

    /**
     * @return mixed
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * @param mixed $nomProduit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;
    }

    /**
     * @return mixed
     */
    public function getDatePeremption()
    {
        return $this->datePeremption;
    }

    /**
     * @param mixed $datePeremption
     */
    public function setDatePeremption($datePeremption)
    {
        $this->datePeremption = $datePeremption;
    }

    /**
     * @return mixed
     */
    public function getQuantité()
    {
        return $this->quantité;
    }

    /**
     * @param mixed $quantité
     */
    public function setQuantité($quantité)
    {
        $this->quantité = $quantité;
    }

}
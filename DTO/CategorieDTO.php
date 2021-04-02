<?php


class CategorieDTO
{
    private $idCategorie;
    private $nom;

    /**
     * CategorieDTO constructor.
     * @param $idCategorie
     * @param $nom
     */
    public function __construct($idCategorie, $nom)
    {
        $this->idCategorie = $idCategorie;
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * @param mixed $idCategorie
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;
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

}
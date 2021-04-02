<?php


class CommentaireDTO
{
    private $idCommentaire;
    private $content;
    private $idProduit;
    private $idClient;

    /**
     * CommentaireDTO constructor.
     * @param $idCommentaire
     * @param $content
     * @param $idProduit
     * @param $idClient
     */
    public function __construct($idCommentaire, $content, $idProduit, $idClient)
    {
        $this->idCommentaire = $idCommentaire;
        $this->content = $content;
        $this->idProduit = $idProduit;
        $this->idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    /**
     * @param mixed $idCommentaire
     */
    public function setIdCommentaire($idCommentaire)
    {
        $this->idCommentaire = $idCommentaire;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
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
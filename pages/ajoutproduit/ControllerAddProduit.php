<?php
include_once "DAO/ProduitDAO.php";
 Class ControllerAddProduit{
     public function addproduit($id){
         $_SESSION['pannier'][] = ProduitDAO::getProduitById($id);
     }
 }
<?php
include_once "DAO/ProduitDAO.php";
 Class ControllerAddProduit{
     public function addproduit($id,$quantite){
         $verif = false;
         if(!empty($_SESSION['panier'])) {
             for ($i = 0; $i < count($_SESSION['panier']); $i++) {
                 if ($_SESSION['panier'][$i][0] == $id) {
                     $_SESSION['panier'][$i][1] += $quantite;
                     $verif = true;
                 }
             }
         }
         if ($verif == false) {
             $tab = [$id, $quantite];
             $_SESSION['panier'][] = $tab;
         }
     }
 }
<?php


class DeleteProdDAO
{
    public static function deleteprod($id){
        for($i = 0 ; $i < count($_SESSION['panier']);$i++){
            if ($_SESSION['panier'][$i][0] == $id){
                unset($_SESSION['panier'][$i]);
            }
        }
    }
}
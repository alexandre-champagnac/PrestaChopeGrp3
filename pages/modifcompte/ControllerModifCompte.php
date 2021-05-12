<?php

include "DAO/ClientDAO.php";
class ControllerModifCompte
{
     public function modifCompte($nom,$prenom,$mail,$adresse,$pseudo,$id){
        ClientDAO::modifInfo($nom,$prenom,$mail,$adresse,$pseudo,$id);
     }
     public function modifPassword($password,$id){
         ClientDAO::modifPassword($password,$id);
     }
}
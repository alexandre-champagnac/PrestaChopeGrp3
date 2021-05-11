<?php

include "DAO/ClientDAO.php";
class ControllerModifCompte
{
 public function modifCompte($nom,$prenom,$mail,$adresse,$id){
    ClientDAO::modifInfo($nom,$prenom,$mail,$adresse,$id);
 }
}
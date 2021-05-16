<?php

require_once('DAO/CommandeDAO.php');
class ControleurCommande
{
    function createCommand($id) {
        CommandeDAO::createCommand($id);
    }
}
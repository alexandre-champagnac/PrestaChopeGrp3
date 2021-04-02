<?php

class DatabaseLinker
{
    private static $url = 'mysql:host=localhost; dbname=prestachope3; charset=utf8';
    private static $nomutilisateur = "root";
    private static $mdp = "";
    private static $pdo;

    public static function getConnexion()
    {
        if (empty(DatabaseLinker::$pdo)) {
            DatabaseLinker::$pdo = new PDO(DatabaseLinker::$url, DatabaseLinker::$nomutilisateur, DatabaseLinker::$mdp);
        }
        return DatabaseLinker::$pdo;
    }
}
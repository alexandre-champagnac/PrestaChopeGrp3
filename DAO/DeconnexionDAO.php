<?php
class DeconnexionDAO{
    public static function deconnexion(){
        session_destroy();
    }
}
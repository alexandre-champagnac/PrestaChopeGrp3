<?php
class DeconnexionDAO{
    public
    function deconnexion(){
        session_destroy();
    }
}
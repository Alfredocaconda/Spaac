<?php
class Controller {
    public function isProtected(){

        if(!isset($_SESSION["usuario_logado"])){
            header("Location: /Login");
        }

    }
}
?>
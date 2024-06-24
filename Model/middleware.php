<?php 
    class Middleware{

        public static function auth(){
            session_start();
            if (!isset($_SESSION['nome_usuario']) && !isset($_SESSION['tipo_usuario'])) {
                header("Location: /principal");
            }
        }


    }
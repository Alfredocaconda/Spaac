<?php
class LoginController {

    public static function index(){
        include "View/Modules/login/login.php";
    }
    public static function login(){
        include "View/Modules/login/usuario.php";
    }
    public static function save(){
        include "Model/usuarioModel.php";
        
        $model=new usuarioModel();
        $model->id_usuario =$_POST['id_usuario'];
        $model->nome_usuario=$_POST['nome'];
        $model->tipo_usuario=$_POST['tipo'];
        $model->email_usuario=$_POST['email'];
        $model->senha_usuario=$_POST['senha'];
        $model->save();
        header("Location: /usuario");
    }
    public static function autenticar(){
        
        include "Model/loginModel.php";
        $model= new LoginModel();
        $model->email=$_POST['email'];
        $model->password=$_POST['password'];
        $model->autenticar();
    }
}
?>
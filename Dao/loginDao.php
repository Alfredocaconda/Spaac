<?php
class LoginDAO {
    private $conexao;
    #contrutor de classes
    public function __construct(){
        $dados="mysql:host=localhost:3306;dbname=spaac";
        $this->conexao=new PDO($dados,'root','');
    }
    public static function index(){
        include "View/Modules/login/login.php";
    }
   
    public function autenticar(LoginModel $model){
        session_start();
        $sql="SELECT * FROM usuario where email_usuario=? and senha_usuario=?";

        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->email);
        $valor->bindValue(2,$model->password);
        
        $valor->execute();
        
        $dados=$valor->fetchObject();
        $_SESSION['tipo_usuario']=$dados->tipo_usuario; 
        $_SESSION['nome_usuario']=$dados->nome_usuario; 
        $_SESSION['id_usuario ']=$dados->id_usuario ; 
        $_SESSION['email_usuario']=$dados->email_usuario; 
        $_SESSION['senha_usuario']=$dados->senha_usuario; 
        
                if ($_SESSION['tipo_usuario']=="Estudante" || $_SESSION['tipo_usuario']=="Professor" ) {
                    # code...
                    header("Location: /principal2");
                } else {
                    if($_SESSION['tipo_usuario']=="admin" ){
                        header("Location: /");
                    }else{
                        header("Location: /login");  
                    }
                }
    }
}
?>
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
    public static function login(){

    }
    public function autenticar(LoginModel $model){

    $sql="SELECT * FROM usuario where email_usuario=? and senha_usuario=?";

    $valor=$this->conexao->prepare($sql);
    $valor->bindValue(1,$model->email);
    $valor->bindValue(2,$model->password);

    $valor->execute();

    $dados=$valor->fetchObject();

    if ($dados) {
        # code...
        header("Location: View/Modules/dashboard/dashboard.php");
    }else{
        
        header("Location: /?EMAIL OU SENHA ERRADA=true");
    }

    }
    public function selectLogin(){
        //parent::isProtected();
        try {
            $sql="SELECT nome FROM usuario where id_usuario=:marcador_id";
            $stmt=$this->conexao->prepare($sql);
            $stmt->execute(array('marcador_id'=>$_SESSION['usuario_logado']));
        
            $dados=$stmt->fetchObject();
        
        } catch (Exception $ex) {
            //throw $th;
            echo $ex->getMessage();
        }
    }
}
?>
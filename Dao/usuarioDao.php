<?php
#class que acessa ao banco de dados
class usuarioDao{
    private $conexao;
    #contrutor de classes
    public function __construct(){
        $dados="mysql:host=localhost:3306;dbname=spaac";
        $this->conexao=new PDO($dados,'root','');
    }
    public function insert(usuarioModel $model){
        $sql="INSERT INTO usuario(nome_usuario,tipo_usuario,email_usuario,
        senha_usuario,telefone,instituicao_vinculado,formacao_academica,nacionalidade,grau_academico) 
        VALUES (?,?,?,?,?,?,?,?,?)";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->nome_usuario);
        $valor->bindValue(2,$model->tipo_usuario);
        $valor->bindValue(3,$model->email_usuario);
        $valor->bindValue(4,$model->senha_usuario);
        $valor->bindValue(5,$model->telefone);
        $valor->bindValue(6,$model->instituicao_vinculado);
        $valor->bindValue(7,$model->formacao_academica);
        $valor->bindValue(8,$model->nacionalidade);
        $valor->bindValue(9,$model->grau_academico);
        $valor->execute();
        
}
    public function update(usuarioModel $model){
        $sql="UPDATE usuario SET nome_usuario=?,tipo_usuario=?,email_usuario=?,senha_usuario=? WHERE id_usuario=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->nome_usuario);
        $valor->bindValue(2,$model->tipo_usuario);
        $valor->bindValue(3,$model->email_usuario);
        $valor->bindValue(4,$model->senha_usuario);
        $valor->bindValue(5,$model->id_usuario);
        $valor->execute();
    }
    public function select(){
        $sql="SELECT * FROM usuario";
        $valor=$this->conexao->prepare($sql);
        $valor->execute();
        return $valor->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectId(int $id_usuario){
        include_once "Model/usuarioModel.php";
        $sql="SELECT * FROM usuario WHERE id_usuario=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_usuario);
        $valor->execute();
        return $valor->fetchObject("usuarioModel");
    }
    public function delete(int $id_usuario){
        $sql="DELETE FROM usuario WHERE id_usuario=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_usuario);
        $valor->execute();
    }
   
}
?>
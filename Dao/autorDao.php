<?php
#class que acessa ao banco de dados
class autorDao{
    private $conexao;
    #contrutor de classes
    public function __construct(){
        $dados="mysql:host=localhost:3306;dbname=spaac";
        $this->conexao=new PDO($dados,'root','');
    }
    public function insert(autorModel $model){
        $sql="INSERT INTO autor (telefone,instituicao_vinculado,nacionalidade_autor,grau_academico,id_usuario) 
        values (?,?,?,?)";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->telefone);
        $valor->bindValue(2,$model->instituicao_vinculado);
        $valor->bindValue(3,$model->nacionalidade_autor);
        $valor->bindValue(4,$model->grau_academico);
        $valor->bindValue(5,$model->id_usuario);
        $valor->execute();
    }
    public function update(autorModel $model){
        $sql="UPDATE autor SET telefone=?,instituicao_vinculado=?,nacionalidade_autor=?,grau_academico=?,id_usuario=? 
        WHERE id_autor=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->telefone);
        $valor->bindValue(2,$model->instituicao_vinculado);
        $valor->bindValue(3,$model->nacionalidade_autor);
        $valor->bindValue(4,$model->grau_academico);
        $valor->bindValue(5,$model->id_usuario);
        $valor->bindValue(6,$model->id_autor);
        $valor->execute();
    }
    public function select(){
        $sql="SELECT * FROM consultaautorusuario";
        $valor=$this->conexao->prepare($sql);
        $valor->execute();
        return $valor->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectId(int $id_autor ){
        include_once "Model/autorModel.php";
       $sql="SELECT * FROM consultaautorusuario where id_autor=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_autor );
        $valor->execute();
        return $valor->fetchObject("autorModel");
    }
    public function delete(int $id_autor ){
        $sql="DELETE FROM autor WHERE id_autor=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_autor );
        $valor->execute();
    }
   
}
?>
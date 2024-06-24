<?php
#class que acessa ao banco de dados
class RevisorDao{
    private $conexao;
    #contrutor de classes
    public function __construct(){
        $dados="mysql:host=localhost:3306;dbname=spaac";
        $this->conexao=new PDO($dados,'root','');
    }
    public function insert(RevisorModel $model){
        $sql="INSERT INTO revisor (nome_revisor,instituicao_revisor,email_revisor,id_usuario) values (?,?,?,?)";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->nome_revisor);
        $valor->bindValue(2,$model->instituicao_revisor);
        $valor->bindValue(3,$model->email_revisor);
        $valor->bindValue(4,$model->id_usuario);
        $valor->execute();
    }
    public function update(RevisorModel $model){
        $sql="UPDATE revisor SET nome_revisor=?,instituicao_revisor=?,email_revisor=?,
        id_usuario=? WHERE id_revisor=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->nome_revisor);
        $valor->bindValue(2,$model->instituicao_revisor);
        $valor->bindValue(3,$model->email_revisor);
        $valor->bindValue(4,$model->id_usuario);
        $valor->bindValue(5,$model->id_revisor);
        $valor->execute();
    }
    public function select(){
        $sql="SELECT * FROM revisor";
        $valor=$this->conexao->prepare($sql);
        $valor->execute();
        return $valor->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectId(int $id_revisor){
        include_once "Model/RevisorModel.php";
        $sql="SELECT * FROM revisor WHERE id_revisor=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_revisor);
        $valor->execute();
        return $valor->fetchObject("RevisorModel");
    }
    public function delete(int $id_revisor){
        $sql="DELETE FROM revisor WHERE id_revisor=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_revisor);
        $valor->execute();
    }
   
}
?>
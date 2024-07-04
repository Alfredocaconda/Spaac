<?php
#class que acessa ao banco de dados
class FuncionarioDao{
    private $conexao;
    #contrutor de classes
    public function __construct(){
        $dados="mysql:host=localhost:3306;dbname=spaac";
        $this->conexao=new PDO($dados,'root','');
    }
    public function insert(FuncionarioModel $model){
        $sql="INSERT INTO Funcionario(nome_Funcionario,tipo_Funcionario,email_Funcionario,
        senha_Funcionario,telefone,instituicao_vinculado,formacao_academica,nacionalidade,grau_academico) 
        VALUES (?,?,?,?,?,?,?,?,?)";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->nome_Funcionario);
        $valor->bindValue(2,$model->tipo_Funcionario);
        $valor->bindValue(3,$model->email_Funcionario);
        $valor->bindValue(4,$model->senha_Funcionario);
        $valor->bindValue(5,$model->telefone);
        $valor->bindValue(6,$model->instituicao_vinculado);
        $valor->bindValue(7,$model->formacao_academica);
        $valor->bindValue(8,$model->nacionalidade);
        $valor->bindValue(9,$model->grau_academico);
        $valor->execute();
        
}
    public function update(FuncionarioModel $model){
        $sql="UPDATE Funcionario SET nome_Funcionario=?,tipo_Funcionario=?,email_Funcionario=?,senha_Funcionario=? WHERE id_Funcionario=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->nome_Funcionario);
        $valor->bindValue(2,$model->tipo_Funcionario);
        $valor->bindValue(3,$model->email_Funcionario);
        $valor->bindValue(4,$model->senha_Funcionario);
        $valor->bindValue(5,$model->id_Funcionario);
        $valor->execute();
    }
    public function select(){
        $sql="SELECT * FROM Funcionario";
        $valor=$this->conexao->prepare($sql);
        $valor->execute();
        return $valor->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectId(int $id_Funcionario){
        include_once "Model/FuncionarioModel.php";
        $sql="SELECT * FROM Funcionario WHERE id_Funcionario=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_Funcionario);
        $valor->execute();
        return $valor->fetchObject("FuncionarioModel");
    }
    public function delete(int $id_Funcionario){
        $sql="DELETE FROM Funcionario WHERE id_Funcionario=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_Funcionario);
        $valor->execute();
    }
   
}
?>
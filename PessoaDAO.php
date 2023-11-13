<?php
    class PessoaDAO{
        public function _contruct(){
        }

//insert
    public function insert (Pessoa $pessoa){
    $dao=new Database();
    $conn=$dao->getConnection();

    $sql="INSERT INTO pessoa (nome, email, senha) VALUES (:nome, :email, :senha)";
    $stmt=$conn->prepare($sql);
    
    }

}


?>
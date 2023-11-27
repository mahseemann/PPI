<?php
include_once ("PessoaDAO");
class PessoaController {
    public function _construct(){

    }
    public function cadastrarPessoa ($nome, $email, $senha){
       
    $dao = new PessoaDAO();
    $pessoa = new Pessoa ();
    $pessoa -> setAll (null, $nome, $email, $senha);

    return  $dao -> insert ($pessoa);



    }
    public function listarPessoas(){
    }
    public function getPessoa($id){
    }
}
?>
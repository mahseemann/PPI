<?php
    class Pessoa{
        public $id;
        public $nome;
        public $email;
        public $senha;
        public function setAll($id, $nome, $email, $senha){
            $this->id=$id;
            $this->nome=$nome;
            $this->email=$email;
            $this->senha=$senha;
        }
        public function getId(){
        }
        public function getNome(){
        }
        public function getEmail(){
        }
        public function getSenha(){
        }
            //instanciar um objeto Pessoa
            //salvar no banco por meio do dao
    }
?>
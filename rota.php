<?php
include_once ("PessoaController.php");
if(!isset($_POST5 ['op'])){
    echo "O´peração não informada";
    header('Location: index.php');
    exit();
}
$op = $_POST['op'];

switch ($op){

    case "cadastrar_usuario":
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $pessoaController = new PessoaController();
        $resultado = $pessoaController->cadastrarPessoa($nome, $email, $senha);
        break;
}
?>
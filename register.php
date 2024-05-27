<?php

require_once "bancodedados.php";

$usuario = $_POST['Usuario'];
$senha = $_POST['Senha'];
$email = $_POST['Email'];
$nome = $_POST['Nome'];

$bdclass = new bancodedados($usuario, $email, $senha, $nome);

$status = $bdclass->Create();

echo $status;

if($status == "Inserido com sucesso!")
{
    setcookie("status", "Logado", time() + (86400));
    header("Location: conteudo.php");
    exit();
}
elseif($status == 'Já existente!')
{
    setcookie("status", "Usuario ja Existente", time() + (86400));
    header("Location: loginpage.php");
    exit();
}
else
{
    setcookie("status", "Erro no Cadastro", time() + (86400));
    header("Location: registerpage.php");
    exit();
}

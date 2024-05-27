<?php
require_once 'bancodedados.php';

$usuario = $_POST['Usuario'];
$senha = $_POST['Senha'];

setcookie("user",$usuario, time() + (86400));

$bdclass = new bancodedados($usuario, 'null', $senha, 'null');

$bdSenha = $bdclass->ReadSenha();

if($bdclass->ReadExist($usuario) == false)
{
    setcookie("status", "Usuario Inexistente!", time() + (86400));
    header("Location: loginpage.php");
    exit();
}
elseif($senha != $bdSenha)
{
    setcookie("status", "Senha Incorreta", time() + (86400));
    header("Location: loginpage.php");
    exit();
}
else
{  
    setcookie("status", "Logado", time() + (86400));
    header("Location: conteudo.php");
    exit();
}

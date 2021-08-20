<?php
include "conexao.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

$select = "select * FROM cadastro";

$result = mysqli_query($conect, $select) or die ("Falha na execução da consulta de registro");

while($dados = mysqli_fetch_assoc($result)) {
    
    if ($dados["login"] == $login && $dados["senha"] == $senha) {
        echo "<script language='javascript' type='text/javascript'>
                        window.location.replace('todos-os-livros.html');
         </script>";
         unset($conect);
     } else{
        echo "<script language='javascript' type='text/javascript'>
                        alert('Login ou senha não confere');
                        window.location.replace('login.html');
         </script>";
         unset($conect);
     }
}

?>
<?php
include "conexao.php";

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$insert = "INSERT INTO cadastro VALUES ('null', '$nome', '$login', '$senha')";

$result = mysqli_query($conect, $insert) or die ("Falha na execução da consulta para inserir registro");

echo "<script language='javascript' type='text/javascript'>
                    alert('Cadastrado com sucesso');
                        window.location.replace('login.html');
         </script>";
unset($conect);
?>
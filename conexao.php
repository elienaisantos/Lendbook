<?php
//conexão com o servidor
$conect = mysqli_connect("127.0.0.1", "root", "", "lendbook");

// Caso a conexão seja reprovada (não for verificada), exibe na tela uma mensagem de erro

if (!$conect) {
    die("Conexão Falhou: " . mysqli_connect_error());
    unset($conect);
}
//echo "Conectado com Sucesso!";

?>

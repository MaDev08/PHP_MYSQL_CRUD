<?php
$host = "localhost"; 			
$user = "root"; 
$pass = ""; 
$banco = "cars1";

// criando a linha de conexão
$conexao = @mysqli_connect($host, $user, $pass, $banco);

if (!$conexao) {
    // Exibe a mensagem de erro dentro de um alert do Bootstrap
    echo '<div class="alert alert-danger" role="alert">
            Problemas com a conexão do Banco de Dados
          </div>';
    die();
}

// Define o charset para UTF-8
$conexao->set_charset("utf8");
?>

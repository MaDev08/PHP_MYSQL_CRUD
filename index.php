<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Semana 01 - Exemplo 05</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ajuste para tamanho das imagens na tabela */
        .table img {
            max-width: 50px; /* Limite o tamanho das imagens */
            height: auto;
        }
    </style>
</head>

<body class="container mt-5">
    <h3><span class="badge badge-dark">Semana 01</span> - Exemplo 05 - Listagem Geral de Produtos - Imagem</h3>
    <?php
        include_once('conexao.php');
        
        // Ajustando a instrução select para ordenar por id
        $query = mysqli_query($conexao, "SELECT * FROM tabelaimg ORDER BY id ASC");

        if (!$query) {
            echo '<div class="alert alert-danger" role="alert">
                    Query Inválida: ' . mysqli_error($conexao) . '
                  </div>';
            die();
        }

         if (mysqli_num_rows($query) > 0) {
            echo '<div class="table-responsive">';
            echo '<table class="table table-dark table-striped">';
            echo '<thead>';
            echo '<tr>';
            echo '<th width="30px" class="text-center">Id</th>';
            echo '<th width="100px">Montadora</th>';
            echo '<th width="250px">Nome</th>';
            echo '<th width="100px">Ano</th>';
            echo '<th width="100px">Valor</th>';
			echo '<th width="100px">Imagem</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

             while ($dados = mysqli_fetch_array($query)) {
                $imagem = empty($dados['imagem']) ? 'SemImagem.png' : htmlspecialchars($dados['imagem']);
                $id = base64_encode($dados['id']);
                echo '<tr>';
                echo '<td class="text-center">' . htmlspecialchars($dados['id']) . '</td>';
                echo '<td>' . htmlspecialchars($dados['montadora']) . '</td>';
                echo '<td>' . htmlspecialchars($dados['nome']) . '</td>';
				echo '<td>' . htmlspecialchars($dados['ano']) . '</td>';
                echo '<td class="text-right">R$ ' . number_format($dados['valor'], 2, ',', '.') . '</td>';
                echo '<td class="text-center">
                        <a href="verproduto.php?id=' . $id . '">
                            <img src="imagens/' . $imagem . '" alt="Imagem do produto" title="Clique para ver o produto">
                        </a>
                      </td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        } else {
            echo '<div class="alert alert-warning" role="alert">
                    Nenhum dado encontrado.
                  </div>';
        }

        mysqli_close($conexao);
    ?>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
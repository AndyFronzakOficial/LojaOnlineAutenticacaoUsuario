<?php
// Verifique se o produto a ser removido foi especificado, por exemplo, usando um ID
if (isset($_GET['id'])) {
    $produto_id = $_GET['id'];

    // Conecte-se ao banco de dados
    $host = '127.0.0.1';
    $usuario = 'root'; // Seu usuário do MySQL
    $senha = '';
    $banco = 'aloja';

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }
    // Construa a consulta para excluir o produto (substitua o nome da tabela e a coluna ID conforme necessário)
    $query = "DELETE FROM produtos WHERE id = $produto_id";

    // Execute a consulta
    if (mysqli_query($conexao, $query)) {
        echo "Produto removido com sucesso.";
        echo '<h2 class="text-center"> Aguarde 5 segundos ... </h2>';
        // Aguarde 5 segundos (5000 milissegundos)
        usleep(5000000);

        // Redirecione para a página index.php
        header("Location: consulta.php");
    } else {
        echo "Erro ao remover o produto: " . mysqli_error($conexao);
        
    }

    // Feche a conexão com o banco de dados
    mysqli_close($conexao);
} else {
    echo "ID do produto não especificado. Não é possível remover o produto.";
}
?>

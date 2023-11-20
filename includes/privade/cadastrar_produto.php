<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Configurações do banco de dados
    $host = '127.0.0.1';
    $usuario = 'root'; // Coloque o seu usuário do MySQL aqui, se necessário
    $senha = '';
    $banco = 'aloja';

    // Conectar ao banco de dados
    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    // Verificar se a conexão foi estabelecida com sucesso
    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Obter os dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    // Nome da imagem baseado no ID do cadastro
    $imagem_nome = "../../assets/imagens" . uniqid() . ".png";

    // Mover a imagem para o diretório de destino
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem_nome)) {
        // Inserir os dados no banco de dados
        $inserir_sql = "INSERT INTO produtos (nome,descrição, valor, imagem) VALUES ('$nome',$descricao,  $valor, '$imagem_nome')";
        if (mysqli_query($conexao, $inserir_sql)) {
            echo '<h2 class="text-center"> Produto cadastrado com sucesso! </h2>';
            echo '<h2 class="text-center"> Aguarde 5 segundos ... </h2>';
            // Aguarde 5 segundos (5000 milissegundos)
            usleep(5000000);

            // Redirecione para a página index.php
            header("Location: cadastro.php");
            exit;
        } else {
            echo "Erro ao cadastrar o produto: " . mysqli_error($conexao);
        }
    } else {
        echo "Erro ao fazer o upload da imagem.";
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
}

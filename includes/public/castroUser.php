
<?php
// Inicie a sessão para obter os dados do usuário logado (verifique se você iniciou a sessão nas outras páginas também)
session_start();

// Verifique se o usuário está logado (você deve implementar a autenticação do usuário)
if (isset($_SESSION['email'])) {
    // Conecte-se ao banco de dados e obtenha o nível de acesso do usuário
    $host = '127.0.0.1';
    $usuario = 'root'; // Seu usuário do MySQL
    $senha = '';
    $banco = 'aloja';

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $email = $_SESSION['email'];
    $consulta_sql = "SELECT nivel FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $consulta_sql);

    if ($linha = mysqli_fetch_assoc($resultado)) {
        $nivel_acesso = $linha['nivel'];
        
        // Verifique o nível de acesso do usuário
        if ($nivel_acesso === 1) {
            // O usuário tem nível 1 e pode acessar esta página
        } else {
            // Redirecione o usuário para a página de vendas
            header("Location: pagina_de_vendas.php");
        }
    } else {
        // Não foi possível obter o nível de acesso do usuário
        header("Location: pagina_de_vendas.php");
    }

    mysqli_close($conexao);
} else {
    // O usuário não está logado, redirecione-o para a página de login
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
    <!-- Inclua os arquivos Bootstrap CSS para melhorar a aparência -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Cadastro de Usuário</h2>

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

        // Obter dados do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];

        // Consulta SQL para inserir o novo usuário no banco de dados
        $inserir_sql = "INSERT INTO usuarios (email, senha, nome) VALUES ('$email', '$senha', '$nome')";

        if (mysqli_query($conexao, $inserir_sql)) {
            echo '<div class="alert alert-success">Usuário cadastrado com sucesso. <a href="login.php">Faça login</a></div>';
        } else {
            echo '<div class="alert alert-danger">Erro ao cadastrar o usuário: ' . mysqli_error($conexao) . '</div>';
        }

        // Fechar a conexão com o banco de dados
        mysqli_close($conexao);
    }
    ?>
    
<?php
// Inicie a sessão para obter os dados do usuário logado (verifique se você iniciou a sessão nas outras páginas também)
session_start();

// Verifique se o usuário está logado (você deve implementar a autenticação do usuário)
if (isset($_SESSION['email'])) {
    // Conecte-se ao banco de dados e obtenha o nível de acesso do usuário
    $host = '127.0.0.1';
    $usuario = 'root'; // Seu usuário do MySQL
    $senha = '';
    $banco = 'aloja';

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $email = $_SESSION['email'];
    $consulta_sql = "SELECT nivel FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $consulta_sql);

    if ($linha = mysqli_fetch_assoc($resultado)) {
        $nivel_acesso = $linha['nivel'];
        
        // Verifique o nível de acesso do usuário
        if ($nivel_acesso === 1) {
            // O usuário tem nível 1 e pode acessar esta página
        } else {
            // Redirecione o usuário para a página de vendas
            header("Location: pagina_de_vendas.php");
        }
    } else {
        // Não foi possível obter o nível de acesso do usuário
        header("Location: pagina_de_vendas.php");
    }

    mysqli_close($conexao);
} else {
    // O usuário não está logado, redirecione-o para a página de login
    header("Location: login.php");
}
?>


    <form method="post" action="">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
</div>

</body>
</html>

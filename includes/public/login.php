<!DOCTYPE html>
<html>
<head>
    <title>Página de Login</title>
    <!-- Inclua os arquivos Bootstrap CSS para melhorar a aparência -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Login</h2>
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

        // Consulta SQL para verificar as credenciais
        $consulta = "SELECT id, email, nome FROM usuarios WHERE email='$email' AND senha='$senha'";
        $resultado = mysqli_query($conexao, $consulta);

        if (mysqli_num_rows($resultado) > 0) {
            // Usuário autenticado com sucesso, redirecionar para a página de venda
            session_start();
            $_SESSION['email'] = $email;
            header("Location: pagina_de_vendas.php");
        } else {
            echo '<div class="alert alert-danger">Email ou senha incorretos.</div>';
        }

        // Fechar a conexão com o banco de dados
        mysqli_close($conexao);
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
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>

    <p>Não tem uma conta? <a href="criar_conta.php">Criar uma conta</a></p>
</div>

</body>
</html>

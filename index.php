<?php
// Inicie a sessão para obter os dados do usuário logado (verifique se você iniciou a sessão nas outras páginas também)
session_start();

if (isset($_SESSION['email'])) {
    // O usuário está logado, redirecione para a página de vendas
    header("Location: ./includes/public/pagina_de_vendas.php");
    exit(); // Certifique-se de encerrar o script após o redirecionamento
}

// O usuário não está logado, redirecione para a página de login
header("Location: ./includes/public/login.php");
exit();
?>

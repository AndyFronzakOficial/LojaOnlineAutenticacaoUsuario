<?php
// Inicie a sessão para encerrá-la
session_start();

// Destrua todas as variáveis de sessão
session_destroy();

// Redirecione o usuário de volta para a página de login ou para a página inicial
header("Location: ./login.php"); // Substitua "login.php" pela página que você deseja redirecionar após o logoff
exit();
?>

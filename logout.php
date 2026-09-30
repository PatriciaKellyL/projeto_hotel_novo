<?php
// logout.php
session_start();      // Carrega a sessão atual
session_unset();      // Limpa as variáveis da sessão
session_destroy();    // Destrói a sessão no servidor

// Redireciona imediatamente para a página de login
header("Location: login_cliente.html");
exit();
?>

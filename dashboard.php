<?php
session_start(); // Iniciar a sessão

if (!isset($_SESSION['user'])) {
  // Redirecionar para o login se não estiver autenticado
  header("Location: login.html");
  exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Bem-vindo, <?php echo htmlspecialchars($user['name']); ?>!</h1>
    <!-- Conteúdo do dashboard -->
</body>
</html>

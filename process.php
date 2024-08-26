<?php
include 'db.php';

session_start(); // Iniciar a sessão

// Obter dados do formulário
$email = $_POST['email'];
$password = $_POST['password'];

// Consultar o banco de dados
$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $user = $result->fetch_assoc();
  
  // Salvar dados do usuário na sessão
  $_SESSION['user'] = $user;
  
  // Redirecionar para o dashboard
  header("Location: dashboard.php");
  exit();
} else {
  // Redirecionar de volta ao login com uma mensagem de erro
  header("Location: login.html?error=1");
  exit();
}

$stmt->close();
$conn->close();
?>

<?php
$erro = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $email_correto = "admin@gmail.com";
    $senha_correta = "123456789";

    if ($email === $email_correto && $senha === $senha_correta) {
        header("Location: newera.html");
        exit;
    } else {
        $erro = true;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrar</title>
  <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #4a88da;">
  <form>
    <?php if ($erro): ?>
      <h1>Erro ao entrar</h1>
      <p style="text-align: center;">Email ou senha incorretos.</p>
      <p style="text-align: center;"><a href="entrar.html">Tentar novamente</a></p>
    <?php else: ?>
      <h1>Acesso inválido</h1>
      <p style="text-align: center;">Nenhum dado enviado.</p>
      <p style="text-align: center;"><a href="entrar.html">Ir para o login</a></p>
    <?php endif; ?>
  </form>
</body>
</html>

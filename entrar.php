<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="atv2-1.css">
</head>
<body style="background-color: #4a88da;">
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $senha = $_POST['senha'];

    $email_correto = "admin@email.com";
    $senha_correta = "123456789";

    echo "<form>";
    if ($email === $email_correto && $senha === $senha_correta) {
        echo "<h1>Bem-vindo!</h1>";
        echo "<p style='text-align: center;'>Login realizado com sucesso com o email <strong>$email</strong>.</p>";
    } else {
        echo "<h1>Erro ao entrar</h1>";
        echo "<p style='text-align: center;'>Email ou senha incorretos.</p>";
        echo "<p style='text-align: center;'><a href='javascript:history.back()'>Tentar novamente</a></p>";
    }
    echo "</form>";
} else {
    echo "<p>Nenhum dado enviado.</p>";
}
?>

</body>
</html>


  <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Concluído</title>
    <link rel="stylesheet" href="atv2-1.css">
</head>
<body style="background-color: #4a88da;">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $senha = $_POST['senha'];

    echo "<form>";
    echo "<h1>Cadastro Realizado!</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Senha:</strong> (" . strlen($senha) . " caracteres)</p>";
    echo "<p style='text-align: center;'><a href='javascript:history.back()'>Voltar</a></p>";
    echo "</form>";
} else {
    echo "<p>Nenhum dado enviado.</p>";
}
?>

</body>
</html>

</body>
</html>
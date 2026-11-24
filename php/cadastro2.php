<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Concluído</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $senha = $_POST['senha'];

    echo "<form action='boas_vindas.html' method='get'>";
    echo "<h1>Cadastro Realizado!</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Senha:</strong> (" . strlen($senha) . " caracteres)</p>";
    echo "<p><input type='submit' value='Continuar'></p>";
    echo "<p style='text-align: center;'><a href='javascript:history.back()'>Voltar</a></p>";
    echo "</form>";
    
} else {
    echo "<form>";
    echo "<h1>Acesso Inválido</h1>";
    echo "<p>Nenhum dado enviado.</p>";
    echo "<p style='text-align: center;'><a href='index.html'>Ir para o Cadastro</a></p>";
    echo "</form>";
}
?>

</body>
</html>
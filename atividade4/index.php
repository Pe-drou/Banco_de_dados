<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Nomeses</title>
</head>
<body>
    <h1>Digite o seu nome</h1>
    <form method="POST">
    <input type="text" name="nome" placeholder="Nome" required>

    <button type="submit">Enviar</button>
    </form>
    <?php
        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
            echo "<p>Olá, $nome!</p>";
        }
    ?>
</body>
</html>
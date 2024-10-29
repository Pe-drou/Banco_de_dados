<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pode dirigir?</title>
</head>
<body>
    <h1>Verifique se você pode dirigir</h1>
    <form method="POST">
        <p>Digite sua idade:</p>
        <input type="text" name="idade" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if(isset($_POST['idade'])){
    if (($_POST['idade']) <= 18){
        echo "Tá cozido 💥🚗";
    } else {
        echo "Pó dirigi patrão 🚗💨";
    };
    };
    ?>
</body>
</html>
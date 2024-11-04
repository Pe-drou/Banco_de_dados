<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da semana</title>
</head>
<body>
    <p>digite o dia da semana (número)</p>
    <form method="POST">
        <input type="text" name="dia" required>
        <button type="submit">Enviar</button>
    </form>
<?php
if ($_POST['dia']){
    switch($dia){
    case 1:
        echo "domingo";
    break;
    case 2:
        echo "segunda";
    break;
    case 3:
        echo "terça";
    break;
    case 4:
        echo "quarta";
    break;
    case 5:
        echo "quinta";
    break;
    case 6:
        echo "sexta";
    break;
    case 7:
        echo "sábado";
    break;
    default:
        echo "the bluetooth devide is ready to pair";
    }
}
?>
</body>
</html>
<?php
$dia = 9;

switch($dia){
    case 1:
        echo "domingo";
    break;
    case 2:
        echo "segunda";
    break;
    case 3:
        echo "terça";
    break;
    case 4:
        echo "quarta";
    break;
    case 5:
        echo "quinta";
    break;
    case 6:
        echo "sexta";
    break;
    case 7:
        echo "sábado";
    break;
    default:
        echo "the bluetooth devide is ready to pair";
}
?>
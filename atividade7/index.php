<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Escolha uma bebida<br>Refrigerante: 1<br>Suco: 2<br>Água: 3</p>
    <form method="POST">
        <input type="text" name="bebida" placeholder="insira a que desejas">
        <button type="submit">Concluir</button>
    </form>
<?php
    if(isset($_POST['bebida'])){
        switch($_POST['bebida']){
        case 1:
            $nomebebida = "Refrigerante";
            $preco = number_format(6.00, 2, ',');
        break;
        case 2:
            $nomebebida = "Suco";
            $preco = number_format(4.00, 2, ',');
        break;
        case 3:
            $nomebebida="Água";
            $preco = number_format(3.00, 2, ',');
        break;
        default:
            echo "<p>Bomba.<br>💥💥💥💥💥💥💥💥💥💥💥💥💥💥💥💥💥💥💥💥💥</p>";
        exit;
        };
    };
    if (isset($nomebebida) || isset($preco)){
        echo "<p>Voce escolheu: $nomebebida<br>Preço: R$ $preco</p>";
    };
?>
</body>
</html>

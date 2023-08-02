<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .pergunta {
            font-weight: bold;
        }

        ul {
            list-style-type: none;
        }

        ul li {
            counter-increment: contador;
            position: relative;
        }

        ul li:before {
            content: counter(contador, upper-alpha) ") ";
            position: absolute;
            left: -20px;
        }
        
        .resposta-certa {
            color: green;
        }
    </style>
    <title>Questão 3</title>
</head>

<body>
    <h3 style="width: 99%; background-color: #CCCCCC; padding: 10px;">Desenvolvimento Web</h3>
    <h3 style="width: 99%; background-color: #000000; color: #FFF; padding: 10px;">Trabalho: Questão 03</h3>
    <main>
        <p class="pergunta"> <span style="background-color: yellow;">Q2.</span> Proin euismod, nisi a consequat rhoncus, augue lacus tincidunt mi id mauris?</p>
        <ul>
            <li><a href="question3_c.php?<?php echo "resp1={$_GET['resp1']}"; ?>&resp2=1">Nam ullamcorper mi quis velit efficitur, eu dignissim arcu feugiat.</a></li>
            <li><a class="resposta-certa" href="question3_c.php?<?php echo "resp1={$_GET['resp1']}"; ?>&resp2=2">Nunc maximus nulla ac velit sollicitudin, in interdum velit feugiat.</a></li>
            <li><a href="question3_c.php?<?php echo "resp1={$_GET['resp1']}"; ?>&resp2=3">Fusce ullamcorper elit a elit faucibus, at egestas urna tempor.</a></li>
            <li><a href="question3_c.php?<?php echo "resp1={$_GET['resp1']}"; ?>&resp2=4">Nulla facilisi. Quisque nec urna vitae ex facilisis facilisis.</a></li>
            <li><a href="question3_c.php?<?php echo "resp1={$_GET['resp1']}"; ?>&resp2=5">Sed elementum est a dui vestibulum, quis fermentum lectus molestie.</a></li>
        </ul>

        <a href="question3_a.php">Cancelar</a>
        <br><br><a href="../../index.php">Página inicial</a>
    </main>
</body>

</html>
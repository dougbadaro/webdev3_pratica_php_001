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
        <p class="pergunta"> <span style="background-color: yellow;">Q4.</span> Aliquam in dui sit amet sapien euismod aliquam?</p>
        <ul>
            <li><a href="question3_resultado.php?<?php echo "resp1={$_GET['resp1']}"; echo "&resp2={$_GET['resp2']}"; ; echo "&resp3={$_GET['resp3']}"; ?>&resp4=1">Sed eget velit nec diam laoreet finibus.</a></li>
            <li><a href="question3_resultado.php?<?php echo "resp1={$_GET['resp1']}"; echo "&resp2={$_GET['resp2']}"; ; echo "&resp3={$_GET['resp3']}"; ?>&resp4=2">Quisque vitae justo id urna iaculis euismod.</a></li>
            <li><a href="question3_resultado.php?<?php echo "resp1={$_GET['resp1']}"; echo "&resp2={$_GET['resp2']}"; ; echo "&resp3={$_GET['resp3']}"; ?>&resp4=3">Nulla facilisi. Integer euismod, ex nec vehicula pellentesque.</a></li>
            <li><a class="resposta-certa" href="question3_resultado.php?<?php echo "resp1={$_GET['resp1']}"; echo "&resp2={$_GET['resp2']}"; ; echo "&resp3={$_GET['resp3']}"; ?>&resp4=4">Fusce eu sem quis justo tristique auctor.</a></li>
            <li><a href="question3_resultado.php?<?php echo "resp1={$_GET['resp1']}"; echo "&resp2={$_GET['resp2']}"; ; echo "&resp3={$_GET['resp3']}"; ?>&resp4=5">Praesent ut mauris eget nibh bibendum egestas.</a></li>
        </ul>

        <a href="question3_a.php">Cancelar</a>
        <br><br><a href="../../index.php">Página inicial</a>
    </main>
</body>

</html>
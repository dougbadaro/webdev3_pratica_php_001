<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
    </style>
    <title>Questão 3</title>
</head>

<body>
    <h3 style="width: 99%; background-color: #CCCCCC; padding: 10px;">Desenvolvimento Web</h3>
    <h3 style="width: 99%; background-color: #000000; color: #FFF; padding: 10px;">Trabalho: Questão 03</h3>
    <main>
        <p class="pergunta"> <span style="background-color: yellow; font-weight: bold;">Q1.</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at magna eu velit rhoncus ornare?</p>
        <ul>
            <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?resp=resp1-1">Etiam at magna.</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?resp=resp1-2">Sed non velit non tortor.</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?resp=resp1-3">Nullam vel vestibulum sem.</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?resp=resp1-4">Fusce quis libero euismod.</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?resp=resp1-5">Cras libero magna, scelerisque at mi finibus.</a></li>
        </ul>

        <?php
        // if (!isset($_GET['resposta'])) {
        //     $resposta = '';
        // } else {
        //     $resposta = $_GET['resposta'];
        // }

        // if (isset($_GET('resposta'))) {
        //     echo "<input type=\"hidden\" name=\"{$_GET['resposta']}\">";
        // }
       function addResp($resp)
        {
            global $respostas;
            $respostas[] = $resp;
        }

        if (!isset($respostas)) {
            $respostas = array();
        } 
        else {
            if (isset($_GET['resp'])) {
                $respClicada = $_GET['resp'];
                echo "<input type=\"hidden\" name=\"respostas[]\" value=\"$respClicada\">";
                addResp($respClicada);
            }
        }
        if (isset($respostas)) {
            foreach ($respostas as $item) {
                echo "<h1>$item</h1>";
            }
        }
//     session_start();

// function addResp($resp)
// {
//     if (!in_array($resp, $_SESSION['respostas'])) {
//         $_SESSION['respostas'][] = $resp;
//     }
// }

// if (!isset($_SESSION['respostas'])) {
//     $_SESSION['respostas'] = array();
// } else {
//     if (isset($_GET['resp'])) {
//         $respClicada = $_GET['resp'];
//         addResp($respClicada);
//     }
// }

        ?> 

        <a href="../index.php">Página inicial</a>
    </main>
</body>

</html>
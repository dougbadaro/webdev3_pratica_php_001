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

  body {
    height: calc(100vh - 16px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 40px;
  }
  </style>
  <title>Questão 3</title>

  <link rel="stylesheet" href="../../style.css">
</head>

<body>
  <header>
    <h3 style="background-color: #CCCCCC;">Desenvolvimento Web</h3>
    <h3 style="background-color: #000000; color: #FFF;">Trabalho: Questão 01</h3>
  </header>
  <main>
    <p class="pergunta"> <span style="background-color: yellow;">Q3.</span> Morbi a auctor ex. Vestibulum ut fringilla
      nulla, nec lacinia felis?</p>
    <ul>
      <li><a href="question3_d.php?<?php echo "resp1={$_GET['resp1']}";
                                            echo "&resp2={$_GET['resp2']}"; ?>&resp3=1">Phasellus
          sed ante sit amet urna consequat viverra.</a></li>
      <li><a href="question3_d.php?<?php echo "resp1={$_GET['resp1']}";
                                            echo "&resp2={$_GET['resp2']}"; ?>&resp3=2">Integer
          id sapien eu eros gravida tempus.</a></li>
      <li><a class="resposta-certa" href="question3_d.php?<?php echo "resp1={$_GET['resp1']}";
                                                                echo "&resp2={$_GET['resp2']}"; ?>&resp3=3">Nunc
          vehicula odio id volutpat sagittis.</a></li>
      <li><a href="question3_d.php?<?php echo "resp1={$_GET['resp1']}";
                                            echo "&resp2={$_GET['resp2']}"; ?>&resp3=4">Vivamus
          vel felis ac eros cursus cursus a ac turpis.</a></li>
      <li><a href="question3_d.php?<?php echo "resp1={$_GET['resp1']}";
                                            echo "&resp2={$_GET['resp2']}"; ?>&resp3=5">Duis
          consectetur erat eget diam scelerisque eleifend.</a></li>
    </ul>

    <a href="question3_a.php">Cancelar</a>
  </main>
  <footer>
    <hr>
    <a href="../../index.php">
      <h4 style="background-color: #CCCCCC;">Página Inicial</h4>
    </a>
    <h4 style="background-color: #CCCCCC;">Douglas Badaró e Lorena Zuba - &copy 2023</h4>
  </footer>
</body>

</html>
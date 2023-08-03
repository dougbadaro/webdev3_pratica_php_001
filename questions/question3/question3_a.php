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
    <p class="pergunta"> <span style="background-color: yellow;">Q1.</span> Lorem ipsum dolor sit amet, consectetur
      adipiscing elit. Etiam at magna eu velit rhoncus ornare?</p>
    <ul>
      <li><a class="resposta-certa" href="question3_b.php?resp1=1">Etiam at magna.</a></li>
      <li><a href="question3_b.php?resp1=2">Sed non velit non tortor.</a></li>
      <li><a href="question3_b.php?resp1=3">Nullam vel vestibulum sem.</a></li>
      <li><a href="question3_b.php?resp1=4">Fusce quis libero euismod.</a></li>
      <li><a href="question3_b.php?resp1=5">Cras libero magna, scelerisque at mi finibus.</a></li>
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
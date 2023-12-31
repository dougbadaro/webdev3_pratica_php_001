<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/549d3529d7.js" crossorigin="anonymous"></script>
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
    <?php
        #region Correção
        //Correção questão 1
        function correcao1()
        {
            if ($_GET['resp1'] == 1) /*Certa*/ {
                echo "A <i class=\"fa-regular fa-circle-check\"></i>";
            } //Erradas:
            else if ($_GET['resp1'] == 2) {
                echo "B <i class=\"fa-regular fa-circle-xmark\"></i>";
            } else if ($_GET['resp1'] == 3) {
                echo "C <i class=\"fa-regular fa-circle-xmark\"></i>";
            } else if ($_GET['resp1'] == 4) {
                echo "D <i class=\"fa-regular fa-circle-xmark\"></i>";
            } else if ($_GET['resp1'] == 5) {
                echo "E <i class=\"fa-regular fa-circle-xmark\"></i>";
            }
        }


        //Correção questão 2
        function correcao2()
        {
            if ($_GET['resp2'] == 2) /*Certa*/ {
                echo "B <i class=\"fa-regular fa-circle-check\"></i>";
            } //Erradas: 
            else if ($_GET['resp2'] == 1) {
                echo "A <i class=\"fa-regular fa-circle-xmark\"></i>";
            } else if ($_GET['resp2'] == 3) {
                echo "C <i class=\"fa-regular fa-circle-xmark\"></i>";
            } else if ($_GET['resp2'] == 4) {
                echo "D <i class=\"fa-regular fa-circle-xmark\"></i>";
            } else if ($_GET['resp2'] == 5) {
                echo "E <i class=\"fa-regular fa-circle-xmark\"></i>";
            }
        }

        //Correção questão 3
        function correcao3()
        {
            if ($_GET['resp3'] == 3) /*Certa*/ {
                echo "C <i class=\"fa-regular fa-circle-check\"></i>";
            } //Erradas:
            else if ($_GET['resp3'] == 1) {
                echo "A <i class=\"fa-regular fa-circle-xmark\"></i>";
            } else if ($_GET['resp3'] == 2) {
                echo "B <i class=\"fa-regular fa-circle-xmark\"></i>";
            } else if ($_GET['resp3'] == 4) {
                echo "D <i class=\"fa-regular fa-circle-xmark\"></i>";
            } else if ($_GET['resp3'] == 5) {
                echo "E <i class=\"fa-regular fa-circle-xmark\"></i>";
            }
        }

        //Correção questão 4
        function correcao4()
        {
            if ($_GET['resp4'] == 4) /*Certa*/ {
                echo "D <i class=\"fa-regular fa-circle-check\"></i>";
            } //Erradas:
            else if ($_GET['resp4'] == 1) {
                echo "A <i class=\"fa-regular fa-circle-xmark\"></i>";
            } else if ($_GET['resp4'] == 2) {
                echo "B <i class=\"fa-regular fa-circle-xmark\"></i>";
            } else if ($_GET['resp4'] == 3) {
                echo "C <i class=\"fa-regular fa-circle-xmark\"></i>";
            } else if ($_GET['resp4'] == 5) {
                echo "E <i class=\"fa-regular fa-circle-xmark\"></i>";
            }
        }
        #endregion

        ?>
    <p class="pergunta"> Resultado</p>
    <ol>
      <li><?php correcao1() ?></li>
      <li><?php correcao2() ?></li>
      <li><?php correcao3() ?></li>
      <li><?php correcao4() ?></li>
    </ol>

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
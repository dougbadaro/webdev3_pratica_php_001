<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 2</title>

  <link rel="stylesheet" href="../style.css">

  <style>
  .baixo-muito-grave {
    background-color: #000099;
  }

  .baixo-grave {
    background-color: #0000CC;
  }

  .baixo {
    background-color: #0000FF;
  }

  .ideal {
    background-color: #00FF00;
  }

  .sobrepeso {
    background-color: #FFFF00;
  }

  .obesidade-1 {
    background-color: #FD0000;
  }

  .obesidade-2 {
    background-color: #CC0000;
  }

  .obesidade-3 {
    background-color: #990000;
  }

  .baixo-muito-grave:hover {
    opacity: 10%;
  }

  .baixo-grave:hover {
    opacity: 10%;
  }

  .baixo:hover {
    opacity: 10%;
  }

  .ideal:hover {
    opacity: 30%;
  }

  .sobrepeso:hover {
    opacity: 30%;
  }

  .obesidade-1:hover {
    opacity: 30%;
  }

  .obesidade-2:hover {
    opacity: 30%;
  }

  .obesidade-3:hover {
    opacity: 30%;
  }

  main {
    display: block;
    max-width: 100vw;
    overflow-x: auto;
  }

  table {
    width: 100%;
    padding: 30px;
  }

  td,
  th {
    height: 20px;
    width: 20px;
  }

  @media (max-width: 1400px) {
    table {
      padding-right: 0;
      padding-left: 0;
    }
  }
  </style>
</head>

<body style="display: flex; flex-direction: column; justify-content: space-between;">
  <?php
  $compositionTable = [];

  for ($i = 146; $i <= 210; $i++) {
    $innitTable = array();
    for ($j = 46; $j <= 120; $j++) {
      $innitTable[$j] = $j;
    }
    $compositionTable[$i] = $innitTable;
  }

  function calcImc($weight, $height)
  {
    return number_format(($weight / ($height / 100) ** 2), 2, ',', '.');
  }

  function defineClass($imc)
  {
    switch (true) {
      case 0 <= $imc && $imc < 16:
        return 'baixo-muito-grave';
      case 16 <= $imc && $imc < 17:
        return 'baixo-grave';
      case 17 <= $imc && $imc < 18.5:
        return 'baixo';
      case 18.5 <= $imc && $imc < 25:
        return 'ideal';
      case 25 <= $imc && $imc < 30:
        return 'sobrepeso';
      case 30 <= $imc && $imc < 35:
        return 'obesidade-1';
      case 35 <= $imc && $imc < 40:
        return 'obesidade-2';
      case 40 <= $imc:
        return 'obesidade-3';
    }
  }
  ?>
  <header>
    <h3 style="background-color: #CCCCCC;">Desenvolvimento Web</h3>
    <h3 style="background-color: #000000; color: #FFF;">Trabalho: Questão 02</h3>
  </header>

  <main>
    <table>
      <tr>
        <th></th>
        <?php
        for ($x = 46; $x <= 120; $x++) {
          echo '<th style="writing-mode: vertical-rl; transform: rotate(180deg);">' . $compositionTable[146][$x] . '</th>';
        }
        ?>
      </tr>
      <?php
      foreach ($compositionTable as $key => $innerArray) {
        echo '<tr>';
        echo '<th>' . $key . '</th>';
        foreach ($innerArray as $keyInner => $value) {
          echo '<td title="' . ucfirst(defineClass(calcImc($value, $key))) . '&#013;' . $value . ' kg &#013;' . $key . ' cm &#013;' . calcImc($value, $key) . '" style="cursor: pointer;" class="' . defineClass(calcImc($value, $key)) . '"/>';
        }
        echo '</tr>';
      }
      ?>

    </table>
  </main>
  <footer>
    <hr>
    <a href="../index.php">
      <h4 style="background-color: #CCCCCC;">Página Inicial</h4>
    </a>
    <h4 style="background-color: #CCCCCC;">Douglas Badaró e Lorena Zuba - &copy 2023</h4>
  </footer>
</body>

</html>
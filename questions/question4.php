<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 4</title>

  <link rel="stylesheet" href="../style.css">

  <style>
  body {
    height: calc(100vh - 16px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 40px;
  }

  fieldset {
    margin-inline-start: 2px;
    margin-inline-end: 2px;
    padding-block-start: 0.35em;
    padding-inline-start: 0.75em;
    padding-inline-end: 0.75em;
    padding-block-end: 0.625em;
    padding-bottom: 10px;
  }

  main {
    display: block;
    max-width: 100vw;
    overflow-x: auto;
  }

  .form {
    display: flex;
    flex-direction: column;
  }

  .table-container {
    width: 100%;
    display: flex;
    justify-content: center;
    padding-top: 30px;
  }

  table {
    border-collapse: collapse;
  }

  tr {
    border-top: 1px solid #000000;
    border-bottom: 1px solid #000000;
    text-align: center;
  }

  th {
    padding-right: 10px;
    padding-left: 10px;
  }
  </style>
</head>

<body>
  <?php
  $source = isset($_GET['aporteInicial']) && isset($_GET['periodo']) && $_GET['periodo'] && isset($_GET['rendimento']) && isset($_GET['aporteMensal']);

  function calcularSimulacao($aporteInicial, $periodo, $rendimento, $aporteMensal)
  {
    $data = array();

    $total = $aporteInicial + ($aporteInicial * ($rendimento / 100));

    $arraySimulacao = array(
      'mes' => 1,
      'valorInicial' => $aporteInicial,
      'aporte' => '---',
      'rendimento' => number_format($aporteInicial * ($rendimento / 100), 2, ',', '.'),
      'total' => number_format($total, 2, ',', '.'),
    );

    $data[] = $arraySimulacao;

    for ($i = 2; $i <= $periodo; $i++) {
      $valorRendido = ($total + $aporteMensal) * ($rendimento / 100);
      $total += $aporteMensal + $valorRendido;

      $arraySimulacao = array(
        'mes' => $i,
        'valorInicial' => $total - ($aporteMensal + $valorRendido),
        'aporte' => $aporteMensal,
        'rendimento' => number_format($valorRendido, 2, ',', '.'),
        'total' => number_format($total, 2, ',', '.'),
      );

      $data[] = $arraySimulacao;
    }

    return $data;
  }

  function simulacao($aporteInicial, $periodo, $rendimento, $aporteMensal)
  {
    $data = calcularSimulacao($aporteInicial, $periodo, $rendimento, $aporteMensal);

    foreach ($data as $value) {
      echo '<tr>';
      echo '<td>' . $value['mes'] . '</td>';
      echo '<td>' . number_format($value['valorInicial'], 2, ',', '.') . '</td>';
      echo '<td>' . $value['aporte'] . '</td>';
      echo '<td>' . $value['rendimento'] . '</td>';
      echo '<td>' . $value['total'] . '</td>';
      echo '</tr>';
    }
  }
  ?>

  <header>
    <h3 style="background-color: #CCCCCC;">Desenvolvimento Web</h3>
    <h3 style="background-color: #000000; color: #FFF;">Trabalho: Questão 04</h3>
  </header>

  <main>
    <fieldset>
      <legend>Parâmetros</legend>

      <form action="question4.php" method="get">
        <div class="form">
          <div>
            <label for="aporteInicial">Aporte inicial (R$):</label>
            <input type="number" name="aporteInicial" id="aporteInicial" step="0.01" min="0.01" max="999999.99"
              required>
          </div>

          <div>
            <label for="periodo">Período (meses)</label>
            <input type="number" name="periodo" id="periodo" min="1" max="480" required>
          </div>

          <div>
            <label for="rendimento">Rendimento mensal (%):</label>
            <input type="number" name="rendimento" id="rendimento" step="0.01" min="0.01" max="20" required>
          </div>

          <div>
            <label for="aporteMensal">Aporte mensal: </label>
            <input type="number" name="aporteMensal" id="aporteMensal" step="0.01" min="0.01" max="999999.99" required>
          </div>
        </div>
        <button type="submit">Processar</button>
      </form>

    </fieldset>

    <div class="table-container">
      <?php
      if ($source) {
        $aporteInicial = $_GET['aporteInicial'];
        $periodo = $_GET['periodo'];
        $rendimento = $_GET['rendimento'];
        $aporteMensal = $_GET['aporteMensal'];

        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Mês</th>';
        echo '<th>Valor Inicial (R$)</th>';
        echo '<th>Aporte (R$)</th>';
        echo '<th>Rendimento (R$)</th>';
        echo '<th>Total (R$)</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        simulacao($aporteInicial, $periodo, $rendimento, $aporteMensal);
        echo '</tbody>';
        echo '</table>';
      }
      ?>
    </div>
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
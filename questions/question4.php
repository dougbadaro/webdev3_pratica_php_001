<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 4</title>

  <style>
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

<body style="height: 98vh; display: flex; flex-direction: column; justify-content: space-between;">
  <?php
  $source = isset($_GET['aporteInicial']) && isset($_GET['periodo']) && $_GET['periodo'] && isset($_GET['rendimento']) && isset($_GET['aporteMensal']);

  function simulacao($aporteInicial, $periodo, $rendimento, $aporteMensal)
  {
    $total = $aporteInicial + ($aporteInicial * ($rendimento / 100));

    echo '<tr>';
    echo '<td>1</td>';
    echo '<td>' . number_format($aporteInicial, 2) . '</td>';
    echo '<td>---</td>';
    echo '<td>' . number_format($aporteInicial * ($rendimento / 100), 2) . '</td>';
    echo '<td>' . number_format($total, 2) . '</td>';
    echo '</tr>';

    for ($i = 2; $i <= $periodo; $i++) {
      $valorRendido = ($total + $aporteMensal) * ($rendimento / 100);
      echo '<tr>';
      echo '<td>' . $i . '</td>';
      echo '<td>' . number_format($total, 2) . '</td>';
      echo '<td>' . number_format($aporteMensal, 2) . '</td>';
      echo '<td>' . number_format($valorRendido, 2) . '</td>';

      $total = $total + $aporteMensal + $valorRendido;

      echo '<td>' . number_format($total, 2) . '</td>';
      echo '</tr>';
    }
  }
  ?>

  <div>
    <h3 style="width: 99%; background-color: #CCCCCC; padding: 10px;">Desenvolvimento Web</h3>
    <h3 style="width: 99%; background-color: #000000; color: #FFF; padding: 10px;">Trabalho: Questão 04</h3>

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
  </div>

  <div>
    <h4><a href="../index.php">Página Inicial</a></h4>
    <h4 style="width: 99%; background-color: #CCCCCC; padding: 5px;">Douglas Badaró e Lorena Zuba - &copy 2023</h4>
  </div>
</body>

</html>
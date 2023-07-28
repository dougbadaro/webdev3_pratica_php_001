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
  </style>
</head>

<body>
  <?php
  function mask($val, $mask)
  {
    $maskared = '';
    $k = 0;
    for ($i = 0; $i <= strlen($mask) - 1; $i++) {
      if ($mask[$i] == '#') {
        if (isset($val[$k]))
          $maskared .= $val[$k++];
      } else {
        if (isset($mask[$i]))
          $maskared .= $mask[$i];
      }
    }
    return $maskared;
  }
  ?>

  <h3 style="width: 99%; background-color: #CCCCCC; padding: 10px;">Desenvolvimento Web</h3>
  <h3 style="width: 99%; background-color: #000000; color: #FFF; padding: 10px;">Trabalho: Questão 04</h3>

  <fieldset>
    <legend>Parâmetros</legend>

    <div class="form">
      <div>
        <label for="aporteInicial">Aporte inicial (R$):</label>
        <input type="number" name="aporteInicial" id="aporteInicial" min="0.01" max="999999.99">
      </div>

      <div>
        <label for="periodo">Período (meses)</label>
        <input type="number" name="periodo" id="periodo" min="1" max="480">
      </div>

      <div>
        <label for="rendimento">Rendimento mensal (%):</label>
        <input type="number" name="rendimento" id="rendimento" min="1" max="20">
      </div>

      <div>
        <label for="aporteMensal">Aporte mensal: </label>
        <input type="number" name="aporteMensal" id="aporteMensal" min="0.01" max="999999.99">
      </div>
    </div>

    <button type="submit">Processar</button>
  </fieldset>
</body>

</html>
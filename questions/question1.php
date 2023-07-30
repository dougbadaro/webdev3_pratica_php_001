<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Questão 1</title>
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

  p {
    padding: 0.8px;
  }
  </style>
</head>

<body>
  <header>
    <h3 style="background-color: #CCCCCC;">Desenvolvimento Web</h3>
    <h3 style="background-color: #000000; color: #FFF;">Trabalho: Questão 01</h3>
  </header>
  <main>
    <form action="question1.php" method="get">
      <fieldset>

        <legend>Critérios para geração</legend>

        <p>Quantidade de elementos
          <input type="number" name="qntdelementos" id="qnte" min="1" max="15" value="<?php echo selecionado(); ?>"
            onchange="this.form.submit()">
          <label for="qnte">(1 a 15)</label>
        </p>

        <input type="radio" name="criterio" id="text" value="text" <?php echo marcado('text'); ?>
          onchange="this.form.submit()">
        <label for="text">Texto</label> <br>

        <input type="radio" name="criterio" id="password" value="password" <?php echo marcado('password'); ?>
          onchange="this.form.submit()">
        <label for="password">Senha</label> <br>

        <input type="radio" name="criterio" id="button" value="button" <?php echo marcado('button'); ?>
          onchange="this.form.submit()">
        <label for="button">Botão</label> <br>

        <input type="radio" name="criterio" id="radio" value="radio" <?php echo marcado('radio'); ?>
          onchange="this.form.submit()">
        <label for="radio">Rádio</label> <br>

        <input type="radio" name="criterio" id="checkbox" value="checkbox" <?php echo marcado('checkbox'); ?>
          onchange="this.form.submit()">
        <label for="checkbox">Caixa de Seleção</label> <br>

        <input type="radio" name="criterio" id="range" value="range" <?php echo marcado('range'); ?>
          onchange="this.form.submit()">
        <label for="range">Faixa</label> <br>

      </fieldset>
    </form>

    <?php
    function marcado($value)
    {
      if (isset($_GET['criterio']) && $_GET['criterio'] === $value) {
        echo "checked";
      }
    }

    //Mantém o número da lista de seleção
    function selecionado()
    {
      if (isset($_GET['qntdelementos'])) {
        return $_GET['qntdelementos'];
      } else {
        return 1;
      }
    }

    // Se a página foi iniciada pela primeira vez, definindo os valores padrão
    if (!isset($_GET['criterio'])) {
      $qntdelementos = selecionado();
      $criterio = 'text'; // Critério padrão, pode ser qualquer valor desejado.
    } else {
      $qntdelementos = $_GET['qntdelementos'];
      $criterio = $_GET['criterio'];
    }

    #region Ifs para cada radion button
    //Text
    if (isset($_GET['criterio']) && isset($_GET['qntdelementos'])) {
      $criterio = $_GET['criterio'];
      if ($criterio === 'text') {
        for ($i = 1; $i <= ($_GET['qntdelementos']); $i++) {
          echo "<input type=\"text\" name=\"text$i\" id=\"text$i\"><br>";
        }
      }
    }

    //Password
    if (isset($_GET['criterio']) && isset($_GET['qntdelementos'])) {
      $criterio = $_GET['criterio'];
      if ($criterio === 'password') {
        for ($i = 1; $i <= ($_GET['qntdelementos']); $i++) {
          echo "<input type=\"password\" name=\"senha$i\" id=\"senha$i\"><br>";
        }
      }
    }

    //Button
    if (isset($_GET['criterio']) && isset($_GET['qntdelementos'])) {
      $criterio = $_GET['criterio'];
      if ($criterio === 'button') {
        for ($i = 1; $i <= ($_GET['qntdelementos']); $i++) {
          echo "<input type=\"button\" name =\"botao$i\" value=\"Botão $i\"><br>";
        }
      }
    }

    //Radio
    if (isset($_GET['criterio']) && isset($_GET['qntdelementos'])) {
      $criterio = $_GET['criterio'];
      if ($criterio === 'radio') {
        for ($i = 1; $i <= ($_GET['qntdelementos']); $i++) {
          echo "<input type=\"radio\" name=\"Radio\" id=\"radio$i\">";
          echo "<label for=\"radio$i\">Radio $i</label> <br>";
        }
      }
    }

    //Checkbox
    if (isset($_GET['criterio']) && isset($_GET['qntdelementos'])) {
      $criterio = $_GET['criterio'];
      if ($criterio === 'checkbox') {
        for ($i = 1; $i <= ($_GET['qntdelementos']); $i++) {
          echo "<input type=\"checkbox\" name=\"checkbox$i\" id=\"checkbox$i\" value=\"checkbox$i\">";
          echo "<label for=\"checkbox$i\">Caixa de seleção $i</label> <br>";
        }
      }
    }

    //Range
    if (isset($_GET['criterio']) && isset($_GET['qntdelementos'])) {
      $criterio = $_GET['criterio'];
      if ($criterio === 'range') {
        for ($i = 1; $i <= ($_GET['qntdelementos']); $i++) {
          $value = 6.7 * $i;
          echo "<input type=\"range\" name=\"range$i\" id=\"range$i\" min=\"0\" max=\"100\" value=\"$value\" >";
          echo "<label for=\"range$i\">Faixa $i</label> <br>";
        }
      }
    }
    #endregion

    #region Códigos em texto para aparecer na tela
    //Código da textbox
    if (isset($_GET['criterio']) && isset($_GET['qntdelementos'])) {
      $criterio = $_GET['criterio'];
      if ($criterio === 'text') {
        $text = array(); // Cria um array para armazenar os códigos em texto

        for ($i = 1; $i <= $qntdelementos; $i++) {
          $text[] = '<input type="text" name="text' . $i . '" id="text' . $i . '"><br>';
        }

        // Exibe o código PHP na tela usando htmlspecialchars
        echo "<pre>";
        foreach ($text as $input) {
          echo htmlspecialchars($input) . "\n";
        }
        echo "</pre>";
      }
    }

    //Código da password
    if (isset($_GET['criterio']) && isset($_GET['qntdelementos'])) {
      $criterio = $_GET['criterio'];
      if ($criterio === 'password') {
        $password = array(); // Cria um array para armazenar os códigos em texto

        for ($i = 1; $i <= $qntdelementos; $i++) {
          $password[] = '<input type="password" name="senha' . $i . '" id="senha' . $i . '"><br>';
        }

        // Exibe o código PHP na tela usando htmlspecialchars
        echo "<pre>";
        foreach ($password as $input) {
          echo htmlspecialchars($input) . "\n";
        }
        echo "</pre>";
      }
    }

    //Código do button
    if (isset($_GET['criterio']) && isset($_GET['qntdelementos'])) {
      $criterio = $_GET['criterio'];
      if ($criterio === 'button') {
        $button = array(); // Cria um array para armazenar os códigos em texto

        for ($i = 1; $i <= $qntdelementos; $i++) {
          $button[] = '<input type="button" name="botao' . $i . '" id="botao' . $i . '"><br>';
        }

        // Exibe o código PHP na tela usando htmlspecialchars
        echo "<pre>";
        foreach ($button as $input) {
          echo htmlspecialchars($input) . "\n";
        }
        echo "</pre>";
      }
    }

    //Código do radio
    if (isset($_GET['criterio']) && isset($_GET['qntdelementos'])) {
      $criterio = $_GET['criterio'];
      if ($criterio === 'radio') {
        $radio = array(); // Cria um array para armazenar os códigos em texto

        for ($i = 1; $i <= $qntdelementos; $i++) {
          $radio[] = '<input type="radio" name="botao' . $i . '" id="radio' . $i . '"> <label for="radio' . $i . '">Radio ' . $i . '</label><br>';
        }

        // Exibe o código PHP na tela usando htmlspecialchars
        echo "<pre>";
        foreach ($radio as $input) {
          echo htmlspecialchars($input) . "\n";
        }
        echo "</pre>";
      }
    }

    //Código da caixa de seleção
    if (isset($_GET['criterio']) && isset($_GET['qntdelementos'])) {
      $criterio = $_GET['criterio'];
      if ($criterio === 'checkbox') {
        $checkbox = array(); // Cria um array para armazenar os códigos em texto

        for ($i = 1; $i <= $qntdelementos; $i++) {
          $checkbox[] = '<input type="checkbox" name="checkbox' . $i . '" id="checkbox' . $i . '" value="checkbox' . $i . '"> <label for="checkbox' . $i . '">Caixa de Seleção ' . $i . '</label><br>';
        }

        // Exibe o código PHP na tela usando htmlspecialchars
        echo "<pre>";
        foreach ($checkbox as $input) {
          echo htmlspecialchars($input) . "\n";
        }
        echo "</pre>";
      }
    }

    //Código da faixa
    if (isset($_GET['criterio']) && isset($_GET['qntdelementos'])) {
      $criterio = $_GET['criterio'];
      if ($criterio === 'range') {
        $range = array(); // Cria um array para armazenar os códigos em texto

        for ($i = 1; $i <= $qntdelementos; $i++) {
          $value = 6.7 * $i;
          $range[] = '<input type="range" name="range' . $i . '"id="range' . $i . '" min="0" max="100" value="' . $value . '"> <label for="range' . $i . '">Faixa ' . $i . '</label><br>';
        }

        // Exibe o código PHP na tela usando htmlspecialchars
        echo "<pre>";
        foreach ($range as $input) {
          echo htmlspecialchars($input) . "\n";
        }
        echo "</pre>";
      }
    }
    #endregion

    ?>


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
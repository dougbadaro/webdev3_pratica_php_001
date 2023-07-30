<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalho PHP</title>

  <link rel="stylesheet" href="../style.css">

  <style>
    body {
      height: calc(100vh - 16px);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
    }

    .content {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .content div:first-child {
      width: max-content;
      height: max-content;
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
      gap: 30px;

      background-color: #CCCCCC;
      border: 10px solid #000000;

      padding: 50px;
    }

    .links {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    footer {
      width: 100vw;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="content">
    <div>
      <h1>Trabalho PHP</h1>
      <div class="links">
        <a href="questions/question1.php">Questão 1</a>
        <a href="questions/question2.php">Questão 2</a>
        <a href="questions/question3.php">Questão 3</a>
        <a href="questions/question4.php">Questão 4</a>
      </div>
    </div>
  </div>
  <footer>
    <h4 style="background-color: #CCCCCC;">Douglas Badaró e Lorena Zuba - &copy 2023</h4>
  </footer>
</body>

</html>
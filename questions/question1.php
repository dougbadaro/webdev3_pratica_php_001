<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalho PHP</title>
</head>

<body style="display: flex; flex-direction: column;">
  <h1>Trabalho PHP</h1>
  <main>
    <!-- <form action="geracao.php" method="get"> -->
        <fieldset>
            <legend>Critérios para avaliação</legend>
            
            <p>Quantidade de elementos
            <input type="number" name="qntdelementos" id="qnte" min="1" max="15">
            <label for="qnte">(1 a 15)</label></p>

            <input type="radio" name="criterio" id="texto" value="text">
            <label for="texto">Texto</label> <br>

            <input type="radio" name="criterio" id="senha" value="password">
            <label for="senha">Senha</label> <br>

            <input type="radio" name="criterio" id="botao" value="button">
            <label for="botao">Botão</label> <br>

            <input type="radio" name="criterio" id="radio" value="radio">
            <label for="radio">Rádio</label> <br>

            <input type="radio" name="criterio" id="selecao" value="selectbox">
            <label for="selecao">Caixa de Seleção</label> <br>

            <input type="radio" name="criterio" id="faixa" value="range">
            <label for="faixa">Faixa</label> <br>
        </fieldset>

        <a href="../index.php">Página inicial</a>
    <!-- </form> -->
  </main>  
</body>

</html>
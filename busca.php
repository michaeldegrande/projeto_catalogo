<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultados da Busca</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey">

<div class="w3-container w3-padding">
  <a href="home.php" class="w3-button w3-blue w3-margin-bottom">Voltar</a>

  <?php
  if (isset($_GET['busca']) && !empty($_GET['busca'])) {
      $termo = urlencode($_GET['busca']);
      $url = "https://www.googleapis.com/books/v1/volumes?q={$termo}";
      $resposta = file_get_contents($url);
      $dados = json_decode($resposta, true);

      echo "<h2>Resultados para: <em>{$_GET['busca']}</em></h2>";

      if (isset($dados['items'])) {
          echo '<div class="w3-row-padding">';
          foreach ($dados['items'] as $livro) {
              $info = $livro['volumeInfo'];
              $titulo = $info['title'] ?? 'Sem título';
              $autor = isset($info['authors']) ? implode(', ', $info['authors']) : 'Autor desconhecido';
              $capa = $info['imageLinks']['thumbnail'] ?? '';
              $descricao = $info['description'] ?? 'Sem descrição disponível';

              echo '<div class="w3-third w3-margin-bottom">';
              echo '<div class="w3-card-4 w3-white w3-padding">';
              if ($capa) {
                  echo "<img src='{$capa}' style='width:100%; height:auto;'>";
              }
              echo "<h3>{$titulo}</h3>";
              echo "<p><strong>Autor:</strong> {$autor}</p>";
              echo "<p>".substr($descricao, 0, 150)."...</p>";
              echo '</div></div>';
          }
          echo '</div>';
      } else {
          echo '<p>Nenhum resultado encontrado.</p>';
      }
  } else {
      echo '<p>Digite um termo de busca.</p>';
  }
  ?>
</div>

</body>
</html>
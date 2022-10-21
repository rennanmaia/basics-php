<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Basics PHP</title>
  </head>
  <body>
    <header><h1>Titulo da Página</h1></header>

    <content>
      <p>Conteúdo</p>

      <?php
      // $idade = 20;
      // $idade = 20;

      $idade = $_GET['idade'];

      if ($idade >= 18) {
          echo "<p>Seja bem vindo!!!! Você já tem $idade anos!</p>";
      } else {
          echo '<p>Sinto muito! Volte daqui a ' . (18 - $idade);
          if (18 - $idade > 1) {
              echo ' anos!';
          } else {
              echo ' ano!';
          }
          echo "<br/>Você só tem $idade anos!</p>";
      }

      $php = ['Zend' => 'CERTIFICAÇÃO', 6 => 'abc'];

      echo $php['Zend'];
      echo $php[6];
      ?>
    </content>

    <footer>Rodape da página</footer>
  </body>
</html>

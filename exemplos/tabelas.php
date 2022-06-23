<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Bootstrap contributors">
  <meta name="generator" content="0.98.0">
  <link rel="icon" type="image/png" href="../images/amaury.png">
  <title>Página Web - Amaury Huerb</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/features/">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="features.css" rel="stylesheet">


  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>




</head>
<body>

  <div align="right">
    <!--Definições de Botão-Alterna modo-->
      Background : <i class="fa fa-moon-o" aria-hidden="true"></i> <i class="fa fa-sun-o" aria-hidden="true"></i>
      <script src="https://use.fontawesome.com/62e43a72a9.js"></script>
      <!--script src="assets/js/62e43a72a9.js"></script-->
      <button type="button" class="btn btn-outline-secondary fa fa-sliders" id="yesBtn" onclick="myFunction()"></button>
      <script>
          function myFunction() {
          var element = document.body;
          element.classList.toggle("dark-mode");
          }
      </script>
  </div>



  <main>

    <?php
      // pega dados do arquivo tarefas.txt e coloca na tela
      if (file_exists("tarefas.txt")) {
          $listaDrop = file_get_contents("tarefas.txt");
          $listaDrop_array = explode("\n", $listaDrop);
          foreach($listaDrop_array as $listaDrop_item) {
              echo $listaDrop_item.'<br/>';
          }
      } else {
          $lista = null;
      }
    ?>

<br><br><br>



<?php
  $linhas = file("tarefas.txt");
  for($i = 0;$i < count($linhas);$i++) {
  echo "<button value='". $linhas[$i]. "'>". $linhas[$i] ."</button>".'<br/>';
  }
?>







</body>
</html>


<!--Stylo Inicial-->
<style>
  body { padding: 25px; background-color: #222224; color: white; font-size: 15px;}
  .dark-mode { background-color: white; color: black;}
  .bd-placeholder-img { font-size: 1.125rem; text-anchor: middle; -webkit-user-select: none; -moz-user-select: none; user-select: none; }
  @media (min-width: 768px) { .bd-placeholder-img-lg { font-size: 3.5rem; } }
  .b-example-divider { height: 3rem; background-color: rgba(0, 0, 0, .1); border: solid rgba(0, 0, 0, .15); border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15); }
  .b-example-vr { flex-shrink: 0; width: 1.5rem; height: 100vh; } .bi { vertical-align: -.125em;  fill: currentColor; }
  .nav-scroller { position: relative; z-index: 2; height: 2.75rem; overflow-y: hidden;}
  .nav-scroller .nav { display: flex; flex-wrap: nowrap; padding-bottom: 1rem; margin-top: -1px; overflow-x: auto; text-align: center; white-space: nowrap; -webkit-overflow-scrolling: touch; }
</style>

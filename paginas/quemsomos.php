<h1 class ="text-center" id="titulo">• F l i p N e r d •</h1>

<!-- começo dos cards -->
<main class="container">
  <h1>Desenvolvedores</h1>
  <div class="flex">
    

    <?php 
    
    $dadosApi = file_get_contents("http://localhost/projeto-walka/api/quemsomos.php");
    $dadosApi = json_decode($dadosApi);
    
    foreach ($dadosApi as $dados) {
      ?>



<div class="flex-card">
      <img src="<?= $dados->banner ?>" alt="<?= $dados->nome ?>" class="flex-img" id="pad">
      <p>
        <strong><?= $dados->nome ?></strong>
      </p>
      <p>
          <a href="<?= $dados->jogar ?>" target="_blank" title="Detalhes"class="btn">
            Detalhes
          </a>
      </p>
    </div>

      <?php
    }
    
    ?>
  </div><!-- fim dos cards -->

  

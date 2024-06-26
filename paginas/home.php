<h1 class ="text-center" id="titulo">• F l i p N e r d •</h1>

<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <a class="navbar-brand" href="walka"><img src="./imagens/eu.png" id="cropped" class="d-block w-100" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
        <h5>Clique nas imagens para conhecer os jogos</h5>
        <p>Fique por dentro das novidades!</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <a class="navbar-brand" href="paulo"><img src="./imagens/paulo.png" id="cropped" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
    <a class="navbar-brand" href="naosei"><img src="./imagens/não sei.png" id="cropped" class="d-block w-100" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
    <a class="navbar-brand" href="vanderleia"><img src="./imagens/vand.png" id="cropped" class="d-block w-100" alt="..."></a> 
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item">
    <a class="navbar-brand" href="certovander"><img src="./imagens/vanderliaa.jpeg" id="cropped" class="d-block w-100" alt="..."></a> 
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
    <a class="navbar-brand" href="cauaa"><img src="./imagens/caua.jpeg" id="cropped" class="d-block w-100" alt="..."></a> 
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
</div>

<!-- começo dos cards -->
<main class="container">
  <h1>DISPONIVÉIS</h1>
  <div class="flex">
    

    <?php 
    
    $dadosApi = file_get_contents("http://elainerafael.x10.mx/API/jogos.php");
    $dadosApi = json_decode($dadosApi);

    
    foreach ($dadosApi as $dados) {
      ?>



<div class="flex-card">
      <img src="<?= $dados->banner ?>" alt="<?= $dados->nome ?>" class="flex-img" id="pad">
      <p>
        <strong><?= $dados->nome ?></strong>
      </p>
      <p>
          <a href="<?= $dados->jogar ?>" target="_blank" title="Jogar agora"class="btn">
            Jogar agora
          </a>
      </p>
    </div>

      <?php
    }
    
    ?>
  </div><!-- fim dos cards -->

  <h1>EMBREVE</h1>
  <div class="flex">
    

    <?php 

    $dadosApi = file_get_contents("http://elainerafael.x10.mx/API/embreve.php");
    $dadosApi = json_decode($dadosApi);
    
    foreach ($dadosApi as $dados) {
      ?>



<div class="flex-card">
      <img src="<?= $dados->banner ?>" alt="<?= $dados->nome ?>" class="flex-img" id="pad">
      <p>
        <strong><?= $dados->nome ?></strong>
      </p>
      <p>
          <a href="<?= $dados->jogar ?>" target="_blank" title="Conheça agora"class="btn">
            Conheça agora
          </a>
      </p>
    </div>

      <?php
    }
    
    ?>
  </div>
  
  
</main>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="Walka">Walka</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jogos">JOGOS</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>  

<main>
<?php
if (isset($_GET["param"])) {
$param = $_GET["param"];
//separar paramentro por/
$p = explode("/", $param);

 //print_r($p);
}

    $page = $p[0] ?? "home";
    $jogo = $p[1] ?? NULL;


if ($page == "jogo") {
     $pagina = "jogo/{$jogo}.php";
} else{
     $pagina = "paginas/{$page}.php";
}

//verificar se a pagina existe
if (file_exists($pagina)){
    include $pagina;
} else{
    include "paginas/erro.php";
}
?>
</main>

<footer class="footer">
<p>desenvolvido por</p>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

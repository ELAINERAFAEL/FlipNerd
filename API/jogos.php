<?php

header("Access-Controla-Allow-Origin: *");
header("content-tipe: application/json; charset=utf-8");

$path = "http://localhost/projeto-walka/";

$jogo[1] = array (
    "id" => 1,
    "banner" =>"{$path}imagens/eu.png",
    "banner2" =>"{$path}imagens/eu.png",
    "nome"   =>" JOGO WALKA",
    "alt"    => "projeto-walka",

    "descricao"=>"ola",
    "jogar" => "{$path}game/index.html",
 );



$jogo[2] = array (
"id" => 2,
"banner" =>"{$path}imagens/vanderliaa.jpeg",
"banner2" =>"{$path}",
"alt" => "JOGO BUG FROM HELL 1.0",
"nome"=>"JOGO BUG FROM HELL 1.0",
"descricao"=>"ola",
"jogar" => "{$path}gamevand/game/index.html",
);

$jogo[3] = array (
"id" => 3,
"banner" =>"{$path}imagens/não sei.png",
"banner2" =>"{$path}",
"alt" => "nao sei",
"nome"=>"JOGO THE LAST WORDS",
"descricao"=>"ola",
"jogar" => "{$path}gamevoi/index.html",
);

$jogo[4] = array (
"id" => 4,
"banner" =>"{$path}imagens/vand.png",
"banner2" =>"{$path}imagens/não sei.png",
"alt" => "nao sei",
"nome"=>"JOGO HELPSAURO",
"descricao"=>"ola",
"jogar" => "gamejak/index.html",
);
$jogo[5] = array (
"id" => 5,
"banner" =>"{$path}imagens/paulo.png",
"banner2" =>"{$path}imagens/jogo.png",
"alt" => "JOGO WARSTARS",
"nome"=>"JOGO WARSTARS",
"descricao"=>"ola",
"jogar" => "./war\warstars",
);


$jogo[6] = array (
    "id" => 6,
    "banner" =>"{$path}imagens/caua.jpeg",
    "banner2" =>"{$path}imagens/caua.jpeg",
    "alt" => "nao sei",
    "nome"=>" JOGO FOREST",
    "descricao"=>"ola",
    "jogar" => "{$path}./caua\Novo projeto/index.html",
    );

echo json_encode($jogo);
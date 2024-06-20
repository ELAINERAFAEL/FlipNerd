<?php

header("Access-Controla-Allow-Origin: *");
header("content-tipe: application/json; charset=utf-8");

$path = "http://localhost/projeto-walka/";

$jogo[1] = array (
    "id" => 1,
    "banner" =>"{$path}imagens/vav.png",
    "banner2" =>"{$path}imagens/eu.png",
    "nome"   =>"jogo",
    "alt"    => "projeto-walka",

    "descricao"=>"ola",
    "jogar" => "{$path}game/index.html",
 );



$jogo[2] = array (
"id" => 2,
"banner" =>"{$path}imagens/vav.png",
"banner2" =>"{$path}",
"alt" => "nao sei",
"nome"=>"jogo walka",
"descricao"=>"ola",
"jogar" => "{$path}gamevand/game/index.html",
);

$jogo[3] = array (
"id" => 3,
"banner" =>"{$path}imagens/vav.png",
"banner2" =>"{$path}imagens/não sei.png",
"alt" => "nao sei",
"nome"=>"jogo walka",
"descricao"=>"ola",
"jogar" => "{$path}gamevoi/game/index.html",
);
$jogo[4] = array (
"id" => 4,
"banner" =>"{$path}imagens/vav.png",
"banner2" =>"{$path}imagens/não sei.png",
"alt" => "nao sei",
"nome"=>"jogo walka",
"descricao"=>"ola",
"jogar" => "NULL",
);
$jogo[5] = array (
"id" => 5,
"banner" =>"{$path}imagens/vav.png",
"banner2" =>"{$path}imagens/não sei.png",
"alt" => "nao sei",
"nome"=>"jogo walka",
"descricao"=>"ola",
"jogar" => "NULL",
);
$jogo[6] = array (
"id" => 6,
"banner" =>"{$path}imagens/vav.png",
"banner2" =>"{$path}imagens/não sei.png",
"alt" => "nao sei",
"nome"=>"jogo walka",
"descricao"=>"ola",
"jogar" => "NULL",
);

echo json_encode($jogo);
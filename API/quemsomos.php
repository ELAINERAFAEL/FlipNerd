<?php

header("Access-Controla-Allow-Origin: *");
header("content-tipe: application/json; charset=utf-8");

$path = "http://elainerafael.x10.mx/";

$imagem[1] = array (
    "id" => 1,
    "banner" =>"{$path}imagens/laine.jpeg",
    "banner2" =>"{$path}imagens/laine.jpeg",
    "nome"   =>"ELAINE RAFAEL",
    "alt"    => "projeto-walka",

    "descricao"=>"ola",
    "jogar" => "./game/index.html",
 );



$imagem[2] = array (
"id" => 2,
"banner" =>"{$path}imagens/vanderleiar.jpeg",
"banner2" =>"{$path}imagens/vanderleiar.jpeg",
"alt" => "nao sei",
"nome"=>"VANDERLÉIA RIBEIRO",
"descricao"=>"ola",
"jogar" => "gamevand/game/index.html",
);

$imagem[3] = array (
"id" => 3,
"banner" =>"{$path}imagens/vinicius (1).jpeg",
"banner2" =>"{$path}imagens/vinicius (1).jpeg",
"alt" => "nao sei",
"nome"=>"VINÍCIUS FERREIRA",
"descricao"=>"ola",
"jogar" => "./gamevoi",
);
$imagem[4] = array (
"id" => 4,
"banner" =>"{$path}imagens/jake.jpeg",
"banner2" =>"{$path}imagens/jake.jpeg",
"alt" => "nao sei",
"nome"=>"JAKELINE CUSTÓDIO",
"descricao"=>". ",
"jogar" => "./gamejak",
);

    
echo json_encode($imagem);
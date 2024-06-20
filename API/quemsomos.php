<?php

header("Access-Controla-Allow-Origin: *");
header("content-tipe: application/json; charset=utf-8");

$path = "http://localhost/projeto-walka/";

$imagem[1] = array (
    "id" => 1,
    "banner" =>"{$path}imagens/laine.jpeg",
    "banner2" =>"{$path}imagens/laine.jpeg",
    "nome"   =>"Elaine Rafael",
    "alt"    => "projeto-walka",

    "descricao"=>"ola",
    "jogar" => "./game/index.html",
 );



$imagem[2] = array (
"id" => 2,
"banner" =>"{$path}imagens/vanderleiar.jpeg",
"banner2" =>"{$path}imagens/vanderleiar.jpeg",
"alt" => "nao sei",
"nome"=>"Vanderléia Ribeiro",
"descricao"=>"ola",
"jogar" => "gamevand/game/index.html",
);

$imagem[3] = array (
"id" => 3,
"banner" =>"{$path}imagens/vinicius (1).jpeg",
"banner2" =>"{$path}imagens/vinicius (1).jpeg",
"alt" => "nao sei",
"nome"=>"Vinicius",
"descricao"=>"ola",
"jogar" => "https://www.rockstargames.com/br/gta-v",
);
$imagem[4] = array (
"id" => 4,
"banner" =>"{$path}imagens/jake.jpeg",
"banner2" =>"{$path}imagens/jake.jpeg",
"alt" => "nao sei",
"nome"=>"POKÉMON",
"descricao"=>"ola",
"jogar" => "https://otpokemon.com/",
);
$imagem[5] = array (
"id" => 5,
"banner" =>"{$path}imagens/league.png",
"banner2" =>"{$path}imagens/laine.jpg",
"alt" => "Quem sou",
"nome"=>"Elaine Rafael",
"descricao"=>"ola",

);
$imagem[6] = array (
"id" => 6,
"banner" =>"{$path}imagens/roblox certo.png",
"banner2" =>"{$path}imagens/não sei.png",
"alt" => "nao sei",
"nome"=>"ROBLOX",
"descricao"=>"ola",
"jogar" => "https://www.roblox.com/discover/?Keyword=tiro",
);
$imagem[7] = array (
    "id" => 6,
    "banner" =>"{$path}imagens/mani.png",
    "banner2" =>"{$path}imagens/não sei.png",
    "alt" => "nao sei",
    "nome"=>"MANICRAFT",
    "descricao"=>"ola",
    "jogar" => "https://www.minecraft.net/pt-br",
    );
    $imagem[8] = array (
        "id" => 6,
        "banner" =>"{$path}imagens/my burger shop 2.png",
        "banner2" =>"{$path}imagens/não sei.png",
        "alt" => "nao sei",
        "nome"=>"My BURGER SHOP 2",
        "descricao"=>"ola",
        "jogar" => "https://www.industriadejogos.com.br/jogo/MyBurgerShop2/",
    );
    
echo json_encode($imagem);
<?php

header("Access-Controla-Allow-Origin: *");
header("content-tipe: application/json; charset=utf-8");

$path = "http://localhost/projeto-walka/";

$jogo[1] = array (
    "id" => 1,
    "banner" =>"{$path}imagens/fifa.24.png",
    "banner2" =>"{$path}imagens/eu.png",
    "nome"   =>"FIFA",
    "alt"    => "projeto-walka",

    "descricao"=>"ola",
    "jogar" => "https://www.ea.com/pt-br/games/fifa",
 );



$jogo[2] = array (
"id" => 2,
"banner" =>"{$path}imagens/vav.png",
"banner2" =>"{$path}imagens/eu.png",
"alt" => "nao sei",
"nome"=>"VALORANT",
"descricao"=>"ola",
"jogar" => "https://playvalorant.com/pt-br/?gad_source=1&gclid=EAIaIQobChMIuP7zxJrlhgMVCB6tBh0xAAWeEAAYASAAEgIXDPD_BwE&gclsrc=aw.ds",
);

$jogo[3] = array (
"id" => 3,
"banner" =>"{$path}imagens/gta.png",
"banner2" =>"{$path}imagens/não sei.png",
"alt" => "nao sei",
"nome"=>"jogo walka",
"descricao"=>"ola",
"jogar" => "https://www.rockstargames.com/br/gta-v",
);
$jogo[4] = array (
"id" => 4,
"banner" =>"{$path}imagens/pokemon.png",
"banner2" =>"{$path}imagens/não sei.png",
"alt" => "nao sei",
"nome"=>"POKÉMON",
"descricao"=>"ola",
"jogar" => "https://otpokemon.com/",
);
$jogo[5] = array (
"id" => 5,
"banner" =>"{$path}imagens/league.png",
"banner2" =>"{$path}imagens/não sei.png",
"alt" => "nao sei",
"nome"=>"LEAGUE OF LEGENDS",
"descricao"=>"ola",
"jogar" => "https://www.leagueoflegends.com/pt-br/",
);
$jogo[6] = array (
"id" => 6,
"banner" =>"{$path}imagens/roblox certo.png",
"banner2" =>"{$path}imagens/não sei.png",
"alt" => "nao sei",
"nome"=>"ROBLOX",
"descricao"=>"ola",
"jogar" => "https://www.roblox.com/discover/?Keyword=tiro",
);
$jogo[7] = array (
    "id" => 6,
    "banner" =>"{$path}imagens/mani.png",
    "banner2" =>"{$path}imagens/não sei.png",
    "alt" => "nao sei",
    "nome"=>"MANICRAFT",
    "descricao"=>"ola",
    "jogar" => "https://www.minecraft.net/pt-br",
    );
    $jogo[8] = array (
        "id" => 6,
        "banner" =>"{$path}imagens/my burger shop 2.png",
        "banner2" =>"{$path}imagens/não sei.png",
        "alt" => "nao sei",
        "nome"=>"My BURGER SHOP 2",
        "descricao"=>"ola",
        "jogar" => "https://www.industriadejogos.com.br/jogo/MyBurgerShop2/",
    );
    
echo json_encode($jogo);
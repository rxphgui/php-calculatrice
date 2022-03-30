<?php

function add(){

    $nombre = readline('Veuillez rentrer un nombre : ');
    $nombre2 = readline('Veuillez rentrer un autre  nombre : ');
    $resultat = $nombre + $nombre2;
    echo "Voici le résultat $resultat de votre addition";
}

function sous(){
    $nombre = readline('Veuillez rentrer un nombre : ');
    $nombre2 = readline('Veuillez rentrer un autre  nombre : ');
    $resultat = $nombre - $nombre2;
    echo "Voici le résultat $resultat de votre soustraction";
}

function mult(){
    $nombre = readline('Veuillez rentrer un nombre : ');
    $nombre2 = readline('Veuillez rentrer un autre  nombre : ');
    $resultat = $nombre * $nombre2;
    echo "Voici le résultat $resultat de votre multiplication";
}

function div(){
    $nombre = readline('Veuillez rentrer un nombre : ');
    $nombre2 = readline('Veuillez rentrer un autre  nombre : ');
    $resultat = $nombre / $nombre2;
    echo "Voici le résultat $resultat de votre division";
}
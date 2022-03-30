<?php
require('module.php');
$choix = readline('Veuillez rentrer votre choix : ');



switch ($choix) {

    case 1:
        echo "\nVous avez choisi l'addition\n";
        add();
        break;
    
    case 2:
        echo"\nVous avez choisi la soustraction\n";
        sous();
        break;

    case 3:
        echo"\nVous avez choisi la multiplication\n";
        mult();
        break;

    case 4:
        echo"\nVous avez choisi la division\n";
        div();
        break;

    default:
        echo"\nVous devez choisir soit l'addition, soustraction, multiplication ou division";

}
?>
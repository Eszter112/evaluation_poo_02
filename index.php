<?php
require_once 'Personnage.php';
require_once 'Orc.php';
require_once 'GameEngine.php';
require_once 'Humain.php';
require_once 'Elfe.php';
require_once 'GameArene.php';

$game = new GameEngine();

$gameA = new GameArene();

            
$orc1 = new Orc(7, 9, 4, "Ghrortau");
$orc2 = new Orc(6, 8, 3, "Hrarrouy");
$orc3 = new Orc(8, 9, 2, "Marreurds");

$human1 = new Humain(5, 12, 7, "Jesus");
$human2 = new Humain(7, 11, 6, "Elba");
$human3 = new Humain(5, 11, 8, "Jacob");

$elfe1 = new Elfe(8, 12, 8, "Siaou");
$elfe2 = new Elfe(9, 14, 9, "Lisaou");
$elfe3 = new Elfe(7, 9, 7, "Yaehy");


//ajouter le scombattantas dan l'objet GameEngine / GameArene
$game->combatants = [$orc1, $orc2, $orc3, $human1, $human2, $human3, $elfe1, $elfe2, $elfe3];
$gameA->combatants = [$orc1, $orc2, $orc3, $human1, $human2, $human3, $elfe1, $elfe2, $elfe3];



//test
// $joueur = $game->getJoueur();
// echo "t : " . get_class($joueur[0]);

// echo " n : " . $joueur[0]->nom;


//test attaq
// $human2->attaquer($human1);


// $game->addCombattant($orc1);
// $game->addCombattant($human2);
// $game->addCombattant($elfe3);


//test start
$game ->start();
$gameA ->start();
// $j1 = $game->getJouer();
// $j2 = $game->getJouer()[0];



// $game->getJoueur();



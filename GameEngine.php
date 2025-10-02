<?php


class GameEngine
{

    public array $combatants = [];
  



    public function addCombattant(Personnage $p): void
    {
        $this->combatants[] = $p;
    }

    public function getJoueur()
    {
        $i = array_rand($this->combatants);
        return $this->combatants[$i];

        

    
    }
    public function start()
    {
        
    $j1 = $this->getJoueur();  //jouer1
    $j2 = $this->getJoueur();  //jouer2


        do {
            $j2 = $this->getJoueur();
        } while ($j1 === $j2);

            echo "                  ******* La bataille a commancé *******\n";
        $this->tourDeJeu($j1, $j2);
    }






    public function tourDeJeu($j1, $j2)
    {

        //3 round
        for ($round = 1; $round <= 3; $round++) {
            echo " Round : " . $round;

            if ($round === 1) {
                $j1->attaquer($j2);
            } elseif ($round === 2) {
                $j2->attaquer($j1);
            } else {
                $j1->attaquer($j2);
            }


            if ($j1->pv <= 0) {
                echo "   ******  La bataille a terminé — " . $j2->nom . " a gagné ******\n";
            } elseif ($j2->pv <= 0) {
                echo "   ******  La bataille a terminé — " . $j1->nom . " a gagné ******\n";
            }
        }
    }

}
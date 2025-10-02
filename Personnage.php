<?php

// Un personnage peut attaquer un personnage. Pour ce faire, 
// il a une méthode attaquer qui prend en argument la cible de l'attaque. 
// Implémentez cette méthode. 
// Cette méthode affiche un message en console permettant de savoir ce qui s'est passé.
class Personnage
{
    public  int $force;
    public int $pv;
    public int $endurance;
    public string $nom;

    public function __construct($f = 0, $pv = 0, $e = 0, $n = "")

    {
        $this->force = $f;
        $this->pv = $pv;
        $this->endurance = $e;
        $this->nom = $n;
    }



    public function attaquer(Personnage $cible)
    {
        $blessure = $this->force;
        $newPv = $cible->pv - $blessure;
        $cible->pv = $newPv;

        if ($newPv < 0) {
            $newPv = 0;
        }

        $cible->pv = $newPv;

        echo "********  l'" . get_class($this) . " {$this->nom}" .   " a attaqué l'" . get_class($cible) . " {$cible->nom}    *********\n";
        echo "              " . $cible->nom . " perd " . $blessure . " il lui reste : " . $newPv . "\n\n";

      
    }
}

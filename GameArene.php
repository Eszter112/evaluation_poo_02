<?php
class GameArene {

    public array $combatants = [];

    public function addCombattant(Personnage $p): void
    {
        $this->combatants[] = $p;
    }



 public function getJoueur()
    {
        $p = array_rand($this->combatants);
        return $this->combatants[$p];
    }
    public function start()
    { echo "            ******* La bataille a commancé *******\n";
          
        $this->tourDeJeu();
    }



 public function tourDeJeu()
    {

while(count($this->combatants) >1 )
    {  $j1 = $this->getJoueur();  //jouer1
        $j2 = $this->getJoueur();  //jouer
       
        while ($j1 === $j2 ){
            $j2 = $this->getJoueur();}
            $j1->attaquer($j2);

   $this->nettoyerDeMort();
    }

    
    }
        public function nettoyerDeMort()
    {
foreach($this->combatants as $key=>$p){
    if($p->pv<=0){
  unset($this->combatants[$key]);
        echo "           " .$p->nom. " est mort et a été éliminé du jeu.   \n\n" ;
      
    }
}

$this->fin($p);
    }

 public function fin(Personnage $p) {
    if (count($this->combatants) <=1){
        echo " Le jeu est terminé, la victoire finale est : $p->nom ";
    }

 }
}

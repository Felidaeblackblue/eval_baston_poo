<?php

class Archer extends Character
{
    //Attribut
    public $carquois = 5;
    
    
   
    //Méthodes


    // Méthode pour activer les diff actions 
    public function turn($target) {
        $attackchoice = rand(1,100);

        if ($this->carquois == 0) {
            return $this->dagger($target); //Dague
        } else if ($attackchoice <= 70 && $this->carquois > 0) {
            return $this->arrow($target); //Flèche
        } else if ($attackchoice > 70 && $this->carquois > 1) {
            return $this->aimFor(); // (Viser)Se préparer à lancer ses 2 flèches
        }  else if (aimFor()) { //Tirer les 2 flèches au tour suivant
           return $this->doubleArrow($target);
        }
        
    }
     //Attaque 1 fleche
    public function arrow($target) {
        $target->setHealthPoints($this->damage);
        $status = "$this->name envoie une flèche sur $target->name ! Il reste $target->healthPoints points de vie à $target->name !";
        return $status;
    }
    //Attaque 2 fleches
    public function doubleArrow($target) {
        $this->damage *= 2;
        $target->setHealthPoints($this->damage);
        $status = "$this->name envoie deux flèches sur $target->name ! Il reste $target->healthPoints points de vie à $target->name !";
        return $status;
    }
    //Attaque dague
    public function dagger($target) {
        $this->damage /= 2;
        $joueurcible->setHealthPoints($this->damage /= 2);
        $status = "$this->name n'a plus de flèche et donne un coup de dague à $jotarget->name ! Il reste $target->healthPoints points de vie à $target->name !";
        return $status;
    }

    public function aimFor(){
        //Viser avant de tirer les 2 flèches
        $status = " $this->name est entrain de viser";
        return $status;

    }

}
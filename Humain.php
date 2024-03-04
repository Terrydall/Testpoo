<?php

class Humain extends Personnage implements Talents, Armes, Montures {
   

    public function __construct($Nom) {
       $this->Nom =$Nom;
       $this->Pv = 500; 
       $this->Endurance = 2000;
       $this->Force = 1300; 
       $this->Mana = 200;
       $this->Degats = 50;
       
    }

    public function necromancien() {
        echo "Je suis un nécromancien";
        $this->Endurance = $this->Endurance + 200;
        $this->Pv = $this->Pv - 40;
        $this->Mana = $this->Mana + 200;
        }
    
        public function voleur(){
        echo "Je suis un voleur";
        $this ->Endurance = $this->Endurance +100;
        $this->Force = $this->Force -30;
        $this->Pv = $this->Pv +50;
       
        }
    
        public function guerrier(){
            echo "Je suis un guerrier";
            $this ->Endurance = $this->Endurance +50;
            $this->Force = $this->Force +200;
          
            
        }
    
        public function magicien(){
            echo "Je suis un magicien";
            $this ->Endurance = $this->Endurance +50;
            $this->Force = $this->Force +200;
            $this->Mana = $this->Mana + 100;
        }
    
        public function paladin(){
            echo "Je suis un paladin";
            $this->Endurance = $this->Endurance + 300;
            $this->Force = $this->Force + 150;
            $this->Pv = $this->Pv + 120;
            $this->Mana = $this->Mana + 50;
        }
    
        public function ranger(){
            echo "Je suis un ranger";
            $this->Endurance = $this->Endurance + 150;
            $this->Force = $this->Force + 10;
            $this->Pv = $this->Pv + 500;
            
        }
    
        public function Epée(){
           echo "J'ai une épée";
        }
    
        public function Bâton(){
            echo "J'ai un bâton";
        }
    
        public function Hache(){
            echo "J'ai une hache";
        }
    
        public function Dague(){
            echo "J'ai une dague";
        }
    
        public function Arc(){
            echo "J'ai un arc";
        }
        public function Vélo(){
            echo "J'ai un vélo";
        }
    
        public function Cheval(){
            echo "J'ai un cheval";
        }
    
        public function Balai(){
            echo "J'ai un balai";
        }
    
        public function SoucoupeViolante(){
            echo "J'ai une soucoupe violante";
        }
    
        public function Moto(){
            echo "J'ai une moto";
        }
    
        Public function Voiture(){
            echo "J'ai une voiture";
        }
    
        Public function APied(){
            echo "Je suis à pied";
        }

        public function attaquer($cible) {
            if ($cible !== null && property_exists($cible, 'pv')) {
                $cible->Pv -= $this->Force;
            }
   
}

public function defendre($cible){
    if ($cible !== null && property_exists($cible, 'Endurance')) {
        $cible->Endurance -= $this->Force;
   
    }
}
}
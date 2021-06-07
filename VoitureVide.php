<?php
    // manière static première création d'objet.
    class Voiture {
        private $_couleur = "Yellow";
        private $_NbrPorte = 5;
        private $_Puissance = 120;
        private $_Carburant = "Gazoil";


    }

    class Vehicule {

    }
    // construct voiture, création automatique.
    class VoitureConstruct extends Vehicule { 

        private $_couleur ="";
        private $_nbrporte = 0;
        private  $_puissance = 1;
        private $_carburant = "";
        private $_marque = "";

        private static $ArrayMarqueVoiture = array("Renault", "Peugeot", "Audi", "BMW", "Mercedes" );
        private static $ArrayCouleur = array("Rouge", "Jaune", "Orange", "Bleu", "Vert", "Violet" );
        private static $ArrayCarburant = array("Sans-Plomb95", "Sans-Plomb98", "BioEthanol", "GPL", "Gazole", "Electrique");
 

        public function __construct() {
            $this->_marque = self::$ArrayMarqueVoiture[array_rand( self::$ArrayMarqueVoiture, 1)];
            
            $this->_couleur = self::$ArrayCouleur[array_rand( self::$ArrayCouleur, 1)];
        
            $this->_nbrporte = random_int( 3, 5);
        
            $this->_puissance = random_int( 25 , 350 );
            
            $this->_carburant = self::$ArrayCarburant[array_rand( self::$ArrayCarburant, 1)];
        
        }

        public function getHtmlRepresentation() {
            return '<div class="ObjetVoiture">
                            <h2> Voiture Random </h2>
                            <li> La couleur de la voiture est : '.$this->_couleur. '</li>                         
                            <li> Le nombre de porte de la voiture est : '.$this->_nbrporte. '</li>                         
                            <li> La puissance de la voiture est : '.$this->_puissance. 'ch</li>                         
                            <li> Le carburant de la voiture est : '.$this->_carburant. '</li>    
                    </div>                       
            ';
        }

        // interface svg {

        //     function getSvgRepresentation ( $y, $x) {
                
        //     }
        // }
    
    }


    class Camion extends Vehicule {

    }

 
?>
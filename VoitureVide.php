<?php
    // manière static première création d'objet.
    class Voiture {
        private $_couleur = "Yellow";
        private $_NbrPorte = 5;
        private $_Puissance = 120;
        private $_Carburant = "Gazoil";


    }
    // construct voiture, création automatique.
    class VoitureConstruct { 

        private $Couleur ="";
        private $NbrPorte = 0;
        private  $Puissance = 1;
        private $Carburant = "";

        public function __construct($Couleur, $NbrPorte, $Puissance, $Carburant) {
            $this->_couleur = $Couleur;
            $this->_nbrporte = $NbrPorte;
            $this->_puissance = $Puissance;
            $this->_carburant = $Carburant;
        }

        public function getHtmlRepresentation() {
            return '<div class="ObjetVoiture">
                    <h1> Voiture Random </h1>
                        <ul>
                            <li> La couleur de la voiture est : '.$this->_couleur. '</li>                         
                            <li> Le nombre de porte de la voiture est : '.$this->_nbrporte. '</li>                         
                            <li> La puissance de la voiture est : '.$this->_puissance. 'ch</li>                         
                            <li> Le carburant de la voiture est : '.$this->_carburant. '</li>    
                        </ul>
                    </div>                         
            ';
        }
    
    }

    //essai randomiser les parametre pour la création de voiture.

    $ArrayPrenomVoiture = array("Renault", "Peugeot", "Audi", "BMW", "Mercedes" );
    $RandomPrenomVoiture = $ArrayPrenomVoiture[array_rand( $ArrayPrenomVoiture, 1)];

    $ArrayCouleur = array("Rouge", "Jaune", "Orange", "Bleu", "Vert", "Violet" );
    $RandomCouleur = $ArrayCouleur[array_rand( $ArrayCouleur, 1)];

    $RandomPorte = random_int( 3, 5);

    $RandomPuissance = random_int( 25 , 350 );

    $ArrayCarburant = array("Sans-Plomb95", "Sans-Plomb98", "BioEthanol", "GPL", "Gazole", "Electrique");
    $RandomCarburant = $ArrayCarburant[array_rand($ArrayCarburant, 1)];

    // ($RandomCouleur, $RandomPorte, $RandomPuissance, $RandomCarburant)

 
?>
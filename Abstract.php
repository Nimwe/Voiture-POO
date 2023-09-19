<?php
abstract class Vehicule { 
// Si on declare cette fonction abstraite
// au moins une des fonction doit etre abstraite (non definie)
// On peut avoir des fonctions declarées tant qu'il y en a au moins 
//une de non declarée

    private $nom ;

    abstract public function demarrer();
    abstract public function stopper();

    public function setNom($nom){
        $this->nom = $nom ;
        return $this ;
    }
    public function getNom(){
        return $this->nom ;
    }
}

class Avion extends Vehicule {

public function specialAvion(){
    echo"Special\n <br>"; 
}
public function demarrer() {
    echo "Avion decolle\n  <br>";
}
public function stopper() {
    echo "Avion atterit\n  <br>";
}
}

class Moto extends Vehicule {
    public function demarrer() {
        echo "Moto demarre\n  <br>";
    }
    public function stopper() {
        echo "Moto freine\n  <br>";
    }
}


$avion1 = new Avion();
echo $avion1->setNom('Airbus')->getNom().'<br>';
$avion1->demarrer();
//$avion1->specialAvion();


$Moto1 =new Moto();
$Moto1->demarrer();


?>
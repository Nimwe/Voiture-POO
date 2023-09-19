<?php
class Vehicule { 

    private $nom ;

    public function demarrer() {
        echo"je demarre\n"; // \n pour aller à la ligne
    }
    public function stopper() {
        echo"je stoppe\n";
    }

    public function setNom($nom){
        $this->nom = $nom ;
        return $this ;
    }
    public function getNom(){
        return $this->nom ;
    }
}

class Avion extends Vehicule {
// extends pour indiquer une sous-classe, 
//il herite de la class vehicule
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
class MotoCross extends Moto {
}
class MotoCours extends Moto {
}

$avion1 = new Avion();
echo $avion1->setNom('Airbus')->getNom().'<br>';
$avion1->demarrer();
$avion1->specialAvion();


$Moto1 =new Moto();
$Moto1->demarrer();


?>
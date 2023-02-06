<?php
class Prijava {
public $id;
public $predmet;
public $katedra;
public $sala;
public$datum;


public function __construct($id=null,$predmet,$katedra, $sala,$datum){

$this->id= $id;
$this->predmet = $predmet;
$this->katedra = $katedra;
$this->sala = $sala;
$this->datum = $datum;


}

public static function prikaziSve(mysqli $conn)
{
        $query = "SELECT * FROM prijave";

        return $conn ->query($query); // poyovi funkciju query da 

}
// dodavanje nove prijave

public static function dodaj (Prijava $prijava, mysqli $conn) { // create ili add u crud-u

        $query = "INSERT INTO prijave(predmet, katedra, sala, datum) 
        VALUES ('$prijava->predmet',' $prijava->katedra',' $prijava->sala' , '$prijava->datum' )";


             return $conn->query($query);}
   }

     ?>
     
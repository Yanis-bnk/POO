<?php 
class personne{
    private $nom;
    private $hp;
    private $puissance;


public function __construct($nom,$hp,$puissance){
    $this->nom=$nom;
    $this->hp=$hp;
    $this->puissance=$puissance;
}
public function getNom(){
    return $this->nom;
}
public function getHp(){
    return $this->hp;
}
public function getPuissance(){
    return $this->puissance;
}
public function setNom($nom){
    return $this->nom=$nom;
}
public function setHp($hp){
    return $this->hp=$hp;
}
public function setPuissance($puissance){
    return $this->puissance=$puissance;
}
public function __toString(){
    return "le nom du personnage est : ".$this->nom."  sont hp est de:  ".$this->hp."  et sa puissance est de  ".$this->puissance;
}
public function Coup(){
    return $this->hp-=rand(1,20);
}

}
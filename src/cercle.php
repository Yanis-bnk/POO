<?php 
class cercle{
    private $rayon;
    private $surface;
    private static $pi =3.14;

  public function __construct($rayon,$pi){
      $this->rayon=$rayon;
     
  }
  
  public function getRayon(){
    return $this->rayon;
  }
  public function setRayon($rayon){
    return $this->rayon;
  }
  public function surface(){
   $surface = static::$pi*($this->rayon**2);
   return $surface;
  }
  




}
<?php

// abstract signifie que je vais trouver des méthodes abstraites dans la class.
abstract class Joueur
{
  public fucntion seConnecter()
  {
    //Methode normale
    return $this->etreMajeur();
  }
  //Une méthode abstraite.
  //"abstract" signifie que lorsqu'on étend la class Joueur, on sera obligé de redéfinir ces méthodes. En l'occurence etreMajeur() et devise(). 
  abstract public function
  etreMajeur();
  abstract public function devise();
}
//////////////////////////////////
class JoueurFr extends Joueur
{
  public function etreMajeur()
  {
    return 18;
  }
  public function etreMajeur()
  {
    return 18;
  }
  public function devise()
  {
    return '€';
  }
}
////////////////////////////////

class JoueurUs extends Joueur
{
  public function etreMajeur()
  {
    return 21;
  }
  public function devise()
  {
    return '$';
  }
}
}





 ?>

<?php
/*

Créer une class Véhicule
attribut : $litreEssence.
Méthodes : getter et setter pour $litreEssence.

Créer une class Pompe
attribut: $litreEssence.
Méthodes : getter et setter pour $litreEssence.
et donnerEssence($vehicule).
donnerEssence fait le plein de la voiture (ajoute 50 litres à son reservoir)
et soustrait autant de lires au reservoir de la pompe à essence.

Instancier un véhicule.
Instancier une pompe à essence.
Donner 0 litres d'essence au véhicule.
Donner 800 litres d'essence à la pompe.

Faire le plein de la voiture avec la pompe à essence.
*/

class Vehicule
{
  // un attribut $litreEssence qui représente combien de litre d'essence il y a dans le reservoir de la voiture.
  private $litreEssence;
 // setter pour l'attribut litreEssence
  public function setLitreEssence($arg)
  {
    $this->litreEssence = $arg;
  }
  //getter pour l'attribut litreEssence
  public function getLitreEssence($arg)
  {
     return $this->litreEssence = $arg;
  }
}

class Pompe
{
  private $litreEssence;

  public function setLitreEssence($essence)
  {
    $this->litreEssence = $essence;
  }
  public function getLitreEssence()
  {
    $this->litreEssence;
  }



  //Permet de faire le plein de la voiture
  public function donnerEssence(Vehicule $vehicule) //Vehicule siginifie que l'on doit passer un objet instancié de la classe véhicule.
  {
    $vehicule->setLitreEssence(50);// On fait le plein de la voiture en utilisant le setter pour litreEssence de ka voiture.
    $this->setLitreEssence($this->getLitreEssence() - 50);// On retire 50 litres d'essence à la pompe.
  }

}


$vehicule = new Vehicule;
$vehicule->setLitreEssence(0);

$pompe = new Pompe;
$pompe->setLitreEssence(800);

$pompe->donnerEssence($vehicule);
var_dump($vehicule);
echo '<br/>';
var_dump($pompe);
echo '<br/>';

$vehicule->setLitreEssence(0);

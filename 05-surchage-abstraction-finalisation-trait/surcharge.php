<?php

//Protected propriété ou fonction privée qui est disponible dans la classe enfants.
class A
{
  // déclaration de calcul() dans la class mère
  public function calcul()
  {
    return 10;
  }
}

// Re-déclaration de calcul() dans la classe fille.
class B extends A
{
  public function calcul()
  //parent:: permet d'accéder à la classe parente (en l'occurence la classe A) puis d'accéder à une méthode. En l'occurence calcul.
  //Je stocke ensuite le résultat pour le réutiliser.
  $resultat = parent::calcul();
  return $resultat+5;
}





 ?>

<?php
// Membre.class.php

// Exercice : au vu de cette classe vous allez devoir écrire les setters et les getters pour cette class.

class Membre
{
  private $prenom;
  private $nom;// Déclaration des propriétés (ou attributs)

// Ce code est executé à chaque instanciation d'un objet
public function __construct($arg1,$arg2)
{
  $this->setPrenom($arg1);// Etape 1: Set est là pour indiquer que les arguments que l'on va passer à la methode.
  $this->setNom($arg2);//
}


//Je crée le setter pour l'attribut nom. Il prend en argument la valeur qu'aura l'attribut nom.
public function setPrenom($arg1)
{
  $this->prenom = $arg1;// On définit les arguments propres
}
public function setNom($arg2)
{
  $this->nom = $arg2;
}


// Je crée le getter pour l'attribut nom. Il renvoie la valeur de l'attribut nom.
public function getPrenom()
{
  return $this->prenom;
}
public function getNom()
{
  return $this->nom;
}

}
 $exo = new Membre('Yannick','Bley');

 echo $exo->getPrenom();
 echo '<br/>';
echo $exo->getNom();
 echo'<br/>';

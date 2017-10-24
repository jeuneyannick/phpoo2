<?php
class Etudiant
{
  private $prenom;//
  public function __construct($arg)//constante magique
  {
    echo 'Instanciation, nous avons reçu l\'argument suivant :' .$arg;
    $this->setPrenom($arg);// set pour donner des valeurs à des propriétés.
  }

  public function setPrenom($arg)
  {
    $this->prenom = $arg;
  }
  public function getPrenom()// get pour aller récupérer des propriétés private auxquels on ne peut accéder.
  {
    return $this->prenom;
  }

  $etudiant = new Etudiant('Marc');

  var_dump($etudiant);
  $etudiant->setPrenom('Nicolas');
  var_dump($etudiant)
}

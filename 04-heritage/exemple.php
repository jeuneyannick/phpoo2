<?php
class Membre
{
  public $id = 15;
  public $pseudo;
  public $mdp;

  public function __construct()
  {
    echo 'Internaute créé <hr>';
  }

  public function inscription()
  {
    return 'Je m\inscris.<br>';
  }
  public function connexion()
  {
    return 'Je me connecte.<br>';
  }
}
     class Admin extends Membre
  {
    public function accesBackOffice()
    {
      return 'Acces back office <br>';
    }
  }
  $admin = new Admin;

  echo $admin->connexion();
  echo $admin->accesBackOffice();
  echo $admin->id;

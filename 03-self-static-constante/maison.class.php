<?php

class maison
{
  public static $espaceTerrain = '500m²';//propriété public et static
  public $couleur = 'blanc';// propriété normale
  private static $nbPiece = 7;// propriété privée et static ( accès par un getter)
  const HAUTEUR = '10m²';//une constante appartient toukours à la cLasse

  public static function getNbPiece()// getter d'une propriété static privée
  {
    return self::$nbPiece;// self: siginifie "cette classe". L'équivalent de $this mais pour la classe.
  }
}

echo 'espace terrain :' . Maison::$espaceTerrain .'<br>';// J'accède à une propriété de classe non pas avec "->" mais avec "::".
$mon_objet = new Maison;
echo 'couleur:' . $maison->couleur .'<br>';
echo 'Nombre de pièces :' . Maison::getNbPiece() . '<br>';
echo 'Hauteur :' . Maison::HAUTEUR;


?>

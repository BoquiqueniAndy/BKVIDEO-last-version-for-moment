<?php
// Connexion à la BASE DE DONNÉES
class dbotd {
  private $cnx = null;
  private $resultat = null;

  function __construct(){

    $this->cnx = new PDO("mysql:host=localhost;dbname=bkvideo;charset=utf8", "root", "otd15" );
}

  function __destruct(){
    if ($this->resultat!==null) { $this->resultat = null; }
    if ($this->cnx!==null) { $this->cnx = null; }
  }

  // Exécution de la requête préparée
  // La fonction peut être appelée plusieurs fois.
  function reqotd($req, $tval){
    $this->resultat = $this->cnx->prepare($req);
    $this->resultat->execute($tval);
    return $this->resultat->fetchAll();
  }
}
?>
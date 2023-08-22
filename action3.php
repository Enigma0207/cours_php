<!-- ON VEUT SE CONNECTER A MYSQL NOTRE BASE DES DONNER -->

 <?php

function dbConnexion(){
  $connexionDb=null; // variable qui stocker notre instance de connexion à la bdd
  try{// essaie de se connecter à la bdd
  ;$connexionDb = new PDO ("mysql:host=localhost;dbname=cours_db","root","");// creer oi un objet avec new pdo et stock le dans $connexionDb
  } catch(PDOException $e){// si la connexion echoue, 
    $connexionDb = $e; //on recupere l'erreur dans $e
  }
  return $connexionDb;// retourne l'objet
}

 ?>
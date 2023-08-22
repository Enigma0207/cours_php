<?php
require_once("action3.php");

 if(isset($_POST['valider'])){
    //  recuperer des donnees saissie par l'utilisateur

    
    $nom = htmlspecialchars ($_POST['nom']);
    $prenom = htmlspecialchars ($_POST['prenom']);
    $motdepasse = htmlspecialchars ($_POST['motdepasse']);
    $confirmation = htmlspecialchars ($_POST['confirmation']);
    $email = htmlspecialchars($_POST['email']);
    //crypter le mot de passe hasher
    $motdepasse = password_hash($motdepasse, PASSWORD_DEFAULT);


    $db = dbConnexion();// etablir la connexion avec la db

   //  var_dump($db);
   // preparation de la requette
   $request =  $db->prepare("INSERT INTO utilisateur(nom , prenom , email, motdepasse) VALUES(?,?,?,?)");

   // execution de la requette

  try {// essayer d'enregistrer les info dans la table utilisateur
      $request->execute(array($nom, $prenom, $email, $motdepasse));
  } catch (PDOExeption $e) {
     echo $e->getMessage();//afficher l'erreur sql genere
  }

    
 }
?>
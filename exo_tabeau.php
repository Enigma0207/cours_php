    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>
 <!-- Ajout et suppression d'éléments
Créez un tableau vide.
 Ajoutez les nombres de 1 à 5 à ce tableau.
 Supprimez le troisième élément.
 Affichez le contenu final du tableau. -->

<!-- resolution1 -->
 <?php
   $tableau_vide=[];
   array_push( $tableau_vide,"1","2","3","4","5");
    
  print_r($tableau_vide); 
$tableau1=["1","c","n","4","x"];
  
  array_splice($tableau1, 2, 1);//2=supprimer à la position 2,1= un seul element donc n
//   print_r($tableau1); 
//   var_dump($tableau1);

 ;?>

 <!-- Recherche et modification
 Créez un tableau contenant plusieurs noms de pays.
 Vérifiez si "France" est présent dans le tableau.
 Si oui, remplacez "France" par "Espagne".
 Affichez le tableau modifié. -->

 <!-- resolution2 -->

<?php
//   $tableau_pays =["france","belgique","suisse"];
//  if(in_array("france", $tableau_pays)){
//     echo "<p>affirmatif</p>";
//     $position=array_search("france", $tableau_pays);//on suppose que l'on ne connait pas la position de france,on recupere sa position avec array_search
//     $tableau_pays[ $position]="espagne";
//  } else{
//      echo "<p>negatif</p>";
//  }
// echo "<pre>";
//     print_r($tableau_pays);
// echo "</pre>";
;?>


 <!-- exercice -->
    
 <!-- Tirage du loto :
/*
- on veut 5 numero differents au hasard de 1 à 49
- comment savoir si le n° est déjà sorti ?
- Trier les numero pour l'affichage final
- les numeros doivent etre séparé par des tirets (-) dans l'affichage final



- utilisez la fonction rand pour générer un nombre aléatoire
- exemple : $nombreAleatoire = rand(1, 49);
*/ -->

<!-- resolution3 -->
<!-- -declare un tableau vide,
tanque le tableau ne contient pas 5 numéro,
générer un numero aleatoir entre 1 et 49
verifier si le numero est deja dans le TABLEAU
si il y est pas l'ajouter dans le tableau sion ne rien faire -->

<?php
//   $numero =[] ;
// while (count($numero)<5) {
//     //creer un nombre aleatoir de 1 a 49
//     $numeroAleatoire = rand(1,49);
//     // si ce nombre nexiste pa remplir dans le tablea
//     if (!in_array($numeroAleatoire,$numero)){
//         $numero[] = $numeroAleatoire;
//     }
// }
// en ordre
// sort($numero);
// // separer les element par:-
// $numero = implode("-",$numero);

// // echo $numero;

?>

<?php
// function tirage($nombreNumeros, $maximum) {
//     $numerosTires = [];
    
//     while (count($numerosTires) < $nombreNumeros) {
//         $numeroAleatoire = rand(1, $maximum);
        
//         if (!in_array($numeroAleatoire, $numerosTires)) {
//             $numerosTires[] = $numeroAleatoire;
//         }
//     }
    
//     sort($numerosTires);
//     return $numerosTires;
// }

// // Exemple d'utilisation pour le tirage de 5 numéros jusqu'à 50
// $numerosTires = tirage(5, 50);
// $etoiles = tirage(2, 12);

// // Affichage des numéros tirés
// echo "Numéros tirés : " . implode('- ', $numerosTires). " etoiles ".implode('- ', $etoiles);
?>


<!-- FORMULAIRE -->

<?php

;?>


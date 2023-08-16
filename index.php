
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    // $nom= "alin";
    // $Prenom= "mans";
    // $nomComplet =$nom. " ". $Prenom;
    // echo "<p> Bonjour Je suis ".$nom. " " .$Prenom."</p>";

    //1VOIR UN TEXTE DANS UNE POSITION DONNEE

    $phrase= "la programation est amusant";
    $mot= substr( $phrase, 3, 13);//A LA PSITION 3,DONNE MOI 13POSITION 
     echo " pour ton info" . " " .$mot. "<br>";//programation    

    //1.  POUR AVOIR LA TAILIE
     $taille= strlen($phrase);
     echo " pour la taille" . " " .$taille. "<br>" ;

     $position1= strpos($phrase,"est");
     echo " la position ".$position1."<br>" ;

// FONCTION ISSET.
    // $maval= null;
    // if (isset($maval)){
    //     echo"existe bien";
    // }
    // else {
    //     echo"n'existe pas";
    // }
    // $maval1= 10;
    // if (isset($maval1)){
    //     echo"existe bien ";
    // }
    // else {
    //     echo"n'existe pas";
    // }

    // EXERCICE.


    // Exo 1:
// // À partir de la chaîne "La maison bleue", extrayez la sous-chaîne "bleue". pui affichez la
// $chaine = "La maison bleue";
// $extraire = substr($chaine, 10 );
//  echo $extraire."<br>". "<br>" ;

//     // Exo 2:
// // Remplacez le mot "mauvais" par "excellent" dans la chaîne suivante.
// $avis = "Ce film était vraiment mauvais.";
// // Effectuez le remplacement.

// $replace=str_replace("mauvais","excellent",$avis);
// echo $replace."<br>". "<br>" ;

//     // Exo 3:
// // Vous avez une chaîne de texte et vous souhaitez capitaliser la première lettre de cette chaîne.
// // La chaîne de texte
// $texte = "bienvenue sur notre site web.";
// // Capitalisez la première lettre
// $capital=ucfirst($texte);
// echo $capital."<br>". "<br>" ;

//     // Exo 5:
// // Vous avez des informations sur un produit : nom, prix et quantité.
// $nomProduit = "Ordinateur portable";
// $prixUnitaire = 899.99;
// $qtéUnitaire = 3;
// $prixTotal = $prixUnitaire*$qtéUnitaire;
// echo $prixTotal."<br>". "<br>" ;
 

//     // Calculez le prix total pour le produit et affichez-le.
//     // Exo 6:
// // Vous avez un panier d'achats avec plusieurs articles et vous souhaitez calculer le prix total avec une remise.
// // Détails des articles
// $article1 = "Livre";
// $prixArticle1 = 12.99;
// $quantiteArticle1 = 2;
// $article2 = "DVD";
// $prixArticle2 = 9.99;
// $quantiteArticle2 = 3;
// $article3 = "Casque audio";
// $prixArticle3 = 49.99;
// $quantiteArticle3 = 1;
// // Calcul du prix total avant remise et affichage

// // Calcul de la remise (10 % du prix total avant remise) et affichage
// // Calcul du prix total après remise et affichage
// // Calcul du prix total avant remise

// $prixTotalAvantRemise = ($prixArticle1 * $quantiteArticle1) + ($prixArticle2 * $quantiteArticle2) + ($prixArticle3 * $quantiteArticle3);
// echo "Prix tot befor : $prixTotalAvantRemise €<br>". "<br>";

// // Calcul de la remise (10 % du prix total avant remise)

// $remise = 0.1 * $prixTotalAvantRemise;
// echo "remise : $remise €<br>". "<br>";
// //après remise
// $prixTotalApresRemise = $prixTotalAvantRemise - $remise;
// echo "Prix tot after remise: $prixTotalApresRemise €<br>". "<br>";
// // Affichage des résultats

// // Vous avez un montant en euros que vous souhaitez convertir en dollars américains.
 
// // Montant en euros
// $montantEuros = 100;
// // Taux de change : 1 euro = 1.18 dollars américains
// $tauxChange = 1.18;
 
// // Calculez le montant en dollars puis affichez le
// $conersion = $montantEuros*$tauxChange;
// echo "100 euros valent :" .$conersion. "£<br>". "<br>";
  
// LES CONDITION

// TERNAIRE
# EXERCICE:
#soit la variable nombre
#ecrire un programme qui permet de tester si elle est paire ou impaire
#si elle est paire afficher => le nombre est paire
#si non afficher => le npombre est impaire
$nombre=3;
if($nombre%2==0){
echo "jour pair"."<br>";
}else {
    echo"nombre inpair"."<br>"."<br>";
}


    # EXERCICE:
# soit la variable age suivante
$age = 18;
#ecrire le code qui permet de verifier si age est superieur a 18
# si age est superieur ou egale a 18 afficher => majeur
# si age est inferieur a 18 afficher => mineur

// if ($age>=18) {
//     echo"majeur <br>";
    
// }
// else{
//     echo"mineur <br>";
// }
//     # EXERCICE:
// // une annee bissextile est une annee divisible par 4 et pas par 100 ou divisible par 400
// // ecrire un programme qui permet de verifier si une annee est bisextile ou pas
// // si elle l'est affiche annee bissextile
// // si non affiche annee pas bissextile

// $bissex=1998;
// if (($bissex%4==0)&&($bissex%100!==0)||($bissex%400==0)) {
//     echo"année bissextille";
// }
// else {
//     echo "année pas bissextille .<br>";
// }
?>
</body>
</html>

<?php

// //isset permet de verifier si la variable existe et est différent de vide
//  if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password'])  ) {
//     echo '<div class="alert alert-success">Bonjour ' . $_POST['nom'] . ' '.$_POST['prenom'] .'</div>';
//  }else {?>

   <!-- <div class="alert alert-danger" role="alert">
      Vous devez remplir tout les champs.
  </div> -->


<?php 

//  empty permet de voir si la variable vide kjhj^hfjhn^pfjpfhhohph
//   ! empty 
// $_GET OU $_POST

//  if(empty($_POST['nom']) or empty($_POST['prenom'])   or empty($_POST['password']) ) { ?>    

  <!-- <div class="alert alert-danger" role="alert">
     Vous devez remplir tout les champs.
 </div>  -->


 <?php 
// }else {
//     echo '<div class="alert alert-success" role="alert">Bonjour ' . $_POST['nom'] . ' '.$_POST['prenom']. '</div>';

// }
// ?>



<?php

// //empty permet de voir si la variable vide
// // ! empty 
// //$_GET OU $_POST

// if(empty($_POST['nom']) or empty($_POST['prenom'])   or empty($_POST['password']) ) { ?>    

 <!-- <div class="alert alert-danger" role="alert">
     Vous devez remplir tout les champs.
</div>
 -->
 <?php 
// }else {
//     echo '<div class="alert alert-success" role="alert">Bonjour ' . $_POST['nom'] . ' '.$_POST['prenom'] . ' '. $_POST['hidden'] . '</div>';

// }
// ?>

<!-- <a class="btn btn-primary" href="../index.php"> <--- Revenir en arrière </a>  -->



  <!-- formulaire avec habraham -->
 <?php 
 //si on valide, recupere moi la valeur de bnom email et msg dans le formulaire
//  if (isset($_POST['valider'])) {
//      //htmlspecialchars sest prevenir les attaque type xss(cross-site scrip)
//      $nom = htmlspecialchars ($_POST['nom']);
//      $email = htmlspecialchars($_POST['email']);
//      $message =htmlspecialchars ($_POST['message']);

     // stoquer les images telecharger
    //  echo "<pre>";
    //  print_r ($_FILES);
    //  echo "<pre>";
//      $imgName =$_FILES['image'] ['name'];//nom de l'image
//      $tmpName =$_FILES['image'] ['tmp_name'];// localisation temporaire sur le serveur

//      $destination = $_SERVER['DOCUMENT_ROOT'].'/cours_php/cours_php/images/'.$imgName;// DESTINATION FINALE DE MON IMAGE
//      // pour afficher le chemas final de image
//      echo $destination;
//     //  echo"$nom $email $message";
//      move_uploaded_file($tmpName, $destination);
 
//  }

 ?>

 <!-- formulaire 3 -->

<!-- EXERCICE -->

 <!-- Exercice : Formulaire d'Inscription

Dans cet exercice, vous allez créer un formulaire d'inscription en HTML et traiter les données soumises en utilisant PHP. Le formulaire d'inscription demandera aux utilisateurs de saisir leur nom, leur adresse e-mail, un mot de passe et de confirmer le mot de passe.

 

Créez un fichier HTML nommé formulaire_inscription.html contenant un formulaire d'inscription avec les champs suivants :
Nom complet (input de type texte)
Adresse e-mail (input de type email)
Mot de passe (input de type password)
Confirmer le mot de passe (input de type password)
Créez un fichier PHP nommé traitement_inscription.php pour traiter les données du formulaire d'inscription. Dans ce fichier :

 

Utilisez la méthode POST pour récupérer les données soumises du formulaire ($_POST).
Vérifiez si les champs nom, adresse e-mail, mot de passe et confirmation du mot de passe ne sont pas vides.
Vérifiez si le mot de passe et la confirmation du mot de passe correspondent.
Si tous les champs sont remplis et les mots de passe correspondent, affichez un message de confirmation.
Si au moins un champ est vide ou les mots de passe ne correspondent pas, affichez un message d'erreur et indiquez les champs manquants ou incohérents.
Dans le fichier HTML, assurez-vous que le formulaire envoie les données soumises à la page de traitement PHP (traitement_inscription.php) en utilisant la méthode POST. -->

  <?php 
 //si on valide, recupere moi la valeur de bnom email et msg dans le formulaire
//  
//   if(isset($_POST['valider'])){

//     $nom = htmlspecialchars ($_POST['nom']);
//     $prenom = htmlspecialchars ($_POST['prenom']);
//     $motdepasse = htmlspecialchars ($_POST['motdepasse']);
//     $confirmation = htmlspecialchars ($_POST['confirmation']);
//     $email = htmlspecialchars($_POST['email']);
//     // $valider = htmlspecialchars($_POST['valider']);
//     if(!empty($_POST['nom'])||!empty($_POST['prenom'])||!empty($_POST['motdepasse'])|| !empty($_POST['email'])|| !empty($_POST['confirmation']) ){
//       if(($_POST['motdepasse'])===($_POST['confirmation'])){
//         echo " $nom $prenom $email";
//       } else{
//         echo "les mots de passe ne correspondent pas";
//       }
//         // echo " $nom $prenom $email";
//     } else{ 
//       echo  "champs manquant";
//     }
    
    

//  }

 ?>

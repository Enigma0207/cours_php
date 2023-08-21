
<?php

// //isset permet de verifier si la variable existe et est différent de vide
//  if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password'])  ) {
//     echo '<div class="alert alert-success">Bonjour ' . $_POST['nom'] . ' '.$_POST['prenom'] .'</div>';
//  }else {?>

   <!-- <div class="alert alert-danger" role="alert">
      Vous devez remplir tout les champs.
  </div> -->


<?php 

//  empty permet de voir si la variable vide 
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

  <?php 
 //si on valide, recupere moi la valeur de bnom email et msg dans le formulaire
//  if( ( isset($_POST['valider']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['motdepasse'])) && (  ($_POST['motdepasse'])==($_POST['confimation']) ) ){
  if(isset($_POST['valider'])){

    $nom = htmlspecialchars ($_POST['nom']);
    $prenom = htmlspecialchars ($_POST['prenom']);
    $motdepasse = htmlspecialchars ($_POST['motdepasse']);
    $confirmation = htmlspecialchars ($_POST['confirmation']);
    $email = htmlspecialchars($_POST['email']);
    // $valider = htmlspecialchars($_POST['valider']);
  if(( ($_POST['nom'])||($_POST['prenom'])||($_POST['motdepasse'])||($_POST['email'])||($_POST['confirmation']))){
    

 }




 ?>

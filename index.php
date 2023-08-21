
<?php
include('head.php');
?>
<body>
    <?php
        // $nom= "alin";
        // $Prenom= "mans";
        // $nomComplet =$nom. " ". $Prenom;
        // echo "<p> Bonjour Je suis ".$nom. " " .$Prenom."</p>";
    
        //1VOIR UN TEXTE DANS UNE POSITION DONNEE
    
        $phrase= "la programation est amusant";
        $mot= substr( $phrase, 3, 13);//A LA PSITION 3,DONNE MOI 13POSITION 
        //  echo " pour ton info" . " " .$mot. "<br>";//programation    
    
        //1.  POUR AVOIR LA TAILIE
         $taille= strlen($phrase);
        //  echo " pour la taille" . " " .$taille. "<br>" ;
    
         $position1= strpos($phrase,"est");
        //  echo " la position ".$position1."<br>" ;
    
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
        // echo"nombre inpair"."<br>"."<br>";
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
     <?php 
        // $prenom= "Karima"; // string
        //         $nom =  "DUPONT"; // string 
        //         $number = 100; // int 
        //         $num2 = 1.4; //float 
        //         $bool = true; //boolean 
    
        //         $age = 28;
        //         $tab = [
        //             'nom'=> 'test',
        //             'prenom'=> 'test',
        //         ]; // array
    
        //         $somme = $number+ $num2;
    
    
        //         echo 'Age avant modification ' . $age;
        //        $increment =  $age ++; // $age= $age+1
        //        $decrement =  $age --; // $age= $age-1
        //        echo 'Age après modification ' . $age;
     ;?>
    
     <!-- ****************************TAILLE DE TABLE*************************************************** -->
    
        
    
    
        <!-- // CONNAITRE LA TAILLE DE MON TABLEAU  -->
    <?php
    // $etudiants = ["toto", "tata" ,"toni", "amelie"];        
    // $size = count($etudiants); //la taille du tableau
    // var_dump($etudiants);
    // echo  '<br/>La taille du tableau est : ' .$size ;
    ;?>
                
    
       <!-- *******************************FOREACH************************************************ -->
       <!-- UTILISATION DE foreach ET DE IF  -->

       <?php

            $data = ['Hillary'=> 'Nyakundi', 'Lary' => 'Mak' ];

           foreach ($data as $cle => $value) {
            // echo 'Bienvenue agent 00'. $cle . '  ' .  $value . '<br/>';

             }

       ;?>
       <!-- *****************************TABLEAU***************************************** -->

       <!-- <table border="2">
               <tr>
                  <th>Prénom</th>
                  <th>Nom</th>
                </tr>

              <?php foreach($data as $nom=> $prenom) {?>
                             <tr>
                                 <td><?php echo $nom ; ?> </td>
                                 <td><?php echo $prenom ; ?></td>
                            </tr>
             <?php }?> 
             
      </table> -->

<!-- **************** -->

<?php

//FORMULAIRE SUR php

//CRUD  => create, update , read delete 


//POST  =>  pour récuperer une information depuis le formulaire 
//GET => pour récupérer information depuis l'url
//PUT  Modification 


?>

<br>
<!-- <div class="container">
    <label for="">civilite</label>
    <select name="civility" id="">
        
        <option value="">sexe</option>
        <option value="">homme</option>
        <option value="">femme</option>
    </select> -->
<!-- avec la mthode POST on peut recuper nos données du formulaire $["name"] dans fichier action -->
     <!-- <form method="POST" action="/action.php">
            <label for=""> Nom </label>
            <input name="firstname" class="form-control"  type="text" placeholder="Entrer le nom"> <br>

            <br>
            <label for=""> Prénom </label>
            <input name="lastname" class="form-control" type="text" placeholder="Entrer le prénom">  <br>

            <br>
            <label for=""> Mot de passe  </label>
            <input name="password"  class="form-control" type="password" placeholder="Entrer le mot de pass">  <br>

            <input type="hidden" value="Une information caché" name="hidden" />
            <br>
            <input type="radio"  class="form-check-input" name="country" id="france">

            <label class="form-check-label" for="" >France</label>


            <div><label for="">Date de naissance:</label></div>
    
            <input type="date" name="birthday">
    
            <div><label for="">Numéro de téléphone:</label></div>
    
            <input type="number" name="phone">
    
            <div><label for="">Commentaires:</label></div>
    
            <textarea name="message" id="" cols="30" rows="10"></textarea>
    
            <input type="submit" value="Sauvegarder" class="btn btn-secondary">

            <label id="conditions">J'accepte les conditions générales d'utilisation</label>

        <input type="checkbox" id="scales" name="conditionner" /><br>
           
    </form>  -->

  
    

</div>

   <!-- formulaire 2 -->
<!-- <form action="action2.php" method="post" enctype ="multipart/form-data">
   <input type="text" name="nom" placeholder="nom">
 <br>
   <input type="text" name="email" placeholder="email">
 <br>
   <textarea name="message" id="" cols="30" rows="10"></textarea>
   <input type="file" name = "image">
   <button name="valider">Envoyer</button>
 </form> -->

 <!-- formulaire 3 -->
 

 <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
  .container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 300px;
  }
  .form-group {
    margin-bottom: 15px;
  }
  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }
  input[type="text"],
  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
  }
</style>
</head>
<body>
  <div class="container">
    <h2>Inscription</h2>
    <form action="action2.php" method="post" enctype ="multipart/form-data">
      <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
      </div>
      <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
      </div>
      <div class="form-group">
        <label for="email">Adresse email :</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="motdepasse" required>
      </div>
      <div class="form-group">
        <label for="confirmation">Confirmation du mot de passe :</label>
        <input type="password" id="confirmation" name="confirmation" required>
      </div>
      <button type="submit" name = valider>S'inscrire</button>
    </form>
  </div>
</body>
</html>
<!-- <style>

    .text {
        color: red ;
    }
    .success {
        color:chartreuse;
    }
</style> -->
</body>
</html>
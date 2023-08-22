
<!-- LE BUT ICI C'EST D'AFFICHER LES DONNEES SE TROUVANT DANS LA BASE DES DONNEES SOUS FORME DE TABLEAU -->
<?php
// on veut etablir la connexion a la base des données
require_once 'action3.php';
$db = dbConnexion();
// PREPARERATION DE LA REQUETE
$request = $db->prepare("SELECT * FROM utilisateur");
//éxécuter la requete
try {
    $request->execute();
    $users = $request->fetchAll();
} catch (PDOExepetion $e) {
    $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>

            </tr>
        </thead>
        <tbody>
            <!-- afficher les info des utilisateurs dans tableau html -->
            <?php foreach($users as $u){?>
                <tr>
                    <td><?= $u['nom']?></td>
                    <td><?= $u['prenom']?></td>
                    <td><?= $u['email']?></td>
                </tr>

            <?php }?>
        </tbody>
    </table>
</body>
</html>
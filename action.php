<!-- liaison php base des données -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "biblio";
try {
$pdo = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
// set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully"; // affichez moi successfully si cest bon
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage(); // affichez moi failed si cest pas bon
}
echo "<pre>";
var_dump($_POST);
echo "</pre>";
die;

// Données à insérer comme exemple
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$message = "Hi, It's my first message.";

// Requête d'insertion préparée
$sql = "INSERT INTO userphp (firstname, lastname, email, message) VALUES (:firstname, :lastname, :email, :message)";
$stmt = $pdo->prepare($sql);

// Associer les valeurs aux paramètres
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':message', $message);

// Exécuter la requête
try {
    $stmt->execute();
    echo "Données insérées avec succès.";
} catch (PDOException $e) {
    echo "Erreur d'insertion : " . $e->getMessage();
}


?>




</body>
</html>

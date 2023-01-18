<html>
<?php
require_once '../navbar.php';
require_once 'settings.php';
?>
<form method="post">
    <label for="prenom">Prenom :</label>
    <input type="text" id="prenom" name="prenom" required="required">
    <br>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required="required">
    <br>
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required="required">
    <br>
    <label for="contact">Portable :</label>
    <input type="text" id="contact" name="contact" required="required">
    <br>
    <label for="adresse">Adresse :</label>
    <input type="text" id="adresse" name="adresse" required="required">
    <br>
    <input type="submit" value="Envoyer">
</form>

<?php
error_reporting(0);
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$adresse = $_POST['adresse'];

// Préparation de la requête d'insertion

    $query = 'INSERT INTO users (prenom, nom, email, contact, adresse) VALUES (:prenom, :nom, :email, :contact, :adresse)';
    $statement = $pdo->prepare($query);
// Binding des valeurs
    $statement->bindValue(':prenom', $prenom);
    $statement->bindValue(':nom', $nom);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':contact', $contact);
    $statement->bindValue(':adresse', $adresse);
    $statement->execute();

header('Location: ../index.php');
exit;
?>
</html>
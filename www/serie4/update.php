<html>
<body>
<?php require_once '../navbar.php' ?>
<?php
require_once 'settings.php';

// Récupération de l'ID de l'utilisateur à mettre à jour
$id = $_GET['id'];

// Vérification de la soumission du formulaire
if (isset($_POST['submit'])) {
    // Récupération des données du formulaire
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $adresse = $_POST['adresse'];

    // Préparation de la requête de mise à jour
    $query = 'UPDATE users SET prenom = :prenom, nom = :nom, email = :email, contact = :contact, adresse = :adresse WHERE id = :id';
    $stmt = $pdo->prepare($query);

    // Binding des valeurs
    $stmt->bindValue(':prenom', $prenom);
    $stmt->bindValue(':nom', $nom);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':contact', $contact);
    $stmt->bindValue(':adresse', $adresse);
    $stmt->bindValue(':id', $id);

    // Exécution de la requête
    $stmt->execute();

    // Redirection vers la page de listing des utilisateurs
    header('Location: index.php');
    exit;
}
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
    <input type="number" id="contact" name="contact" required="required">
    <br>
    <label for="adresse">Adresse :</label>
    <input type="text" id="adresse" name="adresse" required="required">
    <br>
    <input type="submit" name="submit" value="Mettre à jour">
</form>
</body>
</html>

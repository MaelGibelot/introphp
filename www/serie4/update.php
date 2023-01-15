<html>
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

    header('Location: index.php');
    exit;
}

// Préparation de la requête de sélection
$query = 'SELECT * FROM users WHERE id = :id';
$stmt = $pdo->prepare($query);

// Binding de l'ID
$stmt->bindValue(':id', $id);

// Exécution de la requête
$stmt->execute();

// Récupération des données de l'utilisateur
$user = $stmt->fetch();

// Affichage du formulaire pré-rempli
?>

<form method="post">
    <label for="prenom">Prenom :</label>
    <input type="text" id="prenom" name="prenom" value="<?php echo $user['prenom']; ?>">
    <br>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" value="<?php echo $user['nom']; ?>">
    <br>
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>">
    <br>
    <label for="contact">Portable :</label>
    <input type="text" id="contact" name="contact" value="<?php echo $user['contact']; ?>">
    <br>
    <label for="adresse">Adresse :</label>
    <input type="text" id="adresse" name="adresse" value="<?php echo $user['adresse']; ?>">
    <br>
    <input type="submit" name="submit" value="Enregistrer">
</form>

<html>
<body>
<?php require_once '../navbar.php' ?>
<?php
require_once 'settings.php';

// Récupération de l'ID de l'utilisateur à supprimer
$id = $_GET['id'];

// Préparation de la requête de suppression
$query = 'DELETE FROM users WHERE id = :id';
$statement = $pdo->prepare($query);

// Binding de l'ID
$statement->bindValue(':id', $id);

// Exécution de la requête
$statement->execute();

// Redirection vers la page de listing des utilisateurs
header('Location: index.php');
exit;
?>
</body>
</html>
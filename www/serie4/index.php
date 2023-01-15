<html>
<head>
    <script src="https://kit.fontawesome.com/30505619c2.js" crossorigin="anonymous"></script>
</head>
<?php
require_once '../navbar.php'; ?>
<body>
<form action="insert.php">
    <input type="submit" value="Ajouter un utilisateur">
</form>
<?php
require_once 'settings.php';

// Exécution de la requête pour sélectionner tous les enregistrements de la table "users"
$query = 'SELECT * FROM users';
$result = $pdo->query($query);
$rows = $result->fetchAll();

// Affichage des enregistrements
echo '<table>';
echo '<tr>';
echo '<th>id</th>';
echo '<th>Prenom</th>';
echo '<th>Nom</th>';
echo '<th>Email</th>';
echo '<th>Contact</th>';
echo '<th>Adresse</th>';
echo '<th>InscriptionDate</th>';
echo '<th>Modifier</th>';
echo '<th>Supprimer</th>';
echo '</tr>';
foreach ($rows as $row) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['Prenom'] . '</td>';
    echo '<td>' . $row['Nom'] . '</td>';
    echo '<td>' . $row['Email'] . '</td>';
    echo '<td>' . $row['Contact'] . '</td>';
    echo '<td>' . $row['Adresse'] . '</td>';
    echo '<td>' . $row['InscriptionDate'] . '</td>';
    echo '<td><a href="update.php?id=' . $row['id'] . '"><img src="pencil.png" style="display : flex; margin-inline: auto"></a></td>';
    echo '<td><a href="delete.php?id=' . $row['id'] . '">Supprimer</a></td>';
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>
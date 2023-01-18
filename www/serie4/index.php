<html>
<?php
require_once '../navbar.php'; ?>
<body>
<div class="choix">
    <a href="insert.php"><img class="plus" src="plus.png"></a>
    <a href="search.php"><img class="loupe" src="loupe.png"></a>
</div>
<!--<form action="insert.php">
    <input type="submit" value="Ajouter un utilisateur">
    <a href="search.php"><img class="loupe" src="loupe.png"></a>
    <input type="submit"  value="Rechercher un utilisateur">
</form> -->
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
    echo '<td><a href="update.php?id=' . $row['id'] . '"><img class="crayon" src="pencil.png"></a></td>';
    echo '<td><a href="delete.php?id=' . $row['id'] . '"><img class="poubelle" src="effacer.png"></a></td>';
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>
<html>
<body>
<?php
require_once '../navbar.php'; ?>

<div class="choix">
    <a href="insert.php"><img class="plus" src="assets/plus.png"></a>
    <a href="search.php"><img class="loupe" src="assets/loupe.png"></a>
</div>
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
    echo '<td><a href="update.php?id=' . $row['id'] . '"><img class="crayon" src="assets/pencil.png"></a></td>';
    echo '<td><a href="delete.php?id=' . $row['id'] . '"><img class="poubelle" src="assets/effacer.png"></a></td>';
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>
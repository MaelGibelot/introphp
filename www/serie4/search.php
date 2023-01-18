<html>
<?php
require_once '../navbar.php';

require_once 'settings.php';

// Récupération des données de recherche
$search = $_GET['search'];

// Préparation de la requête de recherche
$query = 'SELECT * FROM users WHERE prenom LIKE :search OR nom LIKE :search OR email LIKE :search OR contact LIKE :search OR adresse LIKE :search';
$statement = $pdo->prepare($query);

// Binding des valeurs
$statement->bindValue(':search', '%' . $search . '%');

// Exécution de la requête
$statement->execute();

// Récupération des résultats de la requête
$results = $statement->fetchAll();

// Affichage des résultats
echo '<table>';
echo '<tr>';
echo '<th>id</th>';
echo '<th>Prenom</th>';
echo '<th>Nom</th>';
echo '<th>Email</th>';
echo '<th>Contact</th>';
echo '<th>Adresse</th>';
echo '<th>InscriptionDate</th>';
echo '</tr>';
foreach ($results as $result) {
    echo '<tr>';
    echo '<td>' . $result['id'] . '</td>';
    echo '<td>' . $result['prenom'] . '</td>';
    echo '<td>' . $result['nom'] . '</td>';
    echo '<td>' . $result['email'] . '</td>';
    echo '<td>' . $result['contact'] . '</td>';
    echo '<td>' . $result['adresse'] . '</td>';
    echo '<td>' . $result['inscription_date'] . '</td>';
    echo '</tr>';
}
echo '</table>';

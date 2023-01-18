<html>
<?php
require_once '../navbar.php'; ?>

<form method="post">
    <label for="nom"><strong>Nom</strong></label><br>
    <input type="text" name="nom"/> <br>
    <label for="email"><strong>Mail</strong></label><br>
    <input type="text" name="mail"/> <br>
    <input type="submit" value="Rechercher">
</form>

<?php
require_once 'settings.php';

error_reporting(0);
// Préparation de la requête de recherche
$query = "SELECT id, nom, prenom, email, contact, adresse, inscriptionDate FROM users WHERE nom LIKE :nom OR email LIKE :mail";
$stmt = $pdo->prepare($query);
    $stmt->bindValue(':nom', "%" . $_POST['nom'] . "%", PDO::PARAM_STR);
    $stmt->bindValue(':mail', "%" . $_POST['mail'] . "%", PDO::PARAM_STR);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
    echo '<td>' . $result['inscriptionDate'] . '</td>';
    echo '</tr>';
}
echo '</table>';
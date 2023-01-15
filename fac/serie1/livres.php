<html>
<body>
<?php
include_once '../navbar.php';
$auteurs = array("Steinbeck", "Kafka", "Tolkien", "Dickens", "Milton", "Orwell");
$livres = array(
    'livre 1' => array(
        'titre' => "The Hobbit",
        'auteurId' => "2",
        'pubAnnee' => "1937"),

    'livre 2' => array(
        'titre' => "The Grapes of Wrath",
        'auteurId' => "0",
        'pubAnnee' => "1939"),

    'livre 3' => array(
        'titre' => "A Tale of Two Cities",
        'auteurId' => "3",
        'pubAnnee' => "1859"),

    'livre 4' => array(
        'titre' => "Paradise Lost",
        'auteurId' => "4",
        'pubAnnee' => "1667"),

    'livre 5' => array(
        'titre' => "Animal Farm",
        'auteurId' => "5",
        'pubAnnee' => "1945"),

    'livre 6' => array(
        'titre' => "The Trial",
        'auteurId' => "1",
        'pubAnnee' => "1925")
);
echo "<pre>";

foreach ($livres as $section => $items) {
    echo "$section :" . "<br>";
    foreach ($items as $key => $valeurs) {
        echo "\t$key: $valeurs<br>";
        for ($i = 0; $i < count($auteurs); ++$i) {
            if ($key == 'auteurId' && "$valeurs" == "$i") {
                echo "\tAuteur : $auteurs[$i] <br>";
            }
        }
    }
}
echo "</pre>";

?>
</body>
</html>

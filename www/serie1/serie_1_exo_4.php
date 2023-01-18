<html>
<body>
<?php
include_once '../navbar.php';

$matrice = array();
$nbcol = 40;
$nbline = 40;
$nbmine = 15;

for ($i = 0; $i < $nbline; $i++) {
    for ($j = 0; $j < $nbcol; $j++) {
        $matrice[$i][$j] = ".";
    }
}
for ($i = 0; $i < $nbmine; $i++) {
    $row = rand(0, $nbline - 1);
    $col = rand(0, $nbcol - 1);
    $matrice[$row][$col] = "*";
}

for ($i = 0; $i < $nbline; $i++) {
    for ($j = 0; $j < $nbcol; $j++) {
        print_r($matrice[$i][$j] . " ");
        echo "\t \t";
    }
    echo "<br>";
}

?>
</body>
</html>

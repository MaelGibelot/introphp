<html>
<body>
<table>
    <tr>
        <th>Nombre</th>
        <th>Pair / Impair</th>
        <th>Nombre Premier</th>
    </tr>
    <?php
    include_once '../navbar.php';
    for ($i = 1; $i <= 10; $i++) {
        $is_prime = true;
        if ($i == 1) {
            $is_prime = false;
        }
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $is_prime = false;
            }
        }
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>" . ($i % 2 == 0 ? "Pair" : "Impair") . "</td>";
        echo "<td>" . ($is_prime ? "Oui" : "Non") . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
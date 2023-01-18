<html>
<body>
<table>
    <tr>
        <th> Année bissextile</th>
    </tr>
    <?php
    include_once '../navbar.php';

    $i = 2023;
    $j = 0;
    while ($j < 100) {
        if (($i % 4 == 0 && $i % 100 != 0) || $i % 400 == 0) {
            echo "<tr> ";
            echo "<td>$i</td>";
            echo "</tr>";
            ++$j;
        }
        ++$i;
    }
    ?>
</table>
</body>
</html>

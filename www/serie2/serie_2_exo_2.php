<html>
<body>
<?php require_once '../navbar.php'; ?>
<table style="border: 1px solid black; border-collapse: collapse">
    <tr style="border: 1px solid black; border-collapse: collapse">
        <th style="border: 1px solid black; border-collapse: collapse">Entier</th>
        <th style="border: 1px solid black; border-collapse: collapse">Factoriel</th>
    </tr>
    <?php

    function weakCalcFactoriel($n)
    {
        if ($n == 0) {
            echo "<tr><td>$n </td><td>1 <br></td></tr>";
        } else if ($n > 0) {
            $res = $n * weakCalcFactoriel($n - 1);
            echo "<tr><td>$n </td><td>$res<br></td></tr>";
            return $res;
        }
        return 1;
    }

    weakCalcFactoriel(10);
    ?>
</table>
</body>
</html>

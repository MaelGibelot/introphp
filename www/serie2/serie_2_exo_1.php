<html>
<body>
<?php require_once '../navbar.php'; ?>
<h1>Une fonction pour afficher un tableau associatif</h1>
<form>
    <?php

    require_once '../navbar.php';

    function afficherTab($arrayAsso)
    {
        foreach ($arrayAsso as $key => $value) {
            $listHTML = "$key : $value<br>";
            echo $listHTML;
        }
        return $listHTML;
    }

    $randomArray = array('titre' => "The Hobbit",
        'auteur' => "2",
        'pubAnnee' => "1937");
    afficherTab($randomArray);
    ?>
</form>
</body>
</html>

<?php require_once '../navbar.php' ?>

    <form method="post"> Générateur de factures :
        <p>Numéro client : <input type="text" name="numcl"/></p>
        <p>Code service (r ou p) : <input type="text" name="codeserv"/></p>
        <p>L'appel a été passé entre : </p>
        <select name="tranche">
            <option value="1">6h00 et 18h00</option>
            <option value="2">18h00 et 6h00</option>
        </select>
        <p>Durée totale (en minutes) : <input type="number" name="duree"/></p>
        <button type="submit">Calculer</button>
    </form>

<?php
$somme = 0;
$cpt = 0;
$service = "En attente";


if ( isset($_POST['tranche']) && isset($_POST['codeserv']) && $_POST['tranche'] == 1 && ($_POST['codeserv'] == 'p' || $_POST['codeserv'] == 'P')) {
    //echo "L'utilisateur a téléphoné en journée et possède le service premium";
    if ($_POST['duree'] > 75) {
        $cpt = $_POST['duree'] - 75;
        $somme = 25 + $cpt * 0.1;
    } else {
        $somme = 25;
    }
}

if (isset($_POST['codeserv'])){

    if (isset($_POST['duree']) && $_POST['codeserv'] == 'r' || $_POST['codeserv'] == 'R') {
        //echo "L'utilisateur a téléphoné en journée et possède le service classique";
        if ($_POST['duree'] > 50) {
            $cpt = $_POST['duree'] - 50;
            $somme = 10 + $cpt * 0.2;
        } else {
            $somme = 10;
        }
    }

    if (isset($_POST['duree']) && isset($_POST['tranche']) && $_POST['tranche'] == 2 && ($_POST['codeserv'] == 'p' || $_POST['codeserv'] == 'P')) {
        //echo "L'utilisateur a téléphoné de nuit et possède le service premium";
        if ($_POST['duree'] > 100) {
            $cpt = $_POST['duree'] - 100;
            $somme = 25 + $cpt * 0.05;
        } else {
            $somme = 25;
        }
    }

    if ($_POST['codeserv'] == 'r' || $_POST['codeserv'] == 'R') {
        $service = "classique";

    }
    if ($_POST['codeserv'] == 'p' || $_POST['codeserv'] == 'P') {
        $service = "premium";
    }
}
if (!empty($_POST)) {
    if ($service == "classique" || $service == "premium") {
        echo "Le client numéro " . $_POST['numcl'] . " qui possède le service " . $service . " a passé un appel pendant " . $_POST['duree'] . " min. Il vous doit la somme de : " . $somme . " euros.";
    } else {
        echo "Erreur dans la saisie du code de service.";
    }
}
?>

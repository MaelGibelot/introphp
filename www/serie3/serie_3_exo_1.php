<?php require_once '../navbar.php'; ?>

<h1>Guess the number</h1>
<h3>Le nombre est compris entre 0 et 100 !</h3>

<?php
session_start();

if (!isset($_SESSION["rand"])) {
    $_SESSION["rand"] = rand(1, 100);
    $_SESSION['counter'] = 0;
}

$_SESSION['counter'] += 1;

$secretNumber = $_SESSION['rand'];
$cpt = $_SESSION['counter'];
if (isset($_POST['guess'])) {
    $saisi = $_POST['guess'];
}
if ($cpt > 1 && $cpt < 6) {
    if (isset($_POST['guess']) && $secretNumber < $saisi) {
        echo "moins !! <br>";
    }
    if (isset($_POST['guess']) && $secretNumber > $saisi) {
        echo "plus !! <br>";
    }
}
if (isset($_POST['guess']) && $_SESSION["rand"] == $_POST['guess']) {
    echo "Vous avez gagné, le nombre était $secretNumber";

    $_SESSION['counter'] = 0;
    $_SESSION["rand"] = rand(1, 100);
}
if ($_SESSION['counter'] > 5) {
    echo "Vous avez perdu, le nombre était $secretNumber<br>";
    $_SESSION['counter'] = 0;
    $_SESSION["rand"] = rand(1, 100);
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <label for="guess">Votre proposition : </label>
    <input type="number" id="guess" name="guess">
    <input type="submit" value="Guess">
</form>

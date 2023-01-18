<html>
<body>
<?php
require_once '../navbar.php';
?>

<form action="" method="post">
    <input type="number" name="nb1" placeholder="Saisissez un nombre" required="required">
    <input type="number" name="nb2" placeholder="Saisissez un autre nombre" required="required">
    <br>
    <input type="submit" name="add" value="Additionner">
    <input type="submit" name="sous" value="Soustraire">
    <input type="submit" name="mult" value="Multiplier">
    <input type="submit" name="div" value="Diviser">
    <input type="submit" name="squareRoot" value="Racine carrée">
    <input type="submit" name="expo" value="Exposant">
</form>


<?php


class Calculette
{
    public $nb1;
    public $nb2;

    public function __construct($nb1, $nb2)
    {
        $this->nb1 = $nb1;
        $this->nb2 = $nb2;
    }

    function add()
    {
        return $this->nb1 + $this->nb2;
    }

    function sous()
    {
        return $this->nb1 - $this->nb2;
    }

    function mult()
    {
        return $this->nb1 * $this->nb2;
    }

    function div()
    {
        return $this->nb1 / $this->nb2;
    }
}

class CalcAdenced extends Calculette
{
    public function __construct($nb1, $nb2)
    {
        parent::__construct($nb1, $nb2);
    }

    function squareRoot()
    {
        return sqrt($this->nb1);
    }

    function expo()
    {
        return exp($this->nb1);
    }
}

$calc = new Calculette(0, 0);
$calcAdv = new CalcAdenced(0, 0);

if (isset($_POST['nb1']) && isset($_POST['nb2'])) {

    if (isset($_POST['add'])) {
        $calc->nb1 = $_POST['nb1'];
        $calc->nb2 = $_POST['nb2'];
        echo $calc->add() . "<br>";
    }
    if (isset($_POST['sous'])) {
        $calc->nb1 = $_POST['nb1'];
        $calc->nb2 = $_POST['nb2'];
        echo $calc->sous() . "<br>";
    }
    if (isset($_POST['mult'])) {
        $calc->nb1 = $_POST['nb1'];
        $calc->nb2 = $_POST['nb2'];
        echo $calc->mult() . "<br>";
    }
    if (isset($_POST['div'])) {
        $calc->nb1 = $_POST['nb1'];
        $calc->nb2 = $_POST['nb2'];
        echo $calc->div() . "<br>";
    }
}
if (isset($_POST['nb1'])) {
    if (isset($_POST['squareRoot'])) {
        $calcAdv->nb1 = $_POST['nb1'];
        $calcAdv->nb2 = $_POST['nb2'];
        echo $calcAdv->squareRoot() . "<br>";
    }
    if (isset($_POST['expo'])) {
        $calcAdv->nb1 = $_POST['nb1'];
        $calcAdv->nb2 = $_POST['nb2'];
        echo $calcAdv->expo() . "<br>";
    }
}
?>
</body>
</html>

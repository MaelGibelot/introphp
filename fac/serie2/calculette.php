<?php
require_once '../navbar.php';

class Calculette{
    public $nb1;
    public $nb2;
    public  function __construct($nb1, $nb2) {
        $this->nb1 = $nb1;
        $this->nb2 = $nb2;
    }

    function add(){return $this->nb1+$this->nb2;}
    function sous(){return $this->nb1-$this->nb2;}
    function mult(){return $this->nb1*$this->nb2;}
    function div(){return $this->nb1/$this->nb2;}

}


class CalcAdenced extends Calculette {
    public function __construct($nb1, $nb2) {
        parent::__construct($nb1, $nb2);
    }

    function squareRoot(){return sqrt($this->nb1);}
    function  expo(){return exp($this->nb1);}
}



$calc = new Calculette(2,3);
$calcAdv = new CalcAdenced(2,3);
echo $calc -> add();
echo "<br>";
echo $calc -> sous();
echo "<br>";
echo $calc -> mult();
echo "<br>";
echo $calc -> div();
echo "<br>";
echo $calcAdv -> squareRoot();
echo "<br>";
echo $calcAdv -> expo();


?>

<?php

require_once '../navbar.php';

if(isset($_POST['colorText']) && isset($_POST['textSize'])){
    setcookie( "colo", $_POST['colorText'], time()+3600 );
    setcookie( "size", $_POST['textSize'], time()+3600 );
}
if( isset( $_COOKIE['colo']) && isset( $_COOKIE['size'] )){
    $colo = $_COOKIE['colo'];
    $txtSize = $_COOKIE['size'];
}
else{
    $colo = 'black';
    $txtSize = 50;
}

?>

    <form method="Post">


        <Select name="colorText" >
            <option >Couleur de texte
            <option value="BLACK">BLACK
            <option value="WHITE">WHITE
            <option value="RED">RED
            <option value="BLUE">BLUE
            <option value="YELLOW">YELLOW
            <option value="PINK">PINK
            <option value="GREEN">GREEN
            <option value="GREY">GREY
            <option value="ORANGE">ORANGE
            <option value="VIOLET">VIOLET
        </Select>



        <Select name="textSize">
            <option >Taille de police
            <option value="10">10
            <option value="20">20
            <option value="30">30
            <option value="40">40
            <option value="50">50
            <option value="60">60
            <option value="70">70
            <option value="80">80
            <option value="90">90
            <option value="100">100
        </Select>
        <input type="submit"  value="Définir vos préférences"  />


    </form>

<?php
if( isset( $_COOKIE['colo']) && isset( $_COOKIE['size'] )){
    echo "<p style='color: $colo;font-size:$txtSize; text-align: center';> WOWOWOWOW !! This text is insane !! </p>";
}
else{
    echo "<p style='color: $colo;font-size:$txtSize; text-align: center';> WOWOWOWOW !! This text is insane !! </p>";
}

?>
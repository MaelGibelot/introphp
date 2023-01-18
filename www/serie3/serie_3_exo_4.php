<html>
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
    $colo = "BLACK";
    $txtSize = "50px";
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
            <option value="10px">10
            <option value="20px">20
            <option value="30px">30
            <option value="40px">40
            <option value="50px">50
            <option value="60px">60
            <option value="70px">70
            <option value="80px">80
            <option value="90px">90
            <option value="100px">100
        </Select>
        <input type="submit"  value="Définir vos préférences"  />


    </form>

<?php
if( isset( $_COOKIE['colo']) && isset( $_COOKIE['size'] )){
    echo "<p style='font-size: $txtSize; color: $colo; text-align: center';> WOWOWOWOW !! This text is insane !! </p>";
}
else{
    echo "<p style='color: $colo;font-size:$txtSize; text-align: center';> WOWOWOWOW !! This text is insane !! </p>";
}

?>
</html>

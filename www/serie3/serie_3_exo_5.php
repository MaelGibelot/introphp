<html>
<body>
<?php

require_once '../navbar.php';

session_start();
if (isset($_POST['dc'])) {
    $Utilisateur = 'null';
    $password = 'null';
    unset($hideLogin);
    session_destroy();
}
if (isset($_POST['Utilisateur']) && isset($_POST['password'])) {
    $Utilisateur = $_POST['Utilisateur'];
    $password = $_POST['password'];

    // vérifie si les informations d'identification sont correctes
    if ($Utilisateur == 'user' && $password == 'password') {
        $_SESSION['logged_in'] = true;
        date_default_timezone_set('Europe/Paris');
        if (!isset($_SESSION['login_time'])) {
            $_SESSION['login_time'] = time();
        }
        $hideLogin = true;


    } else {
        $error_message = 'Utilisateur ou mot de passe incorrect.';
    }
}

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true && isset($hideLogin)) {

    $login_time = date('H:i:s', $_SESSION['login_time']);
    $login_Year = date('d-m-Y', $_SESSION['login_time']);
    echo "Bienvenue $Utilisateur !  Vous êtes connecté depuis $login_Year, il est $login_time <br>";

}
?>

<?php if (isset($error_message)): ?>
    <p style="color: red;"><?= $error_message ?></p>
<?php endif; ?>
<?php if (!isset($hideLogin)) { ?>
    <p>Pour plus de sécurité, voici les identifiants : user et password pour le mot de passe</p>
<form method="post">
    <label for="Utilisateur" class="username">Utilisateur</label>
    <input type="text" id="Utilisateur" name="Utilisateur" class="txtusername">
    <br>
    <label for="password" class="password">Mot de passe</label>
    <input type="password" id="password" name="password" class="txtpassword">
    <br>
    <input type="submit" value="Connexion" class="btnconnexion">
    <?php } ?>
</form>
<?php if (isset($hideLogin)) { ?>
    <form method="post">
        <input type="submit" name="dc" value="Deconnexion" class="btndeconnexion">
    </form>
<?php }
?>
</body>
</html>

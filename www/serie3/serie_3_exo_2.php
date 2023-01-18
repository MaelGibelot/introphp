<html>
<body>
<?php require_once '../navbar.php' ?>
<form method="post">
    <select name="url">
        <option value="http://www.Amazon.com/">Amazon.com</option>
        <option value="http://www.Amazon.fr/">Amazon.fr</option>
        <option value="http://www.Amazon.de/">Amazon.de</option>
        <option value="http://www.Amazon.uk/">Amazon.uk</option>
        <option value="http://www.Amazon.es/">Amazon.es</option>
    </select>
    <button type="submit">Visiter le magasin</button>
</form>
<?php if (isset($_POST['url'])) {
    $url = $_POST['url'];

    header("Location: " . $url);
    exit;
} ?>
</body>
</html>
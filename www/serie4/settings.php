<html>
<head>
    <link href="styleserie4.css" rel="stylesheet">
</head>
<?php
$settings = [
    'host' => 'localhost', //127.0.0.1
    //'port' => '', 3306
    'name' => 'serie4',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
];
try {
    $pdo = new PDO(
        sprintf(
            'mysql:host=%s;dbname=%s;charset=%s',
            $settings['host'],
            $settings['name'],
            $settings['charset']
        ),
        $settings['username'],
        $settings['password']
    );
} catch (PDOException $e) {
    echo "Échec de connexion.";
    exit;
}
?>
</html>

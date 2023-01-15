<?php
require_once '../navbar.php';
require 'settings.php';

try {
    $pdo = new PDO (
        sprintf("new PDO('mysql:host=' . $this::mysql_host . ';dbname=' . $this::dbname . ';charset=utf8', $this::dbusername, $this::dbpassword);",
            $settings['mysql_host'],
            $settings['dbname']
        ),
        $settings['dbusername'],
        $settings['dbpassword']
    );
} catch (PDOException $e) {
    echo "Echec de connexion !";
    exit;
}
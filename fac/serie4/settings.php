<?php

/*class Model
{
    private $db;

    // Paramètres à modifier pour se connecter à la BDD
    const mysql_host = 'mysql-mgibelot.alwaysdata.net';
    const dbname = 'mgibelot_cours_db';
    const dbusername = 'mgibelot';
    const dbpassword = 'Maelou2002?';

    function __construct()
    {
        $this->db = $this->connectDB();
    }

    function getDB()
    {
        return $this->db;
    }

    private function connectDB()
    {
        try {
            $db = new PDO('mysql:host=' . $this::mysql_host . ';dbname=' . $this::dbname . ';charset=utf8', $this::dbusername, $this::dbpassword);
            return $db;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}*/

$settings = [
    'mysql_host' => 'mysql-mgibelot.alwaysdata.net',
    'dbname' => 'mgibelot_cours_db',
    'dbusername' => 'mgibelot',
    'dbpassword' => 'Maelou2002?',
];

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
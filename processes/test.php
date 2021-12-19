<?php
$dsn = 'mysql:host=localhost;dbname=base_donnee';
$user = 'root';
$password = '';


try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>
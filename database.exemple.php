<?php
try {
    
    $host = 'localhost'; 
    $dbname = 'workshop_pdo'; 
    $user = 'workshop_user'; 
    $password = 'motdepasse';

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    // Activer les exceptions pour les erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion réussie !";

} catch (PDOException $e) {
    die("Échec de la connexion : " . $e->getMessage());
}
?>
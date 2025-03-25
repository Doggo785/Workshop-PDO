<?php
include 'database.php';
?>

<?php

echo nl2br("Recherche de Gandalf...\n");
$sql = "SELECT COUNT(*) FROM utilisateurs WHERE pseudo = 'Gandalf'";

try {
    $result = $pdo->query($sql);
    $count = $result->fetchColumn();
    
    if ($count > 0) {
        echo "Gandalf existe dans la base !";
    } else {
        echo "Gandalf n'existe pas.";
    }
} catch (PDOException $e) {
    die("Erreur requête : " . $e->getMessage());
}
?>
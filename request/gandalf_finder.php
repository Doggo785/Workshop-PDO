<?php
include '../config/database.php';
?>

<?php

echo nl2br("Recherche de Gandalf...\n");
$sql = "SELECT COUNT(*) FROM utilisateurs WHERE pseudo = 'Gandalf'";

try {
    $result = $pdo->query($sql);
    $count = $result->fetchColumn();
    
    if ($count > 0) {
        echo nl2br("Gandalf existe dans la base !\n\n");
    } else {
        echo "Gandalf n'existe pas.";
    }
} catch (PDOException $e) {
    die("Erreur requête : " . $e->getMessage());
}
$sql = "SELECT * FROM utilisateurs WHERE pseudo = 'Gandalf'";
$result = $pdo->query($sql);
$user = $result->fetch(PDO::FETCH_NUM);  // Tableau numérique
echo nl2br("Statut (index) : {$user[3]}\n"); 

$result = $pdo->query($sql); 
$user = $result->fetch(PDO::FETCH_ASSOC); // Tableau associatif
echo nl2br("Statut (assoc) : {$user['statutAdmin']}\n");

$result = $pdo->query($sql); 
$user = $result->fetch(PDO::FETCH_OBJ); // Objet anonyme
echo nl2br("Statut (objet) : {$user->statutAdmin}\n");

?>
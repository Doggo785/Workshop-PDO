<?php
include '../config/database.php';

$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];

try {
    // Requête SQL vulnérable à l'injection SQL
    $sql = "SELECT * FROM utilisateurs WHERE pseudo = '$pseudo' AND motDePasse = '$mdp'";
    $stmt = $pdo->query($sql);

    // Récupération de l'utilisateur
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo "Connexion réussie ! Bienvenue, " . htmlspecialchars($user['pseudo']) . ".";
    } else {
        echo "Pseudo ou mot de passe incorrect.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
<?php
include '../config/database.php';

$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];

try {
    // Préparation de la requête SQL pour vérifier le pseudo et le mot de passe
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE pseudo = :pseudo AND motDePasse = :mdp");
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':mdp', $mdp);
    $stmt->execute();

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
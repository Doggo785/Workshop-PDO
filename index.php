<?php
include 'database.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Workshop PDO</title>
</head>
<body>

    <?php
    try {
        $stmt = $pdo->query("SELECT pseudo FROM utilisateurs");
        $users = $stmt->fetchAll(PDO::FETCH_COLUMN);
        foreach ($users as $user) {
            echo "<p>$user</p>";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    ?>
</body>
</html>
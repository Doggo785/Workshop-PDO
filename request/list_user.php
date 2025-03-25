<?php
include '../config/database.php';
?>

<?php
$sql = "SELECT pseudo FROM utilisateurs";
$result = $pdo->query($sql);
$pseudos = $result->fetchAll(PDO::FETCH_COLUMN);

foreach ($pseudos as $pseudo) {
    echo $pseudo . "<br>";
}
?>
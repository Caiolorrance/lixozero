<?php
require_once "connect.php";

try {
    
    $sql = "SELECT * FROM utilizador";
    $stmt = $pdo->prepare($sql);

   
    $stmt->execute();


    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

   
    foreach ($result as $row) {
        echo "Nome: " . htmlspecialchars($row['nome_utilizador']) . "<br>";
        echo "Email: " . htmlspecialchars($row['email_utilizador']) . "<br>";
        echo "Tipo: " . htmlspecialchars($row['tipo_utilizador']) . "<br>";
        echo "<hr>";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}


$pdo = null;
?>
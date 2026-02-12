<?php
 require_once "connect.php";
    try {
        
    $nome = $_POST['nome_utilizador']; 
    $email = $_POST['email_utilizador'];
    $senha = $_POST['senha'];
    

    
    $sql = "INSERT INTO utilizador (nome_utilizador, email_utilizador, senha_utilizador) VALUES (:nome, :email, :senha)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([':nome' => $nome, ':email' => $email, ':senha' => $senha]);

    echo "Dados inseridos com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}


$pdo = null;
?>
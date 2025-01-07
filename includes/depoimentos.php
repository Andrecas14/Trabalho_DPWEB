<?php
    $user = 'web';
    $pass = 'web';
    $database = 'grupo209';
    
    $conn = new mysqli('localhost', 'web', 'web', 'grupo209'); 

    if ($conn->connect_error) {
        die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $conn->real_escape_string($_POST['name']);
        $depoimento = $conn->real_escape_string($_POST['message']);
        $sql = "INSERT INTO depoimentos (nome, depoimento) VALUES ('$nome', '$depoimento')";
        $conn->query($sql);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    $result = $conn->query("SELECT * FROM depoimentos ORDER BY data DESC");
?>
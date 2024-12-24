<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'projeto';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    if (empty($nome) || empty($email) || empty($telefone)) {
        die("Por favor, preencha todos os campos obrigatórios.");
    }

    $stmt = $conn->prepare("INSERT INTO contatos (nome, email, telefone, mensagem) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $email, $telefone, $mensagem);

    if ($stmt->execute()) {
        echo "Dados salvos na base de dados com sucesso.<br>";
    } else {
        die("Erro ao salvar no banco de dados: " . $conn->error);
    }

    $stmt->close();

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP(); 
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true; 
        $mail->Username = 'ggabriel696969@gmail.com'; 
        $mail->Password = 'rfle cjtv zwue roaj'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port = 587; 

        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ],
        ];

        $mail->setFrom('ggabriel696969@gmail.com', 'Nome do Remetente'); 
        $mail->addAddress('ggabriel696969@gmail.com'); 
        $mail->addReplyTo($email, $nome); 

        $mail->isHTML(true); 
        $mail->Subject = 'Novo contato do formulário'; 
        $mail->Body = "
            <h1>Nova mensagem de contato</h1>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Telefone:</strong> $telefone</p>
            <p><strong>Mensagem:</strong><br>$mensagem</p>
        "; 
        $mail->AltBody = "Nome: $nome\nEmail: $email\nTelefone: $telefone\n\nMensagem:\n$mensagem"; 

        $mail->send();
        echo "Mensagem enviada com sucesso!<br><a href='index2.php'>Voltar</a>";
    } catch (Exception $e) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}<br><a href='index2.php'>Voltar</a>";
    }
} else {
    die("Método inválido. Por favor, envie o formulário novamente.");
}

$conn->close();
?>

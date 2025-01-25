<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

require('includes/connection.php');

$conn = new mysqli('localhost', $user, $pass, $database);

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

    // Salvar no banco de dados
    $stmt = $conn->prepare("INSERT INTO contatos (nome, email, telefone, mensagem) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $email, $telefone, $mensagem);

    if ($stmt->execute()) {
        $mensagemSalva = true;
    } else {
        die("Erro ao salvar no banco de dados: " . $conn->error);
    }

    $stmt->close();

    // Enviar email
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
        $emailEnviado = true;
    } catch (Exception $e) {
        $emailEnviado = false;
        $erroEmail = $mail->ErrorInfo;
    }
} else {
    die("Método inválido. Por favor, envie o formulário novamente.");
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
    <?php include('includes/linkscss.php')?>

</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header bg-primary text-white">
                <h4 class="text-center mb-0">Mensagem Enviada</h4>
            </div>
            <div class="card-body">
                <?php if (!empty($mensagemSalva) && !empty($emailEnviado)): ?>
                    <p class="text-center"><strong>Obrigado, <?= htmlspecialchars($nome); ?>!</strong></p>
                    <p>Os seus dados foram salvos com sucesso na base de dados, e o email foi enviado.</p>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nome:</strong> <?= htmlspecialchars($nome); ?></li>
                        <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($email); ?></li>
                        <li class="list-group-item"><strong>Telefone:</strong> <?= htmlspecialchars($telefone); ?></li>
                        <li class="list-group-item"><strong>Mensagem:</strong> <?= htmlspecialchars($mensagem); ?></li>
                    </ul>
                <?php elseif (!empty($mensagemSalva)): ?>
                    <p class="text-center text-danger"><strong>Obrigado, <?= htmlspecialchars($nome); ?>!</strong></p>
                    <p>Os seus dados foram salvos com sucesso na base de dados, mas houve um erro ao enviar o email.</p>
                    <p><strong>Erro:</strong> <?= htmlspecialchars($erroEmail); ?></p>
                <?php else: ?>
                    <p class="text-center text-danger"><strong>Desculpe, <?= htmlspecialchars($nome); ?>.</strong></p>
                    <p>Houve um problema ao salvar os seus dados ou enviar o email. Por favor, tente novamente.</p>
                <?php endif; ?>
                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

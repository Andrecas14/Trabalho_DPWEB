<?php
require('includes/connection.php');
$conn = new mysqli('localhost', $user, $pass, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    $dataCheckinFormatada = date("d/m/Y", strtotime($checkin));
    $dataCheckoutFormatada = date("d/m/Y", strtotime($checkout));

    $query = "INSERT INTO reservas (nome_cliente, email_cliente, telefone_cliente, data_checkin, data_checkout)
              VALUES ('$nome', '$email', '$telefone', '$checkin', '$checkout')";

    if (mysqli_query($conn, $query)) {
        $mensagemSalva = true; 
    } else {
        $mensagemSalva = false; 
    }
} else {
    echo "Método inválido.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Confirmada</title>
    <?php include('includes/linkscss.php')?>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header bg-primary text-white">
                <h4 class="text-center mb-0">Reserva Confirmada</h4>
            </div>
            <div class="card-body text-center">
                <?php if (!empty($mensagemSalva)): ?>
                    <p><strong>Obrigado, <?= htmlspecialchars($nome); ?>!</strong></p>
                    <p>A sua reserva foi confirmada com os seguintes detalhes:</p>
                    <ul class="list-unstyled">
                        <li><strong>Check-in:</strong> <?= htmlspecialchars($dataCheckinFormatada); ?></li>
                        <li><strong>Check-out:</strong> <?= htmlspecialchars($dataCheckoutFormatada); ?></li>
                    </ul>
                <?php else: ?>
                    <p class="text-danger">Houve um erro ao confirmar sua reserva. Por favor, tente novamente.</p>
                <?php endif; ?>
                <div class="mt-4">
                    <a href="index.php" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
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
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUa0A6Y5QO2Xb6z0vK0lW5W8b6xZ9+8lqC5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5">
            <title>Confirmação de Reserva</title>
        </head>
        <body class="bg-light">
            <div class="container mt-5">
                <div class="card mx-auto" style="max-width: 600px;">
                    <div class="card-header bg-primary text-white">
                        <h4 class="text-center mb-0">Reserva Confirmada</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-center"><strong>Obrigado, ' . htmlspecialchars($nome) . '!</strong></p>
                        <p>A sua reserva foi confirmada com os seguintes detalhes:</p>
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Check-in:</strong> ' . htmlspecialchars($dataCheckinFormatada) . '</li>
                            <li class="list-group-item"><strong>Check-out:</strong> ' . htmlspecialchars($dataCheckoutFormatada) . '</li>
                           
                        </ul>
                        <div class="text-center mt-4">
                            <a href="mobile.php" class="btn btn-primary">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>';
    } else {
        echo "Erro ao registrar reserva: " . mysqli_error($conn);
    }
} else {
    echo "Método inválido.";
}
?>
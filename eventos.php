<?php
require('includes/connection.php');

$conn = new mysqli('localhost', 'web', 'web', 'grupo209');
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

function obterEventos($conn, $mes, $ano) {
    $stmt = $conn->prepare("SELECT titulo, data_evento, descricao FROM eventos WHERE MONTH(data_evento) = ? AND YEAR(data_evento) = ?");
    $stmt->bind_param("ii", $mes, $ano);
    $stmt->execute();
    $result = $stmt->get_result();
    $eventos = [];
    while ($row = $result->fetch_assoc()) {
        $eventos[$row['data_evento']][] = [
            'titulo' => htmlspecialchars($row['titulo']),
            'descricao' => htmlspecialchars($row['descricao'])
        ];
    }
    return $eventos;
}

function gerarCalendario($mes, $ano, $eventos) {
    $diasSemana = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];
    $diasNoMes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);
    $primeiroDia = date('w', strtotime("$ano-$mes-01"));

    echo "<table class='table table-bordered'>";
    echo "<thead class='bg-primary text-white'>";
    echo "<tr><th colspan='7' class='text-center'>" . date('F Y', strtotime("$ano-$mes-01")) . "</th></tr>";
    echo "<tr>";
    foreach ($diasSemana as $dia) {
        echo "<th class='text-center'>$dia</th>";
    }
    echo "</tr>";
    echo "</thead><tbody><tr>";

    for ($i = 0; $i < $primeiroDia; $i++) {
        echo "<td></td>";
    }

    for ($dia = 1; $dia <= $diasNoMes; $dia++) {
        $data = sprintf('%04d-%02d-%02d', $ano, $mes, $dia); 
        echo "<td>";
        echo "<strong>$dia</strong>";

        if (isset($eventos[$data])) {
            foreach ($eventos[$data] as $evento) {
                echo "<div class='event badge bg-success text-white mt-1' data-bs-toggle='modal' data-bs-target='#eventModal' data-titulo='{$evento['titulo']}' data-descricao='{$evento['descricao']}'>{$evento['titulo']}</div>";
            }
        }

        echo "</td>";

        
        if (($primeiroDia + $dia) % 7 == 0) {
            echo "</tr><tr>";
        }
    }

    while (($primeiroDia + $diasNoMes) % 7 != 0) {
        echo "<td></td>";
        $diasNoMes++;
    }

    echo "</tr></tbody></table>";
}

$mes = isset($_GET['mes']) ? (int)$_GET['mes'] : date('m');
$ano = isset($_GET['ano']) ? (int)$_GET['ano'] : date('Y');

$eventos = obterEventos($conn, $mes, $ano);

$mesAnterior = $mes - 1;
$anoAnterior = $ano;
if ($mesAnterior < 1) {
    $mesAnterior = 12;
    $anoAnterior--;
}

$mesProximo = $mes + 1;
$anoProximo = $ano;
if ($mesProximo > 12) {
    $mesProximo = 1;
    $anoProximo++;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="icon" type="image" href="imagens/logo1.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parque de Campismo da Praia da Tocha</title>
    <?php include('includes/linkscss.php')?>
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUa0A6Y5QO2Xb6z0vK0lW5W8b6xZ9+8lqC5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5pVg5z5i5
::contentReference[oaicite:0]{index=0}">
</head>
<body>
    <?php require('includes/connection.php') ?>
    
    <div class="div-imagem" style="background-image:url('imagens/imagem6.jpg')";>
        <h1 class="logo" style="display: flex; justify-content: center; align-items: center; height: 35vh;">
            <a href="index.php">
                <img src="imagens/logo3.png" alt="Logotipo do Parque">
            </a>
        </h1>

        <?php require('includes/menu.php')?>
    </div>

    <div class="container mt-5 mb-5">
        <h1 class="text-center mb-4">Calendário de Eventos</h1>


        <div class="d-flex justify-content-between mb-3">
            <a href="?mes=<?php echo $mesAnterior; ?>&ano=<?php echo $anoAnterior; ?>" class="btn btn-primary">Mês Anterior</a>
            <a href="?mes=<?php echo $mesProximo; ?>&ano=<?php echo $anoProximo; ?>" class="btn btn-primary">Próximo Mês</a>
        </div>

        <?php gerarCalendario($mes, $ano, $eventos); ?>

    </div>

    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Detalhes do Evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="eventDescricao"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php require('includes/footer.php')?>
    </footer>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        const eventModal = document.getElementById('eventModal');
        eventModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const titulo = button.getAttribute('data-titulo');
            const descricao = button.getAttribute('data-descricao');

            const modalTitle = eventModal.querySelector('.modal-title');
            const modalBody = eventModal.querySelector('#eventDescricao');

            modalTitle.textContent = titulo;
            modalBody.textContent = descricao;
        });
    </script>
</body>
</html>
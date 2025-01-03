<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="icon" type="image" href="imagens/logo1.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parque de Campismo da Praia da Tocha</title>
    <?php include('includes/linkscss.php')?>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <?php require('includes/connection.php') ?>    
    
    <div class="div-imagem" style="background-image:url('imagens/imagem6.jpg')";>
        <h1 class="logo" style="display: flex; justify-content: center; align-items: center; height: 35vh;">
            <a href="index2.php">
                <img src="imagens/logo3.png" alt="Logotipo do Parque">
            </a>
        </h1>

        <nav class="navbar">
            <ul class="navbar-menu">
                <li><a href="index2.php" class="nav-link">Home</a></li>
                <li><a href="mobile.php" class="nav-link">Mobile Homes</a></li>
                <li><a href="galeria.php" class="nav-link">Galeria</a></li>
                <li><a href="preco.php" class="nav-link">Preçário</a></li>
                <li><a href="sobre.php" class="nav-link">Sobre Nós</a></li>
            </ul>
        </nav>
    </div>

    <div class="container my-5">
        <h1 class="text-center mb-4">Simulador de Preços</h1>
        <form action="" method="POST">
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Descrição</th>
                        <th>Alta</th>
                        <th>Baixa</th>
                        <th>Selecionar</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>

                <thead class="table-primary table-dark">
                    <tr>
                        <th colspan="5">Pessoas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $pessoas = [
                        ["Adulto", 6.50, 3.50],
                        ["Criança (5 a 12 anos)", 4.50, 1.50],
                        ["Visita", 4.00, 3.00],
                        ["Meia Visita", 2.50, 1.00]
                    ];
                    foreach ($pessoas as $index => $item) {
                        echo "<tr>
                            <td>{$item[0]}</td>
                            <td>{$item[1]}€</td>
                            <td>{$item[2]}€</td>
                            <td>
                                <input type='radio' name='epoca_{$index}' value='alta-{$item[1]}'> Alta
                                <input type='radio' name='epoca_{$index}' value='baixa-{$item[2]}'> Baixa
                            </td>
                            <td>
                                <input type='number' name='quantidade_{$index}' class='form-control w-50 mx-auto' min='0' placeholder='0'>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>

                <thead class="table-primary table-dark">
                    <tr>
                        <th colspan="5">Veículos/Tendas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $veiculos = [
                        ["Moto", 2.00, 1.00],
                        ["Carro", 6.50, 2.00],
                        ["Autocaravan < 6 metros", 7.00, 4.00],
                        ["Autocaravana > 6 metros", 8.00, 5.00],
                        ["Caravana < 6 metros", 7.00, 4.00],
                        ["Caravana > 6 metros", 8.00, 5.00],
                        ["Tenda < 6 metros", 7.00, 3.50],
                        ["Tenda > 6 metros quadrados", 8.00, 4.00],
                        ["Avançado/Toldo/Coreto", 3.00, 1.50]
                    ];
                    foreach ($veiculos as $index => $item) {
                        echo "<tr>
                            <td>{$item[0]}</td>
                            <td>{$item[1]}€</td>
                            <td>{$item[2]}€</td>
                            <td>
                                <input type='radio' name='epoca_v_{$index}' value='alta-{$item[1]}'> Alta
                                <input type='radio' name='epoca_v_{$index}' value='baixa-{$item[2]}'> Baixa
                            </td>
                            <td>
                                <input type='number' name='quantidade_v_{$index}' class='form-control w-50 mx-auto' min='0' placeholder='0'>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>

                <thead class="table-primary table-dark">
                    <tr>
                        <th colspan="5">Extras</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $extras = [
                        ["Máquina lavar roupa", 6.50],
                        ["Máquina secar roupa", 6.50]
                    ];
                    foreach ($extras as $index => $item) {
                        echo "<tr>
                            <td>{$item[0]}</td>
                            <td colspan='2'>{$item[1]}€</td>
                            <td>
                                <input type='checkbox' name='extra_{$index}' value='{$item[1]}'>
                            </td>
                            <td>
                                <input type='number' name='quantidade_extra_{$index}' class='form-control w-50 mx-auto' min='0' placeholder='0'>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Calcular Total</button>
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $total = 0;
            for ($i = 0; isset($_POST["epoca_{$i}"]); $i++) {
                $epoca = $_POST["epoca_{$i}"]; 
                $quantidade = intval($_POST["quantidade_{$i}"] ?? 0); 
                if ($quantidade > 0 && !empty($epoca)) {
                    $valor = floatval(explode('-', $epoca)[1]); 
                    $subtotal = $quantidade * $valor; 
                    $total += $subtotal; 
                }
            }

            for ($i = 0; isset($_POST["epoca_v_{$i}"]) || isset($_POST["quantidade_v_{$i}"]); $i++) {
                $epoca = $_POST["epoca_v_{$i}"] ?? ''; 
                $quantidade = intval($_POST["quantidade_v_{$i}"] ?? 0); 
                if ($quantidade > 0 && !empty($epoca)) {
                    $valor = floatval(explode('-', $epoca)[1]); 
                    $subtotal = $quantidade * $valor; 
                    $total += $subtotal; 
                }
            }

            for ($i = 0; isset($_POST["extra_{$i}"]) || isset($_POST["quantidade_extra_{$i}"]); $i++) {
                if (isset($_POST["extra_{$i}"])) { 
                    $quantidade_extra = intval($_POST["quantidade_extra_{$i}"] ?? 0); 
                    if ($quantidade_extra > 0) {
                        $valor_extra = floatval($_POST["extra_{$i}"]); 
                        $subtotal = $quantidade_extra * $valor_extra; 
                        $total += $subtotal; 
                    }
                }
            }

            echo "<div class='alert alert-info mt-4 text-center'>O total é: " . number_format($total, 2, ',', '.') . "€</div>";
        }
        ?>
    </div>
    <footer>
        <div class="footer-container">
            <div class="col-md-6 text-justify text-center mb-4">
                <h3>Visite-nos</h3>
                <p>Rua dos Pescadores Nossa Senhora da Tocha<br>3060-691 Praia da Tocha – Cantanhede</p>
                <p><strong>Telefone:&nbsp;</strong>231 442 220<br></p>
                <p><strong>E-mail:&nbsp;</strong><a href="mailto:campingpraiadatocha@gmail.com">campingpraiadatocha@gmail.com</a></p>
                <p><a href="Regulamento.pdf" target="_blank">Regulamento</a></p>
            </div>
            <div class="col-md-6">
                <h3 class="text-center">Fale Connosco</h3>
                <form action="processa_formulario.php" method="POST" 
                      class="p-4 rounded mx-auto" 
                      style="max-width: 600px; background-color:#333">
                    <div class="mb-3">
                        <input type="text" name="nome" class="form-control" placeholder="Nome*" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email*" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="telefone" class="form-control" placeholder="Telefone*" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="mensagem" class="form-control" placeholder="Mensagem"></textarea>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" id="privacy-policy" class="form-check-input" required>
                        <label for="privacy-policy" class="form-check-label">
                            Concordo com a <a href="PoliticaPrivacidade.pdf" target="_blank">Política de Privacidade</a>
                        </label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('input[type="radio"]').forEach(radio => {
                radio.addEventListener('click', function () {
                    if (this.previousChecked) {
                        this.checked = false;
                        this.previousChecked = false;
                        toggleRadios(false);
                    } else {
                        this.previousChecked = true;
                        toggleRadios(this.value.includes('alta') ? 'alta' : 'baixa');
                    }
                });
            });

            function toggleRadios(epoca) {
                document.querySelectorAll('input[type="radio"]').forEach(radio => {
                    if (epoca === false) {
                        radio.disabled = false;
                    } else if (!radio.value.includes(epoca)) {
                        radio.disabled = true; 
                    }
                });
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="icon" type="image" href="imagens/logo1.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parque de Campismo da Praia da Tocha</title>
    <?php include('includes/linkscss.php')?>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
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
                <li><a href="galeria.php" class="nav-link active">Galeria</a></li>
                <li><a href="preco.php" class="nav-link">Preçário</a></li>
                <li><a href="sobre.php" class="nav-link">Sobre Nós</a></li>
            </ul>
        </nav>
    </div>

    <main>
      <section id="galeria" class="gallery-container">
        <?php
        $conn = new mysqli("localhost", "web1", "web", "projeto");

        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        $query = "SELECT id, nome, tipo, dados FROM imagens";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $imagemBase64 = "data:" . $row['tipo'] . ";base64," . base64_encode($row['dados']);
                echo '<div class="responsive imagem">
                        <div class="gallery">
                            <img src="' . $imagemBase64 . '" alt="' . htmlspecialchars($row['nome']) . '">
                            <div class="desc">' . htmlspecialchars($row['nome']) . '</div>
                        </div>
                    </div>';
            }
        } else {
            echo "Nenhuma imagem encontrada.";
        }

        $conn->close();
        ?>
      </section>
    </main>
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
    
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
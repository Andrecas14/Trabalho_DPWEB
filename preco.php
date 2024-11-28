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
    <!-- Seletor de Idioma -->
    <div class="top-bar">
        <div class="language-selector">
            <a href="?lang=pt" title="Português">
                <img src="https://flagcdn.com/w40/pt.png" alt="Português">
            </a>
            <a href="?lang=en" title="Inglês">
                <img src="https://flagcdn.com/w40/gb.png" alt="Inglês">
            </a>
            <a href="?lang=fr" title="Francês">
                <img src="https://flagcdn.com/w40/fr.png" alt="Francês">
            </a>
        </div>
    </div>
    
    <div class="div-imagem" style="background-image:url('imagens/imagem6.jpg');">
    <a href="index2.php"><h1 class="logo" style=" display: flex; justify-content: center; align-items: center; height: 35vh;"> <img src="imagens/logo3.png"></h1></a>
    <header>
        <nav class="navbar">
            <ul class="navbar-menu">
                <li><a href="index2.php" class="nav-link">Home</a></li>
                <li><a href="preco.php" class="nav-link active">Preçário</a></li>
                <li><a href="sobre.php" class="nav-link">Sobre Nós</a></li>
                <li><a href="mobile.php" class="nav-link">Mobile Homes</a></li>
                <li><a href="tendas.php" class="nav-link">Tendas/Caravanas</a></li>
                <li><a href="galeria.php" class="nav-link">Galeria</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="precos" class="content">
            <h2>Preçário</h2>
            <table class="table-preco">
                <thead>
                    <tr>
                        <th>Época</th>
                        <th>Alta</th>
                        <th>Baixa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Adulto</td>
                        <td>6.50€</td>
                        <td>3.50€</td>
                    </tr>
                    <tr>
                        <td>Criança (5 a 12 anos)</td>
                        <td>4.50€</td>
                        <td>1.50€</td>
                    </tr>
                    <tr>
                        <td>Visita</td>
                        <td>4.00€</td>
                        <td>3.00€</td>
                    </tr>
                    <tr>
                        <td>Meia Visita</td>
                        <td>2.50€</td>
                        <td>1.00€</td>
                    </tr>
                    <tr>
                        <td>Moto</td>
                        <td>2.00€</td>
                        <td>1.00€</td>
                    </tr>
                    <tr>
                        <td>Carro</td>
                        <td>6.50€</td>
                        <td>2.00€</td>
                    </tr>
                    <tr>
                        <td>Eletricidade</td>
                        <td>4.00€</td>
                        <td>4.00€</td>
                    </tr>
                    <tr>
                        <td>Autocaravan < 6 metros</td>
                        <td>7.00€</td>
                        <td>4.00€</td>
                    </tr>
                    <tr>
                        <td>Autocaravana > 6 metros</td>
                        <td>8.00€</td>
                        <td>5.00€</td>
                    </tr>
                    <tr>
                        <td>Caravana < 6 metros</td>
                        <td>7.00€</td>
                        <td>4.00€</td>
                    </tr>
                    <tr>
                        <td>Caravana > 6 metros</td>
                        <td>8.00€</td>
                        <td>5.00€</td>
                    </tr>
                    <tr>
                        <td>Tenda < 6 metros</td>
                        <td>7.00€</td>
                        <td>3.50€</td>
                    </tr>
                    <tr>
                        <td>Tenda > 6 metros quadrados</td>
                        <td>8.00€</td>
                        <td>4.00€</td>
                    </tr>
                    <tr>
                        <td>Avançado/Toldo/Coreto</td>
                        <td>3.00€</td>
                        <td>1.50€</td>
                    </tr>
                    <tr>
                        <td>Animal</td>
                        <td>3.50€</td>
                        <td>1.50€</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th colspan="3">Alojamento</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mobile Home - 4 pessoas</td>
                        <td>70.00€</td>
                        <td>50.00€</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th colspan="3">Extras</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Máquina lavar roupa</td>
                        <td colspan="3">6.50€</td>
                    </tr>
                    <tr>
                        <td>Máquina secar roupa</td>
                        <td colspan="3">6.50€</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="inf-precos" class="content">
            <p>Época Alta:  15 de Junho a 15 de Setembro; 29 de Dezembro a 02 Janeiro.</p>
            <p>Época Baixa:  03 de Janeiro a 14 de Junho; 16 de Setembro a 28 de Dezembro.</p>
        </section>
    </main>
    
    <footer>
        <div class="footer-container">
            <div class="contact-info">
                <h3>Visite-nos</h3>
                <p>Rua dos Pescadores Nossa Senhora da Tocha<br>3060-691 Praia da Tocha – Cantanhede</p>
                <p><strong>Telefone:</strong><br>231 442 220<br></p>
                <p><strong>E-mail:</strong><br><a href="mailto:campingpraiadatocha@gmail.com">campingpraiadatocha@gmail.com</a></p>
            </div>
            <div class="contact-form form">
                <h3>Fale Connosco</h3>
                <form action="#">
                    <input type="text" name="nome" placeholder="Nome*" required>
                    <input type="email" name="email" placeholder="Email*" required>
                    <input type="tel" name="telefone" placeholder="Telefone*" required>
                    <textarea name="mensagem" placeholder="Mensagem"></textarea>
                    <div class="privacy">
                        <input type="checkbox" id="privacy-policy" required>
                        <label for="privacy-policy">Concordo com a <a href="#">Política de Privacidade</a></label>
                    </div>
                    <button type="submit">ENVIAR</button>
                </form>
            </div>
        </div>
    </footer>
    
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
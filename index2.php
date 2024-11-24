<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="icon" type="image" href="imagens/logo1.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parque de Campismo da Praia da Tocha</title>
    <?php include('includes/linkscss.php')?>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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
    <a href="index2.php">
    <h1 class="logo" style="display: flex; justify-content: center; align-items: center; height: 35vh;">
        <img src="imagens/logo3.png" alt="Logotipo do Parque">
    </h1>
</a>


    <header>
        <nav class="navbar">
            <ul class="navbar-menu">
                <li><a href="index2.php" class="nav-link active">Home</a></li>
                <li><a href="preco.php" class="nav-link">Preçário</a></li>
                <li><a href="sobre.php" class="nav-link">Sobre Nós</a></li>
                <li><a href="mobile.php" class="nav-link">Mobile Homes</a></li>
                <li><a href="tendas.php" class="nav-link">Tendas/Caravanas</a></li>
                <li><a href="galeria.php" class="nav-link">Galeria</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="hero">
            <h2>Bem-vindo ao Paraíso do Campismo</h2>
            <p>Uma experiência inesquecível junto à praia e à natureza.</p>
            <a href="sobre.php" class="btn">Saiba Mais</a>
        </section>
        </div>
        <section id="sobrenos"class="content">
            <div class="row" flex>
                <div class="col-md-6">
                <div><img src="imagens/icons.png" alt="Icons" class="responsive-img"></div>

                </div>
                <div class="col excerto">
                Localizado a 50Km de coimbra, encontra um refúgio encantador para os amantes da natureza e do mar, localizado a poucos passos da famosa Praia da Tocha, na costa central de Portugal.
                Este parque combina a tranquilidade de uma área arborizada com a proximidade de uma das praias mais icônicas da região, conhecida por suas dunas preservadas, areais dourados e ambiente relaxante.
                </div>
            </div>
        </section>
        
        <section id="instalacoes" class="content">
            <h2>Horário de Funcionamento da Receção</h2>
            <p>09:00h às 23:00h</p>
            <p>Épocas em vigor em 2025</p>
            <strong><b>Época Alta:</b></strong><p> 15 de Junho a 15 de Setembro; 29 de Dezembro a 02 Janeiro de 2025.</p>
            
            <strong><b>Época Baixa:</b></strong><p> 03 de Janeiro a 14 de Junho; 16 de Setembro a 28 de Dezembro</p>
        </section>
        
        <section id="galeria" class="content">
    <h4>GALERIA</h4>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="imagens/uau.png" alt="Imagem 1" class="galeria-img"></div>
            <div class="swiper-slide"><img src="imagens/b.jpg" alt="Imagem 2" class="galeria-img"></div>
            <div class="swiper-slide"><img src="imagens/imagem.jpg" alt="Imagem 3" class="galeria-img"></div>
            <div class="swiper-slide"><img src="imagens/imagem1.jpg" alt="Imagem 4" class="galeria-img"></div>
            <div class="swiper-slide"><img src="imagens/imagem5.jpg" alt="Imagem 5" class="galeria-img"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>


        <section class="content">
            <h2>Redes Sociais</h2>
            <div class="container">  
                <div class="grid">
                    <div class="card">
                        <h3>Facebook</h3>
                        <a href="https://www.facebook.com/CampingPraiadaTocha/" target="_blank" class="btn-face">Aceder ao Facebook</a>
                    </div>
                    <div class="card">
                        <h3>Instagram</h3>
                        <a href="https://www.instagram.com/campingpraiadatocha/" target="_blank" class="btn-insta">Aceder ao Instagram</a>
                    </div>
                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="icon" type="image" href="imagens/logo1.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parque de Campismo da Praia da Tocha</title>
    <?php include('includes/linkscss.php')?>
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-p6hfzPZT0ZKFC+Pup+ds15upv2mCpOaBhEj/5ll5cRaxEt7H4g4+kAXL1xjEBCmH" crossorigin="anonymous"></script>

</head>
<body>
    <?php require('includes/depoimentos.php')?>
    
    <div class="div-imagem" style="background-image:url('imagens/imagem6.jpg')";>
        <h1 class="logo" style="display: flex; justify-content: center; align-items: center; height: 35vh;">
            <a href="index.php">
                <img src="imagens/logo3.png" alt="Logotipo do Parque">
            </a>
        </h1>

        <?php require('includes/menu.php')?>
        
        <section id="hero">
            <h2>Bem-vindo ao Paraíso do Campismo</h2>
            <p>Uma experiência inesquecível junto à praia e à natureza</p>
            <a href="sobre.php" class="btn">Saiba Mais</a>
        </section>
    </div>

    <main>
        
        <section id="sobrenos" class="content py-5">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div>
                        <img src="imagens/icons.png" alt="Icons" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-7">
                    <div style="max-width: 90%; margin-left: -20px; text-align: justify;">
                        Situado a apenas 50 km de Coimbra, o Parque de Campismo da Praia da Tocha oferece um refúgio perfeito para quem busca a harmonia entre natureza e mar. 
                        Localizado a poucos metros da icónica Praia da Tocha, na deslumbrante costa central de Portugal, este parque é um convite à tranquilidade e ao descanso. 
                        Envolto por uma paisagem arborizada e próximo às dunas preservadas e areais dourados da região, é o destino ideal para desfrutar de um ambiente sereno e momentos únicos em contato com a natureza.
                    </div>
                </div>
            </div>
        </section>
        
        <section class="horario-mapa py-5 bg-light">
            <div class="horario">
                <h2>Horário de Funcionamento da Receção</h2>
                <p><br><br>09:00h às 23:00h</p>
                <p>Épocas em vigor em 2025</p>
                <strong><b><br><br>Época Alta:</b></strong><p> 15 de Junho a 15 de Setembro; 29 de Dezembro a 02 Janeiro de 2025</p>
                <strong><b>Época Baixa:</b></strong><p> 03 de Janeiro a 14 de Junho; 16 de Setembro a 28 de Dezembro</p>
            </div>
            <div class="mapa">
                <h2>Mapa do Parque</h2>
                <img src="imagens/mapa.png" alt="Mapa do Parque">
            </div>
            
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
                    <a href="https://www.facebook.com/CampingPraiadaTocha/" target="_blank" class="card facebook">
                        <h3>Facebook</h3>
                    </a>
                    <a href="https://www.instagram.com/campingpraiadatocha/" target="_blank" class="card instagram">
                        <h3>Instagram</h3>
                    </a>
                </div>
            </div>
        </section>

        <section class="testemunhos py-5 bg-light text-center">
            <div class="container">
                <h2 class="mb-4">O que os nossos clientes dizem:</h2>
                <div class="row" id="testemunhos-list">
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-dark">
                                        <h5 class="card-title fs-4"><?= htmlspecialchars($row['nome']) ?></h5>
                                        <p class="card-text fs-9"><?= htmlspecialchars($row['depoimento']) ?></p>
                                        <p class="text-muted small"><?= date('d/m/Y H:i', strtotime($row['data'])) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p class="text-center">Ainda não há depoimentos.</p>
                    <?php endif; ?>
                </div>

                <div class="mt-5">
                    <h4>Adicione seu depoimento</h4>
                    <form id="testemunho-form" method="POST" action="">
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" name="name" id="name" placeholder="Seu nome" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control mb-3" name="message" id="message" rows="3" placeholder="Seu depoimento" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <?php require('includes/footer.php')?>
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
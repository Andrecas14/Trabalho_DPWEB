<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="icon" type="image" href="imagens/logo1.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parque de Campismo da Praia da Tocha</title>
    <?php include('includes/linkscss.php')?>
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-qQ6fwZAt8+u+cE6l2t4UsLfLrGp5fhu6iQz+O7uKsRxY6OkKoGc8bA3fuG44rDkD" crossorigin="anonymous">

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
    
    <main>
        <section class="container py-5 text-justify">
            <h2 class="text-center">Campismo com Conforto e Qualidade à Sua Medida</h2>
            <p class="text-center">
                Localizado a 50Km de coimbra, encontra um refúgio encantador para os amantes da natureza e do mar, localizado a poucos passos da famosa Praia da Tocha, na costa central de Portugal.
                Este parque combina a tranquilidade de uma área arborizada com a proximidade de uma das praias mais icônicas da região, conhecida por suas dunas preservadas, areais dourados e ambiente relaxante.
            </p>
            <strong><p class="text-center">Conforto e Funcionalidades</p></strong>
            <p>
                O parque dispõe de instalações modernas e bem equipadas para garantir o seu conforto. Contamos com casas de banho com duches, fraldário para os mais pequenos, zonas para lavar loiça e roupa, e saneamento básico cuidadosamente mantido. Além disso, distribuímos vários pontos de água ao longo do parque e disponibilizamos grelhadores para que possa preparar deliciosas refeições ao ar livre e partilhar momentos únicos com família e amigos.
                Os campistas que chegam em autocaravanas têm à disposição uma área de serviço equipada para limpeza e abastecimento, garantindo uma estadia tranquila e sem preocupações.
            </p>
            <h2 class="text-center">Lazer e Recreação para Todas as Idades</h2>
            <p>
                Para que a sua estadia seja ainda mais especial, oferecemos uma variedade de opções de lazer:
            </p>
            <ul class="list-unstyled">
                <li><strong>Piscinas:</strong> Uma piscina para adultos e outra para crianças, perfeitas para momentos de descontração e diversão em família.</li>
                <li><strong>Parque Infantil:</strong> Localizado junto às piscinas, é o espaço ideal para os mais pequenos se divertirem em segurança.</li>
                <li><strong>Atividades ao ar livre:</strong> O Parque está próximo de um circuito de manutenção e uma ciclovia que percorrem a Praia da Tocha, ideais para caminhadas, corridas ou passeios de bicicleta.</li>
            </ul>
        </section>

        <section class="content">
            <h4>Mas também existem outras atividades durante todo o ano, veja aqui no calendário.</h4>
            <a href="eventos.php" class="btn btn-primary mt-3">Calendário</a>
        </section>

        <section id="galeria" class="content">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="imagens/piscina/piscina1.jpg" alt="Piscina 1" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/piscina/piscina2.jpg" alt="Piscina 2" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/piscina/piscina3.jpg" alt="Piscina 3" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/piscina/parque1.jpg" alt="Parque 5" class="galeria-img"></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <section id="sobrenos"class="bar">
            <div class="row flex">
                <div class="col-md-6">
                    <img src="imagens/cafelogo.png" alt="Logo" class="responsive-img">
                </div>
                <div class="col-md-6">
                    <h2>Bar, Restaurante e Animação</h2>
                </div>   
                <p>
                    Inserido no Parque de Campismo, o Tertúlia Caffé é um dos espaços de lazer de referência na Praia da Tocha.<br>
                    Com serviço de bar, restaurante, sala de jogos e espaços para atividades, também conta com animação musical
                    todos os sábados durante o ano e nas épocas balneares.
                <p>
            </div>
        </section>
        <section id="galeria" class="content">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="imagens/cafe1.jpg" alt="Cafe 1" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/cafe2.jpg" alt="Cafe 2" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/cafe3.jpg" alt="Cade 3" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/cafe4.jpg" alt="Cafe 4" class="galeria-img"></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <section class="map-section">
            <h2>Localização do Parque</h2>
            <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.015865392184!2d-8.843011523601206!3d40.32760716105819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd23ca9cda2c43c3%3A0xc1880f2f0f37a2fd!2sParque%20de%20Campismo%20da%20Praia%20da%20Tocha!5e1!3m2!1spt-PT!2spt!4v1733771610052!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        
    </main>

    <footer>
        <?php require('includes/footer.php')?>
    </footer>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-N9/aFS1XqLXkHpBf0nKEmG+KtXHINlhgVuVGeYJ2lLkPNUFPsZPcd8Wb+od+O9rQ" crossorigin="anonymous"></script>
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
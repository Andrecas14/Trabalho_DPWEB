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
                <li><a href="mobile.php" class="nav-link active">Mobile Homes</a></li>
                <li><a href="galeria.php" class="nav-link">Galeria</a></li>
                <li><a href="preco.php" class="nav-link">Preçário</a></li>
                <li><a href="sobre.php" class="nav-link">Sobre Nós</a></li>
            </ul>
        </nav>
    </div>

    <main>
        <section class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="imagens/mobile/mobile4.jpg" alt="Mobile Home" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <h5 class="text-muted"><strong>Mobile Homes</strong></h5>
                    <h2 class="text-justify"><strong>Uma experiência no nosso parque que dispensa a sua tenda de campismo</strong></h2>
                    <p >As nossas Mobile Homes permitem uma experiência de campismo com a garantia de todo o conforto que necessita durante a sua estadia.</p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <h5><strong>Equipadas com:</strong></h5>
                            <ul>
                                <li>Quarto com beliche triplo</li>
                                <li>Sala de estar com sofá cama</li>
                                <li>Casa de banho com duche</li>
                                <li>Kitchenette equipada</li>
                                <li>Ar condicionado / aquecimento</li>
                                <li>Televisão</li>
                                <li>Wi-Fi</li>
                                <li>Mesas / cadeiras</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5><strong>Inclui:</strong></h5>
                            <ul>
                                <li>Estadia para 4 pessoas</li>
                                <li>Estacionamento para 1 viatura</li>
                                <li>Acesso livre às piscinas</li>
                                <li>Roupa de cama</li>
                                <li>Roupa de banho</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pricing-section mt-4 bg-primary text-white">
            <div class="row text-center align-items-center">
                <div class="col-md-6 pricing-box d-flex justify-content-center align-items-center flex-column py-3">
                    <span class="fw-bold">Época baixa</span>
                    <p class="fs-5">50€ por noite</p>
                </div>
                <div class="col-md-6 pricing-box d-flex justify-content-center align-items-center flex-column py-3">
                    <span class="fw-bold">Época alta</span>
                    <p class="fs-5">70€ por noite</p>
                </div>
            </div>
        </section>

        <section id="galeria" class="content">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="imagens/mobile/mobile1.jpg" alt="Mobile 1" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/mobile/mobile2.jpg" alt="Mobile 2" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/mobile/mobile3.jpg" alt="Mobile 3" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/mobile/mobile4.jpg" alt="Mobile 4" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/mobile/mobile5.jpg" alt="Mobile 5" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/mobile/mobile6.jpg" alt="Mobile 6" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/mobile/mobile7.jpg" alt="Mobile 7" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/mobile/mobile8.jpg" alt="Mobile 8" class="galeria-img"></div>
                    <div class="swiper-slide"><img src="imagens/mobile/mobile9.jpg" alt="Mobile 9" class="galeria-img"></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <section class="container-fluid bg-primary py-4 mt-5">
            <div class="row text-center">
                <div class="col-md-2">
                    <i class="bi bi-house-door text-light" style="font-size: 2rem;"></i>
                    <p class="text-light">Quarto</p>
                </div>
                <div class="col-md-2">
                    <i class="bi bi-cup-straw text-light" style="font-size: 2rem;"></i>
                    <p class="text-light">Cozinha</p>
                </div>
                <div class="col-md-2">
                    <i class="bi bi-badge-wc text-light" style="font-size: 2rem;"></i>
                    <p class="text-light">WC</p>
                </div>
                <div class="col-md-2">
                    <i class="bi bi-tv text-light" style="font-size: 2rem;"></i>
                    <p class="text-light">TV</p>
                </div>
                <div class="col-md-2">
                    <i class="bi bi-wifi text-light" style="font-size: 2rem;"></i>
                    <p class="text-light">Wi-Fi</p>
                </div>
                <div class="col-md-2">
                    <i class="bi bi-thermometer-sun text-light" style="font-size: 2rem;"></i>
                    <p class="text-light">Ar Condicionado</p>
                </div>
            </div>
        </section>

        <div class="container my-5">
            <h1 class="text-center mb-4">Simulador de Reserva de Mobile Homes</h1>
            <form id="reservationForm" class="needs-validation" novalidate>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <label for="numNights" class="form-label">Número de noites:</label>
                        <input type="number" id="numNights" name="numNights" class="form-control" placeholder="Exemplo: 3" min="1" required>
                        <div class="invalid-feedback">
                            Por favor, insira o número de noites.
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <label for="season" class="form-label">Época:</label>
                        <select id="season" name="season" class="form-select" required>
                            <option value="" selected disabled>Escolha a época</option>
                            <option value="alta">Alta</option>
                            <option value="baixa">Baixa</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, selecione uma época.
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <label for="pricePerNight" class="form-label">Preço por noite:</label>
                        <input type="text" id="pricePerNight" class="form-control" value="Alta: 70€ / Baixa: 50€" disabled>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <button type="button" class="btn btn-primary" onclick="calculateTotal()">Calcular Total</button>
                        <a href="reserva.php" class="btn btn-primary">Reserve Já</a>
                    </div>
                </div>
            </form>
            <div id="totalPrice" class="alert alert-info mt-4 text-center" style="display: none;"></div>
        </div>

        <script>
            function calculateTotal() {
                const numNights = parseInt(document.getElementById('numNights').value);
                const season = document.getElementById('season').value;

                if (!numNights || !season) {
                    alert('Por favor, preencha todos os campos antes de calcular o total.');
                    return;
                }

                const pricePerNight = season === 'alta' ? 70 : 50;
                const total = numNights * pricePerNight;

                const totalPriceElement = document.getElementById('totalPrice');
                totalPriceElement.style.display = 'block';
                totalPriceElement.textContent = `O preço total para ${numNights} noite(s) na época ${season} é: ${total}€`;
            }

            (() => {
                'use strict';

                const forms = document.querySelectorAll('.needs-validation');

                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add('was-validated');
                    }, false);
                });
            })();
        </script>
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
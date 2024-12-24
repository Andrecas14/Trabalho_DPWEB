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
                <li><a href="preco.php" class="nav-link active">Preçário</a></li>
                <li><a href="sobre.php" class="nav-link">Sobre Nós</a></li>
            </ul>
        </nav>
    </div>

    <main>
        <div class="content">                                                                                                                                                                                           
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="table-dark"></th>
                                <th class="table-dark" colspan="3" >Época</th></tr>
                            <tr>
                                <th class="table-dark"></th>
                                <th class="table-dark">Alta</th>
                                <th class="table-dark">Baixa</th>
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
                                <td>Animal</td>
                                <td>3.50€</td>
                                <td>1.50€</td>
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
                            
                        </tbody>
                        <thead>
                            <tr>
                                <th class="table-dark" colspan="3">Alojamento</th>
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
                                <th class="table-dark" colspan="3">Extras</th>
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
            </div>
        </div>

        <section id="inf-precos" class="content">
            <p>Época Alta:  15 de Junho a 15 de Setembro; 29 de Dezembro a 02 Janeiro.</p>
            <p>Época Baixa:  03 de Janeiro a 14 de Junho; 16 de Setembro a 28 de Dezembro.</p>
            <strong><p><br><br>Descontos em estadias prolongadas</p></strong>
            <p>
                Estadias de 15 dias - 10% de desconto para pessoas e equipamentos (electricidade não incluída)<br>
                Estadias de 1 mês - 15% de desconto para pessoas e equipamentos (electricidade não incluída)<br>
                Estadias de + de 45 dias - 25% de desconto para pessoas e equipamentos (electricidade não incluída)
            </p>
        </section>

        <section class="content">
            <h4>Gostaria de simular o preço total da sua estadia?</h4>
            <a href="simulador.php" class="btn btn-primary mt-3">Clique Aqui!!!</a>
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
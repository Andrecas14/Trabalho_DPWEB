<link rel="stylesheet" href="css/style.css">
<div class="footer-container">
    <div class="col-md-6 text-justify text-center mb-4">
        <h3>Visite-nos</h3>
        <p>Rua dos Pescadores Nossa Senhora da Tocha<br>3060-691 Praia da Tocha – Cantanhede</p>
        <p><strong>Telefone:&nbsp;</strong>231 442 220<br></p>
        <p><strong>E-mail:&nbsp;</strong><a href="mailto:ggabriel696969@gmail.com">campingpraiadatocha@gmail.com</a></p>
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
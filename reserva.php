<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="icon" type="image" href="imagens/logo1.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parque de Campismo da Praia da Tocha</title>
    <?php include('includes/linkscss.php')?>
    <link rel="stylesheet" href="css/style.css">
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

    <div class="container mt-5">
        <h2>Formulario de Reserva</h2>
        <form action="reservar.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
            </div>
        
            <div class="mb-3">
                <label for="checkin" class="form-label">Data de Check-in</label>
                    <input 
                        type="date" 
                        id="checkin" 
                        name="checkin" 
                        class="form-control" 
                        required 
                        min="<?php echo date('Y-m-d'); ?>" 
                    onchange="atualizarCheckout()">
            </div>
            <div class="mb-3">
                <label for="checkout" class="form-label">Data de Check-out</label>
                <input 
                    type="date" 
                    id="checkout" 
                    name="checkout" 
                    class="form-control" 
                required>
            </div>
            <button type="submit" class="btn btn-primary mb-5">Reservar</button>
        </form>
    </div>
    <footer>
        <?php require('includes/footer.php')?>
    </footer>

    <script>

            function atualizarCheckout() {
                const checkinInput = document.getElementById('checkin');
                const checkoutInput = document.getElementById('checkout');
                const checkinDate = new Date(checkinInput.value);
                if (checkinDate) {
        
                    const minCheckoutDate = new Date(checkinDate);
                    minCheckoutDate.setDate(minCheckoutDate.getDate() + 1);
                    const minDateFormatted = minCheckoutDate.toISOString().split('T')[0];
                    checkoutInput.min = minDateFormatted;
                    if (checkoutInput.value < minDateFormatted) {
                        checkoutInput.value = minDateFormatted;
                    }
                }
            }
        </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

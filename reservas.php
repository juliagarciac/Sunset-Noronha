<?php
    
    include 'lib/datalib.php';
    ?>
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    include 'parts/cabecalho.php' 
    ?>
</head>
<body>

    <header>
    <?php
    include 'parts/header.php'
    ?>
    </header>

    <?php
    include 'parts/login.php'
    ?>

    <?php
    include 'parts/cadastrar.php'
    ?>


<section class="reservas" id="reservas">
    <h1 class="heading">R E S E R V A S</h1>

    <div class="row">
        <div class="image">
            <img src="imagens/vista01/15vista.png" alt="Vista da acomodação">
        </div>
            <?php 
            include 'parts/formReserva.php'
            ?>

    </div>
</section>
<!-- Fim section Reservas -->

<footer class="rodape" id="contato">
    <?php
    include 'parts/footer.php'
    ?>
</footer>


    <script src="script.js"></script>
</body>
</html>
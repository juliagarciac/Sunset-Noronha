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

<section class="contact" id="contact">

    <h1 class="heading">C O N T A T O</h1>

    <div class="row">
        <div class="image">
           <img src="imagens/restaurante03/36restaurante.jpg" alt="Restaurant Image">
        </div>
        <?php
        include 'parts/formContato.php'
        ?>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.825124910672!2d-32.418913925496426!3d-3.8476866437896065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x63652666d497a3d%3A0x70076518a34e547d!2sPousada%20Morena!5e0!3m2!1spt-BR!2sbr!4v1745162821949!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0; max-width: 1150px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>


<footer class="rodape" id="contato">
    <?php
    include 'parts/footer.php'
    ?>
</footer>


    <script src="script.js"></script>
</body>
</html>
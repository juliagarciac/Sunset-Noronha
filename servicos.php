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
    
<!-- dinamização -->   
<section class="servicos" id="servicos">
    <h1 class="heading">S E R V I Ç O S</h1>

    <div class="box-container">
    <?php 
    for ($i = 0; $i < 12; $i++) 
        include 'parts/cardServicos.php';
    ?>
    </div>
</section>

<footer class="rodape" id="contato">
    <?php
    include 'parts/footer.php'
    ?>
</footer>


    <script src="script.js"></script>
</body>
</html>
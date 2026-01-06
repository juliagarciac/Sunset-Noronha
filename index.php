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
    include 'parts/header.php';
    ?>
    </header>
    
    <?php
    include 'parts/login.php'
    ?>

    <?php
    include 'parts/cadastrar.php'
    ?>
    
   
    <section class="home" id="home">
       <?php 
       include 'parts/home.php'
       ?>
    </section>
   


<footer class="rodape" id="contato">
    <?php
    include 'parts/footer.php'
    ?>
</footer>


    <script src="script.js"></script>
</body>
</html>

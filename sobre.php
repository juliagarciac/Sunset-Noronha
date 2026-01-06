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
       

       <section class="sobre_nos" id="sobre_nos">

<h1 class="heading">S O B R E &nbsp;&nbsp;&nbsp; N Ó S</h1>

<div class="content">
    <div class="left-column">
        <div class="horizontal-line"></div>
        <p class="subtitle">CONFORTO, SERVIÇO DE QUALIDADE E CONTATO COM A NATUREZA</p>
        <h1>Bem-Vindo à Sunset Noronha</h1>
    </div>
    <div class="right-column">
        <p>
            Com localização ímpar e uma das mais belas vistas do arquipélago de Noronha: o Morro do Pico. A Pousada Morena oferece conforto e experiências para você aproveitar ao máximo tudo o que a ilha oferece, além de funcionários bilíngues e acomodações com foco no conforto e na sustentabilidade.
            Temos sempre a opção certa para os nossos hóspedes. Nossos quartos, totalmente integrados com a vegetação nativa, foram cuidadosamente decorados e todos os detalhes pensados para que você tenha uma experiência memorável. Cuidamos de cada detalhe para que você desfrute momentos especiais conosco.
        </p>
        <p>
            Isso e muito mais é o que lhe aguarda aqui!
        </p>
    </div>
</div>

<div class="box-container">
    <?php 
        for ($i = 0; $i < 12; $i++): 
    ?>
        <div class="box">
            <img src="<?= $datasetfotos_sobre[$i]['imagem'] ?>" alt="<?= $datasetfotos_sobre[$i]['titulo'] ?>">
            <div class="content">
                <h3><?= $datasetfotos_sobre[$i]['titulo'] ?></h3>
                <a href="#" class="btn"></a>
            </div>
        </div>
    <?php endfor; ?>
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

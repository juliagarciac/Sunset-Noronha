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


<section class="pacotes" id="pacotes">
    <h1 class="heading">P A C O T E S</h1>

    <div class="box-container">
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <div class="box" data-carrossel="<?= $datasetpacotes[$i]['carrossel'] ?>">
                <img src="<?= $datasetpacotes[$i]['imagem_principal'] ?>" alt="<?= $datasetpacotes[$i]['nome'] ?>">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> <?= $datasetpacotes[$i]['nome'] ?></h3>
                    <p><?= $datasetpacotes[$i]['descricao'] ?></p>
                    <div class="stars">
                        <?php for ($j = 0; $j < $datasetpacotes[$i]['estrelas']; $j++) : ?>
                            <i class="fas fa-star"></i>
                        <?php endfor; ?>
                    </div>
                    <a href="#" class="btn">Reserve agora</a>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>

<!-- Modal do Carrossel -->
<div id="carrosselModal" class="modal">
    <div class="modal-content">
        <span class="fechar">&times;</span>
        <div class="carrossel">
            <span class="anterior">&lt;</span>
            <div class="slide">
                <img src="" alt="Imagem do carrossel">
            </div>
            <span class="proximo">&gt;</span>
        </div>
    </div>
</div>







<!-- Fim section Pacotes -->
<footer class="rodape" id="contato">
    <?php
    include 'parts/footer.php'
    ?>
    </footer>

    <script src="script.js"></script>
</body>
</html>
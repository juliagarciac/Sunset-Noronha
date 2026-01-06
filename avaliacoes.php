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
          




<section class="avaliacoes" id="avaliacoes"> 
    <h1 class="heading">A V A L I A Ç Õ E S</h1>

    <div class="avaliacoes-container">
        <div class="avaliacoes-track">
            <!-- Avaliações dinâmicas -->
            <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="avaliacao-box">
                    <img src="<?= $datasetavaliacoes[$i]['foto'] ?>" alt="Avaliação <?= $i + 1 ?>">
                    <h3><?= $datasetavaliacoes[$i]['nome'] ?></h3>
                    <p><?= $datasetavaliacoes[$i]['texto'] ?></p>
                    <div class="stars">
                        <?php for ($j = 0; $j < $datasetavaliacoes[$i]['estrelas']; $j++) : ?>
                            <i class="fas fa-star"></i>
                        <?php endfor; ?>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        
        <!-- Controles de navegação -->
        <div class="avaliacoes-controls">
            <button class="prev-btn">&lt;</button>
            <div class="pagination-dots"></div>
            <button class="next-btn">&gt;</button>
        </div>
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
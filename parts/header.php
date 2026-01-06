<a href="index.php" class="logo">
    <img src="imagens/logo.png" alt="Logo Sunset" class="logo-img">
</a>

<nav class="navbar">
    <?php for($i = 0; $i < count($menu_itens); $i++): ?>
        <a href="<?= $menu_itens[$i][1] ?>" class="nav-link"><?= $menu_itens[$i][0] ?></a>
    <?php endfor; ?>
</nav>

<div class="icons">
    <i class="fas fa-search" id="search-btn"></i>
    <i class="fas fa-user" id="login-btn"></i>
</div>

<div id="menu-bar" class="fas fa-bars"></div>

<form action="" class="search-bar-container">
    <input type="search" id="search-bar" placeholder="Busque aqui...">
    <label for="search-bar" class="fas fa-search"></label>
</form>

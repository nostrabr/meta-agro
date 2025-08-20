<link rel="stylesheet" href="<?= $base_url; ?>modulos/navegacao/css/style.css">

<!-- mobile -->
<div id="menu-mobile" class="bg-0">
    <div style="position: relative;" class="h-100">
        <div class="px-4 pt-4 pb-5">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <img style="width: 170px;" src='<?= $base_url ?>assets/imagens/site/logo-menu.png'>
                <img onclick="menu()" style="width: 35px;" src='<?= $base_url ?>assets/imagens/site/close.png'>
            </div>
        
            <nav class="d-flex flex-column justify-content-center align-items-center">
                <a href="<?= $base_url; ?>index.php" class="mb-5 fs-3 <?= \Core\RoutesSite::isActive('index'); ?>">Início</a>
                <a href="<?= $base_url; ?>sobre-nos.php" class="mb-5 fs-3 <?= \Core\RoutesSite::isActive('sobre'); ?>">Sobre Nós</a>
                <a href="<?= $base_url; ?>servicos.php" class="mb-5 fs-3 <?= \Core\RoutesSite::isActive('servicos'); ?>">Serviços</a>
                <a href="<?= $base_url; ?>contato.php" class="mb-5 fs-3 <?= \Core\RoutesSite::isActive('contato'); ?>">Contato</a>
            </nav>
        </div>

        <div class="d-flex flex-column align-items-center bg-2">
            <h3 class="text-center mb-0 text-0 mt-3 fw-semibold">Entre em contato</h3>
            <div class="d-flex justify-content-around align-items-center w-100 px-4 bg-2 pt-1 pb-4">
                <a href="<?= $contatos['instagram']; ?>" target="_blank" class="mt-3"><img style="width: 55px;" src='<?= $base_url ?>assets/imagens/site/insta-menu-mobile.png'></a>
                <a href="<?= $contatos['facebook']; ?>" target="_blank" class="mt-3"><img style="width: 55px;" src='<?= $base_url ?>assets/imagens/site/fb-menu-mobile.png'></a>
                <a href="<?= $contatos['linkedin']; ?>" target="_blank" class="mt-3"><img style="width: 55px;" src='<?= $base_url ?>assets/imagens/site/yt-menu-mobile.png'></a>
            </div>
        </div>
    </div>
</div>
<!-- mobile -->



<!-- desktop -->
<div class="w-100 bg-0">
    <div class="bg-0 px-4 px-lg-0 container mx-auto d-flex justify-content-between align-items-center py-4 py-lg-4 py-xxl-5">
        <a href="<?= $base_url; ?>"><img src='<?= $base_url ?>assets/imagens/site/logo-menu.png' alt='logo' class='logo-menu'></a>
    
        <nav class="d-none d-lg-flex justify-content-center align-items-center">
            <a href="<?= $base_url; ?>index.php" class="mx-4 <?= \Core\RoutesSite::isActive('index'); ?>">Início</a>
            <a href="<?= $base_url; ?>sobre-nos.php" class="mx-4 <?= \Core\RoutesSite::isActive('sobre-nos'); ?>">Sobre nós</a>
            <a href="<?= $base_url; ?>servicos.php" class="mx-4 <?= \Core\RoutesSite::isActive('servicos'); ?>">Serviços</a>
            <a href="<?= $base_url; ?>contato.php" class="mx-4 <?= \Core\RoutesSite::isActive('contato'); ?>">Contato</a>
    
            <a href="<?= $contatos['instagram']; ?>" target="_blank" class="ms-4"><img style="width: 30px;" src='<?= $base_url ?>assets/imagens/site/insta-menu.png'></a>
        </nav>
    
        <img onclick="menu()" style="width: 35px;" class="d-block d-lg-none" src='<?= $base_url ?>assets/imagens/site/toggler.png'>
    </div>
</div>
<!-- desktop -->

<script src="<?= $base_url; ?>modulos/navegacao/js/app.js"></script>
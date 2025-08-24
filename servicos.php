<?php
    include_once __DIR__ . '/config/config.php';

    // *** buscar contatos
    use Repositories\ContatosRepository;
    $contatos = ContatosRepository::getContatos();

    // *** buscar banners
    use Repositories\BannersRepository;
    $banners = BannersRepository::getBanners();

    // *** buscar serviços
    use Repositories\ServicosRepository;
    $servicos = ServicosRepository::getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php include_once  __DIR__ .'/modulos/header/index.php'; ?>

</head>
<body class="bg-0">

    <!-- WPP FLOAT -->
    <?php include_once  __DIR__ .'/modulos/wpp-float/index.php'; ?>
    <!-- WPP FLOAT -->
     
    <!-- NAVEGAÇÃO -->
    <?php include_once  __DIR__ .'/modulos/navegacao/index.php'; ?>
    <!-- NAVEGAÇÃO -->

    <!-- BANNER SERVIÇOS -->
    <?php include_once  __DIR__ .'/modulos/banner-servicos/index.php'; ?>
    <!-- BANNER SERVIÇOS -->

    <!-- CONTENT 1 SERVIÇOS -->
    <?php include_once  __DIR__ .'/modulos/content-1-servicos/index.php'; ?>
    <!-- CONTENT 1 SERVIÇOS -->

    <!-- CONTENT 2 SERVIÇOS -->
    <?php include_once  __DIR__ .'/modulos/content-2-servicos/index.php'; ?>
    <!-- CONTENT 2 SERVIÇOS -->

    <!-- CTA -->
    <?php include_once  __DIR__ .'/modulos/cta/index.php'; ?>
    <!-- CTA -->

    <!-- FOOTER -->
    <?php include_once  __DIR__ .'/modulos/footer/index.php'; ?>
    <!-- FOOTER -->




    
    

    <!-- SCROLL ANIMATION -->
    <script src="<?= $base_url; ?>assets/utils/anima-scroll/aos.js"></script>
    <script>AOS.init()</script>

    <!-- BOOTSTRAP -->
    <script src="<?= $base_url; ?>assets/utils/bootstrap/bootstrap.js"></script>

    <!-- LOADING JS -->
    <script src="<?= $base_url; ?>assets/js/loading.js"></script>

    <!-- FANCYBOX JS -->
    <script src="<?= $base_url; ?>assets/utils/fancybox/fancybox-1.js"></script>
    <script src="<?= $base_url; ?>assets/utils/fancybox/fancybox-2.js"></script>

    <!-- JS GLOBAL -->
    <script src="<?= $base_url; ?>assets/js/app.js"></script>
</body>
</html>
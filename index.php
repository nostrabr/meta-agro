<?php
    include_once __DIR__ . '/config/config.php';

    // *** buscar contatos
    use Repositories\ContatosRepository;
    $contatos = ContatosRepository::getContatos();

    // *** buscar banners
    use Repositories\BannersRepository;
    $banners = BannersRepository::getBanners();
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

    <!-- BANNER INICIAL -->
    <?php include_once  __DIR__ .'/modulos/banner-inicial/index.php'; ?>
    <!-- BANNER INICIAL -->

    <!-- SOBRE HOME -->
    <?php include_once  __DIR__ .'/modulos/sobre-home/index.php'; ?>
    <!-- SOBRE HOME -->

    <!-- SOLUÇÕES -->
    <?php include_once  __DIR__ .'/modulos/solucoes-home/index.php'; ?>
    <!-- SOLUÇÕES -->
     
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
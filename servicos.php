<?php
    include_once __DIR__ . '/config/config.php';

    // *** buscar contatos
    use Repositories\ContatosRepository;
    $contatos = ContatosRepository::getContatos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php include_once  __DIR__ .'/modulos/header/index.php'; ?>

</head>
<body class="bg-0">

    <!-- NAVEGAÇÃO -->
    <?php include_once  __DIR__ .'/modulos/navegacao/index.php'; ?>
    <!-- NAVEGAÇÃO -->

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
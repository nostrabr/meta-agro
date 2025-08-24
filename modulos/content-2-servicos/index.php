<style>
    .container-items-servicos{
        width: 90%;
    }
</style>


<section class="bg-white py-5">
    <div class="container mx-auto px-4 px-lg-0">
        <!-- loop -->
        <?php foreach ($servicos as $key => $servico) { ?>
            <div class="row py-5 mb-5 border-bottom">
                <div class="col-12 col-lg-7 order-2 order-lg-1">
                    <div class="container-items-servicos">
                        <h6 class="text-2 fw-semibold mb-1">Prestação de serviço para:</h6>
                        <div class="mb-5 text-0"><?= $servico['texto']; ?></div>
                        <a href="<?= $base_url; ?>contato.php" class="rounded bg-1 text-white py-3 px-5">Entre em contato</a>
                    </div>
                </div>
    
                <div class="mb-5 mb-lg-0 col-12 col-lg-5 order-1 order-lg-2">
                    <img class="w-100" src='<?= $base_url ?>admin/assets/imagens/arquivos/servicos/<?= $servico['imagem']; ?>'>
                </div>
            </div>
        <?php } ?>


        <div style="cursor: pointer;" class="my-5" onclick="window.location.href='https://chat.whatsapp.com/EV1KMhuKD8d0iduarJ4tQG'">
            <img class="d-none d-lg-block w-100" src='<?= $base_url ?>assets/imagens/site/banner-servicos-desktop.png'>
            <img class="d-block d-lg-none w-100" src='<?= $base_url ?>assets/imagens/site/banner-servicos-mobile.png'>
        </div>

    </div>
</section>
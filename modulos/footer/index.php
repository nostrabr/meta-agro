<style>

</style>


<footer class="py-5">
    <div class="container mx-auto">
        <div class="row px-4 px-lg-0">
            <div class="mb-5 mb-lg-0 text-center text-lg-start col-12 col-lg-8">
                <img style="width: 240px;" src='<?= $base_url ?>assets/imagens/site/logo-footer.png'>
            </div>

            <div class="col-12 col-lg-2 mb-5 mb-lg-0">
                <h5 class="text-2 fw-semibold mb-4 text-center text-lg-start">Navegação</h5>

                <div class="d-flex flex-column text-center text-lg-start">
                    <a class="small mb-4 mb-lg-3 text-white" href="<?= $base_url; ?>index.php">Início</a>
                    <a class="small mb-4 mb-lg-3 text-white" href="<?= $base_url; ?>sobre-nos.php">Sobre Nós</a>
                    <a class="small mb-4 mb-lg-3 text-white" href="<?= $base_url; ?>servicos.php">Serviços</a>
                    <a class="small mb-4 mb-lg-3 text-white" href="<?= $base_url; ?>contato.php">Contato</a>
                </div>
            </div>

            <div class="col-12 col-lg-2 mb-5 mb-lg-0">
                <h5 class="text-2 fw-semibold mb-4 text-center text-lg-start">Nos acompanhe!</h5>

                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a class="me-4 me-lg-3" href="<?= $contatos['instagram']; ?>" target="_blank"><img style="width: 40px;" src='<?= $base_url ?>assets/imagens/site/insta-menu-mobile.png'></a>
                    <a class="me-4 me-lg-3" href="<?= $contatos['facebook']; ?>" target="_blank"><img style="width: 40px;" src='<?= $base_url ?>assets/imagens/site/fb-menu-mobile.png'></a>
                    <a href="<?= $contatos['linkedin']; ?>" target="_blank"><img style="width: 40px;" src='<?= $base_url ?>assets/imagens/site/yt-menu-mobile.png'></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div style="border-top: 2px solid #D5C2A5;" class="py-4">
    <div class="px-4 px-lg-0 container d-flex flex-column flex-lg-row align-items-center justify-content-between">
        <span class="mb-3 mb-lg-0 text-center text-lg-start text-2 small">© <?= date('Y'); ?> Meta Agro Pesquisa e Assessoria Agrícola. Todos os direitos reservados.</span>
        <a href="https://nostrabr.com" target="_blank"><img style="width: 80px;" src='<?= $base_url ?>assets/imagens/site/logo-nostra.png'></a>
    </div>
</div>
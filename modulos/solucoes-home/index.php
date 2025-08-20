<style>
    .container-textos-solucoes{
        width: 60%;
    }

    @media(max-width:992px){
        .container-textos-solucoes{
            width: 100%;
        }
    }
</style>

<section class="bg-white py-5">
    <div class="container mx-auto py-4 px-4 px-lg-0">
        <div class="row mb-5 pb-4">
            <div class="col-12 order-2 order-lg-1 col-lg-8">
                <div class="container-textos-solucoes">
                    <p class="text-1 mb-1">Nossos Serviços</p>
                    <h2 class="text-0 fw-bold mb-4">Soluções que impulsionam o seu resultado.</h2>
                    <h4 class="fw-semibold text-0 mb-4">Serviços especializados para toda a cadeia da soja, do campo à decisão estratégica.</h4>
                    <p class="text-0 mb-5">Da escolha das cultivares ao acompanhamento completo da lavoura, a Meta Agro oferece serviços personalizados para agricultores, empresas sementeiras e revendas. Com base em dados técnicos e pesquisas imparciais, entregamos conhecimento confiável que maximiza a produtividade e dá segurança nas decisões.</p>
                    <a href="<?= $base_url; ?>servicos.php" class="fw-semibold rounded bg-2 text-0 py-3 px-5"><span class="me-1">Nossos serviços</span> <img style="width: 8px;" src='<?= $base_url ?>assets/imagens/site/arrow-btn.png'></a>
                </div>
            </div>

            <div class="px-2 text-center mb-5 mb-lg-0 col-12 order-1 order-lg-2 col-lg-4">
                <img class="w-100" src='<?= $base_url ?>assets/imagens/site/solucoes-img.png'>
            </div>
        </div>

        <div>
            <img onclick="window.location.href='<?= $base_url; ?>servicos.php'" style="cursor: pointer;" class="w-100 d-none d-lg-block" src='<?= $base_url ?>assets/imagens/site/banner-solucoes-desktop.png'>
            <img onclick="window.location.href='<?= $base_url; ?>servicos.php'" style="cursor: pointer;" class="w-100 d-block d-lg-none" src='<?= $base_url ?>assets/imagens/site/banner-solucoes-mobile.png'>
        </div>
    </div>
</section>
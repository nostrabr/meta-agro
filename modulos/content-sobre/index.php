<style>
    #mapinha{
        transform: translateY(-20%);
        width: 100%;
    }

    @media(min-width:1500px) {
        #mapinha{
            transform: translateY(-17%);
        }
    }
    
    @media(max-width:992px) {
        #mapinha{
            transform: translateY(-20%);
            width: 130%;
        }
    }
</style>


<section class="bg-white py-5">
    <div class="container py-5 mx-auto px-4 px-lg-0">
        <div class="row mb-5 pb-5 pb-lg-2">

            <div class="order-2 order-lg-1 col-12 col-lg-6 pe-3 pe-lg-5">
                <h6 class="text-1 fw-normal">Área de atuação</h6>
                <h1 class="fw-bold text-0 mb-4">A área de pesquisa foi crescendo ano após ano.</h1>
                <p class="text-0 mb-4">Aumentando o número de ensaios e a representatividade no estado do RS. <br><br> Atualmente a empresa trabalha principalmente com pesquisa, com foco em cultivares de soja, conduzindo uma rede de ensaios robusta em toda a região sul do Brasil, que conta com 22 ensaios em 18 diferentes municípios, sendo 15 municípios no RS, 1 em SC e 2 no PR. <br><br> O objetivo é apresentar resultados e soluções para os produtores de soja de forma confiável, baseados em todas as informações técnicas coletadas na nossa rede de ensaios.</p>
                <img style="width: 230px;" src='<?= $base_url ?>assets/imagens/site/logo-empresa.png'>
            </div>

            <div class="order-1 order-lg-2 mb-1 mb-lg-0 col-12 col-lg-6">
                <img id="mapinha" src='<?= $base_url ?>assets/imagens/site/mapinha.png'>
            </div>

        </div>

        <div style="cursor: pointer;" onclick="window.location.href='<?= $base_url; ?>servicos.php'">
            <img class="w-100 d-none d-lg-block" src='<?= $base_url ?>assets/imagens/site/banner-content-empresa-desktop.png'>
            <img class="w-100 d-block d-lg-none" src='<?= $base_url ?>assets/imagens/site/banner-content-empresa-mobile.png'>
        </div>
    </div>
</section>
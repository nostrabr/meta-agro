<style>
    .container-img-sobre-home{
        height: 290px;
        width: 100%;
        overflow: hidden;
    }
    .container-img-sobre-home img{
        height: 100%;
        width: 70%;
        object-position: center;
        object-fit: cover;
        border-radius: 12px;
    }

    @media(max-width:992px){
        .container-img-sobre-home img{
            width: 100%;
        }
    }
</style>



<section class="py-5">
    <div class="container mx-auto py-4 px-4 px-lg-0">
        <h6 class="text-2 small fw-semibold text-center mb-0">A Meta Agro</h6>
        <h2 class="text-white fw-bold text-center mt-0 mb-5">Conheça um pouco da nossa história.</h2>

        <div class="row pt-0 pt-lg-5">

            <div class="mb-5 mb-lg-0 col-12 col-lg-6">
                <div class="container-img-sobre-home">
                    <img src='<?= $base_url ?>/assets/imagens/site/img-home.png'>
                </div>
            </div>

            <div class="col-12 col-lg-6 text-center text-lg-start">
                <img style="width: 40px;" src='<?= $base_url ?>assets/imagens/site/ico-logo.png'>
                <h6 class="mt-4 fw-semibold text-2 mb-3">A Meta Agro foi fundada em 2021, com atuação em assessoria agrícola, vistorias de seguro rural e ensaios de cultivares.</h6>
                <h3 class="mb-5 text-white fw-semibold">Hoje conduzimos uma ampla rede de 22 ensaios em 18 municípios do sul do Brasil, entregando soluções confiáveis ao campo.</h3>
                <a href="<?= $base_url; ?>sobre-nos.php" class="fw-semibold rounded bg-2 text-0 py-3 px-5"><span class="me-1">Conheça</span> <img style="width: 8px;" src='<?= $base_url ?>assets/imagens/site/arrow-btn.png'></a>
            </div>

        </div>
    </div>
</section>
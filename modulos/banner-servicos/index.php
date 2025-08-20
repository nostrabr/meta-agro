<style>
    #banner-servicos{
        background-image: url('<?= $base_url ?>admin/assets/imagens/arquivos/banners/<?= $banners['banner_servicos_desktop']; ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 45vh;
    }

    @media(min-width:1500px) {
        #banner-servicos{
            height: 40vh;
        }
    }
    
    @media(max-width:992px) {
        #banner-servicos{
        background-image: url('<?= $base_url ?>admin/assets/imagens/arquivos/banners/<?= $banners['banner_servicos_mobile']; ?>');
        height: 55vh;
    }
    }
</style>


<section id="banner-servicos">

</section>
<style>
    #banner-sobre{
        background-image: url('<?= $base_url ?>admin/assets/imagens/arquivos/banners/<?= $banners['banner_sobre_desktop']; ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 45vh;
    }

    @media(min-width:1500px) {
        #banner-sobre{
            height: 40vh;
        }
    }
    
    @media(max-width:992px) {
        #banner-sobre{
        background-image: url('<?= $base_url ?>admin/assets/imagens/arquivos/banners/<?= $banners['banner_sobre_mobile']; ?>');
        height: 55vh;
    }
    }
</style>


<section id="banner-sobre">

</section>
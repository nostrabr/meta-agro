<style>
    #banner-inicial{
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-image: url('<?= $base_url; ?>admin/assets/imagens/arquivos/banners/<?= $banners['banner_home_desktop']; ?>');
        height: 80vh;
        border-bottom-right-radius: 210px !important;
    }

    @media(min-width:1500px) {
        #banner-inicial{
            height: 65vh;
        }
    }
    
    @media(max-width:992px) {
        #banner-inicial{
            background-image: url('<?= $base_url; ?>admin/assets/imagens/arquivos/banners/<?= $banners['banner_home_mobile']; ?>');
            height: 80vh;
            border-bottom-right-radius: 120px !important;
        }
    }
</style>


<section id="banner-inicial" class="d-flex align-items-end">
    <div class="px-4 px-lg-0 container mb-5 pb-5">
        <h2 class="display-4 fw-bold text-white">O seu objetivo <br> é também o nosso.</h2>
    </div>
</section>
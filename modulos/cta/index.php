<style>
    #cta{
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-image: url('<?= $base_url; ?>assets/imagens/site/cta-home-desktop.png');
        height: 60vh;
    }

    #img-texto-cta{
        width: 30%;
        cursor: pointer;
    }

    @media(min-width:1500px) {
        #cta{
            height: 60vh;
        }
    }
    
    @media(max-width:992px) {
        #cta{
            background-image: url('<?= $base_url; ?>assets/imagens/site/cta-home-mobile.png');
            height: 75vh;
        }

        #img-texto-cta{
            width: 90%;
        }
    }
</style>


<section id="cta" class="d-flex align-items-center justify-content-center">
    <img onclick="window.location.href='<?= $base_url; ?>contato.php'" id="img-texto-cta" src='<?= $base_url ?>assets/imagens/site/cta-texto.png'>
</section>
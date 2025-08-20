<style>
    #wpp-float{
        position: fixed;
        bottom: 3%;
        right: 2%;
        z-index: 10;
        width: 70px !important;
        height: 70px !important;
        overflow: hidden;
    }
    #wpp-float img{
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        object-position: center !important;
    }
    @media(min-width:1500px){
        #wpp-float{
            width: 80px !important;
            height: 80px !important;
        }
    }
    @media(max-width:992px){
        #wpp-float{
            width: 50px !important;
            height: 50px !important;
        }
    }
</style>


<div id="wpp-float">
    <a href="https://wa.me/<?= preg_replace("/[^0-9]/", "", $contatos['wpp']); ?>" target="_blank"><img src='<?= $base_url ?>assets/imagens/site/wpp-float.png'></a>
</div>
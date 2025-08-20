<style>
    .container-content-contato{
        width: 65%;
    }

    @media(min-width:1500px) {
        .container-content-contato{
            width: 50%;
        }
    }
    
    @media(max-width:992px) {
        .container-content-contato{
            width: 100%;
        }
    }
</style>



<section class="py-5 bg-2">
    <div class="py-5 container-content-contato mx-auto px-4 px-lg-0">
        <div class="row">

            <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                <h4 class="text-center text-lg-start fw-semibold text-0 mb-4">Contatos</h4>
                <div class="text-center text-lg-start mb-5 d-flex flex-column">
                    <a class="text-0 mb-2" href="tel:<?= $contatos['telefone']; ?>"><?= $contatos['telefone']; ?></a>
                    <a class="text-0" href="mailto:<?= $contatos['email']; ?>"><?= $contatos['email']; ?></a>
                </div>

                <h4 class="text-center text-lg-start fw-semibold text-0 mb-4">Nos acompanhe nas redes</h4>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a class="me-4 me-lg-3" href="<?= $contatos['instagram']; ?>" target="_blank"><img style="width: 40px;" src='<?= $base_url ?>assets/imagens/site/insta-menu-mobile.png'></a>
                    <a class="me-4 me-lg-3" href="<?= $contatos['facebook']; ?>" target="_blank"><img style="width: 40px;" src='<?= $base_url ?>assets/imagens/site/fb-menu-mobile.png'></a>
                    <a href="<?= $contatos['linkedin']; ?>" target="_blank"><img style="width: 40px;" src='<?= $base_url ?>assets/imagens/site/yt-menu-mobile.png'></a>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <h2 class="text-center text-lg -start text-0 fw-semibold mb-2">Possui alguma dúvida?</h2>
                <p class="text-center text-lg -start text-0 mb-4">Preencha abaixo para saber mais.</p>

                <form action="<?= $base_url; ?>modulos/content-contato/php/enviar-email.php" method="post">
                    <input type='text' id='nome' name='nome' placeholder='Seu Nome*' class='py-2 mb-3 form-control' required>
                    <input type='email' id='email' name='email' placeholder='Seu Email*' class='py-2 mb-3 form-control' required>
                    <input type='tel' id='telefone' name='telefone' placeholder='Seu Telefone*' class='py-2 mb-3 form-control' maxlength="15" inputmode="tel" required>
                    <textarea name="mensagem" id="mensagem" placeholder="Sua Mensagem*" rows="3" class="py-2 mb-3 form-control" required></textarea>

                    <div class="text-center mt-4"><button type="submit" class="rounded py-2 px-5 bg-0 text-white" style="border: none;">Enviar</button></div>
                </form>
            </div>

        </div>
    </div>
</section>


<script>    
    document.getElementById('telefone').addEventListener('keyup', (e) => {
        let input = e.target;
        input.value = phoneMask(input.value);
    });
    
    const phoneMask = (value) => {
        if (!value) return "";
        value = value.replace(/\D/g, '');
        if (value.length <= 2) {
            return `(${value}`;
        } else if (value.length <= 6) {
            return `(${value.slice(0, 2)}) ${value.slice(2)}`;
        } else if (value.length <= 10) {
            return `(${value.slice(0, 2)}) ${value.slice(2, 6)}-${value.slice(6)}`;
        } else {
            return `(${value.slice(0, 2)}) ${value.slice(2, 6)}-${value.slice(6, 10)}${value.slice(10, 15)}`;
        }
    };

    <?php
        if(isset($_GET['success']) && $_GET['success'] !== '' && $_GET['success'] === 'true') {
            echo "alert('E-mail enviado com sucesso!');";
        }
    ?>
</script>
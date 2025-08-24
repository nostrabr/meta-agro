<section>
    <p class="mb-5 small">Sessão destinada para <strong>Serviços</strong></p>

    <button type="button" class="btn btn-success mb-5" data-bs-toggle="modal" data-bs-target="#add-servico">Adicionar Serviço</button> 

    <?php foreach ($servicos as $key => $servico) { ?>
        <div class="mb-4 item-acordion accordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item-servico-<?= $servico['id'] ?>" aria-expanded="false" aria-controls="item-servico-<?= $servico['id'] ?>">
                        Serviço - <?= $key; ?>
                    </button>
                </h2>
                <div id="item-servico-<?= $servico['id'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <form action="<?= $base_url; ?>modulos-admin/contents/servicos/php/editar-servico.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $servico['id']; ?>">
                            <div class="mb-3">
                                <label for="servico-texto-<?= $servico['id']; ?>" class="form-label">Texto</label>
                                <textarea rows="3" class="form-control" id="servico-texto-<?= $servico['id']; ?>" name="texto" required><?= $servico['texto']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="servico-imagem-<?= $servico['id']; ?>" class="form-label">Imagem</label>
                                <input type="file" class="form-control" id="servico-imagem-<?= $servico['id']; ?>" name="imagem" accept="image/*">
                                <div style="width: 80px; height: 60px; overflow: hidden;" class="mt-2">
                                    <img src="<?= $base_url; ?>assets/imagens/arquivos/servicos/<?= $servico['imagem']; ?>" alt="Preview" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>

                            <div class="mt-3 d-flex">
                                <button type="submit" class="me-2 btn btn-primary">Atualizar</button>
                                <a href="<?= $base_url; ?>modulos-admin/contents/servicos/php/deletar-servico.php?id=<?= $servico['id']; ?>" class="btn btn-danger">Deletar serviço</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</section>

<div class="modal fade" id="add-servico" tabindex="-1" aria-labelledby="add-servico" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Adicionar Serviço</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= $base_url; ?>modulos-admin/contents/servicos/php/add-servico.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
             <div class="mb-3">
                 <label for="servico-texto" class="form-label">Texto</label>
                 <textarea rows="3" class="form-control" id="servico-texto" name="texto" required></textarea>
             </div>
             <div class="mb-3">
                 <label for="servico-imagem" class="form-label">Imagem</label>
                 <input type="file" class="form-control" id="servico-imagem" name="imagem" accept="image/*" required>
             </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
      </form>
    </div>
  </div>
</div>
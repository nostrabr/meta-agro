<?php

require_once __DIR__ . '/../../../../../helpers/upload-webp.php';

require '../../../../config/config.php';
use Repositories\ServicosRepository;

// Dados enviados pelo formulário
$texto = $_POST['texto'];
$id = $_POST['id'];


// Caminho onde os arquivos serão salvos
$pastaDestino = __DIR__ . "/../../../../assets/imagens/arquivos/servicos/";

// verifica se veio a imagem, se veio faz o processo se nao veio ignora
$imagem = null;
if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
    $imagem = salvarImagemWebP($_FILES['imagem'], $pastaDestino);
}

// Atualiza no banco de dados
$res = ServicosRepository::update($id, $texto, $imagem);

// Redireciona com base no resultado
if ($res) {
    header('Location: ../../../../servicos.php?success=true');
} else {
    header('Location: ../../../../servicos.php?error=true');
}

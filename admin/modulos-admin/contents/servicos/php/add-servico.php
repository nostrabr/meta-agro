<?php

require_once __DIR__ . '/../../../../../helpers/upload-webp.php';

require '../../../../config/config.php';
use Repositories\ServicosRepository;

// Dados enviados pelo formulário
$texto = $_POST['texto'];


// Caminho onde os arquivos serão salvos
$pastaDestino = __DIR__ . "/../../../../assets/imagens/arquivos/servicos/";

$imagem = salvarImagemWebP($_FILES['imagem'], $pastaDestino);

// Atualiza no banco de dados
$res = ServicosRepository::add($texto, $imagem);

// Redireciona com base no resultado
if ($res) {
    header('Location: ../../../../servicos.php?success=true');
} else {
    header('Location: ../../../../servicos.php?error=true');
}

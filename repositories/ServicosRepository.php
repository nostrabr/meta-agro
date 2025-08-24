<?php
namespace Repositories;

use Core\Logger;
use Models\Servicos;

class ServicosRepository {
    // pegando todos os servicos
    public static function getAll() {
        return Servicos::all();
    }

    // pegando um servico
    public static function getServico($id) {
        return Servicos::where('id', $id)->first();
    }

    // adicionando
    public static function add($texto, $imagem) {
        try {
            $servico = Servicos::create([
                'texto' => $texto,
                'imagem' => $imagem
            ]);
            if($servico) {
                Logger::log("Serviço adicionado!", "INFO");
                return true;
            } else {
                Logger::log("Erro ao adicionar o serviço.", "ERROR");
                return false;
            }
        } catch (\Exception $e) {
            Logger::log("Erro ao adicionar o serviço: " . $e->getMessage(), "ERROR");
            return false;
        }
    }

    // atualizando servico
    public static function update($id, $texto, $imagem) {
        // verifica se a imagem é null
        if ($imagem === null) {
            // Se a imagem for null, atualiza apenas o texto
            $update = Servicos::where('id', $id)->update([
                'texto' => $texto
            ]);
        } else {
            // Se a imagem não for null, atualiza o texto e a imagem
            $update = Servicos::where('id', $id)->update([
                'texto' => $texto,
                'imagem' => $imagem
            ]);
        }

        if($update) {
            Logger::log("Serviço atualizado!", "INFO");
            return true;
        } else {
            Logger::log("Erro ao atualizar o serviço. Nenhuma alteração feita.", "ERROR");
            return false;
        }
    }

    // deletando serviço
    public static function delete($id) {
        try {
            $delete = Servicos::where('id', $id)->delete();
            if($delete) {
                Logger::log("Serviço deletado!", "INFO");
                return true;
            } else {
                Logger::log("Erro ao deletar o serviço. Nenhuma alteração feita.", "ERROR");
                return false;
            }
        } catch (\Exception $e) {
            Logger::log("Erro ao deletar o serviço: " . $e->getMessage(), "ERROR");
            return false;
        }
    }

}
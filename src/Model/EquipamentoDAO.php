<?php

namespace Src\Model;

use Src\VO\EquipamentoVO;
use Src\Model\Conexao;
use Src\Model\SQL\GerenciarEquipamentoSQL;

class EquipamentoDAO extends Conexao
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = parent::retornarConexao();
    }

    public function CadastrarEquipamentoDAO(EquipamentoVO $vo): int
    {
        $sql = $this->conexao->prepare(GerenciarEquipamentoSQL::INSERIR_EQUIPAMENTO());
        $i = 1;
        $sql->bindValue($i++, $vo->getIdentificacao());
        $sql->bindValue($i++, $vo->getDescricao());
        $sql->bindValue($i++, $vo->getIdModelo());
        $sql->bindValue($i++, $vo->getIdTipo());

        try {
            $sql->execute();
            return 1;
        } catch (\Exception $ex) {
            $vo->setMsgErro($ex->getMessage());
            parent::GravarErroLog($vo);
            return -1;
        }
    }

    public function AlterarEquipamentoDAO(EquipamentoVO $vo): int
    {
        $sql = $this->conexao->prepare(GerenciarEquipamentoSQL::ALTERAR_EQUIPAMENTO());
        $i = 1;
        $sql->bindValue($i++, $vo->getIdentificacao());
        $sql->bindValue($i++, $vo->getDescricao());
        $sql->bindValue($i++, $vo->getIdModelo());
        $sql->bindValue($i++, $vo->getIdTipo());
        $sql->bindValue($i++, $vo->getId());

        try {
            $sql->execute();
            return 1;
        } catch (\Exception $ex) {
            $vo->setMsgErro($ex->getMessage());
            parent::GravarErroLog($vo);
            return -1;
        }
    }

    public function ExcluirEquipamentoDAO(EquipamentoVO $vo): int
    {
        $sql = $this->conexao->prepare(GerenciarEquipamentoSQL::EXCLUIR_EQUIPAMENTO());
        $sql->bindValue(1, $vo->getId());

        try {
            $sql->execute();
            return 1;
        } catch (\Exception $ex) {
            $vo->setMsgErro($ex->getMessage());
            parent::GravarErroLog($vo);
            return -1;
        }
    }

    public function DetalharEquipamentoDAO($id_equip): array
    {
        $sql = $this->conexao->prepare(GerenciarEquipamentoSQL::DETALHAR_EQUIPAMENTO());
        $sql->bindValue(1, $id_equip);

        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function ConsultarEquipamentoDAO(string $filtro_tipo = '', string $filtro_modelo = '', string $filtro_id = ''): array
    {
        $sql = $this->conexao->prepare(GerenciarEquipamentoSQL::CONSULTAR_EQUIPAMENTO($filtro_tipo, $filtro_modelo, $filtro_id));

        $i = 1;

        if (!empty($filtro_tipo) && empty($filtro_modelo) && empty($filtro_id))
            $sql->bindValue($i++, '%' . $filtro_tipo . '%');

        if (!empty($filtro_modelo) && empty($filtro_tipo) && empty($filtro_id))
            $sql->bindValue($i++, '%' . $filtro_modelo . '%');

        if (!empty($filtro_id) && empty($filtro_tipo) && empty($filtro_modelo))
            $sql->bindValue($i++, '%' . $filtro_id . '%');

        if (!empty($filtro_tipo) && !empty($filtro_modelo) && empty($filtro_id)) {
            $sql->bindValue($i++, '%' . $filtro_tipo . '%');
            $sql->bindValue($i++, '%' . $filtro_modelo . '%');
        }

        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }
}

<?php

namespace Src\Model;

use Src\Model\Conexao;
use Src\Model\SQL\GerenciarSetorEquipamentoSQL;
use Src\VO\SetorVO;

class SetorEquipamentoDAO extends Conexao
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = parent::retornarConexao();
    }

    public function CadastrarSetorEquipamentoDAO(SetorVO $vo)
    {
        $sql = $this->conexao->prepare(GerenciarSetorEquipamentoSQL::INSERIR_SETOR_EQUIPAMENTO());
        $sql->bindValue(1, $vo->getNome());

        try {
            $sql->execute();
            return 1;
        } catch (\Exception $ex) {
            $vo->setMsgErro($ex->getMessage());
            parent::GravarErroLog($vo);
            return -1;
        }
    }

    public function ConsultarSetorEquipamentoDAO(string $nome = ''): array
    {
        $sql = $this->conexao->prepare(GerenciarSetorEquipamentoSQL::CONSULTAR_SETOR_EQUIPAMENTO($nome));
        if (!empty($nome))
            $sql->bindValue(1, '%' . $nome . '%');

        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function AlterarSetorEquipamentoDAO(SetorVO $vo): int
    {
        $sql = $this->conexao->prepare(GerenciarSetorEquipamentoSQL::ALTERAR_SETOR_EQUIPAMENTO());
        $i = 1;
        $sql->bindValue($i++, $vo->getNome());
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

    public function ExcluirSetorEquipamentoDAO(SetorVO $vo): int
    {
        $sql = $this->conexao->prepare(GerenciarSetorEquipamentoSQL::EXCLUIR_SETOR_EQUIPAMENTO());
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
}

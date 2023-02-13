<?php

namespace Src\Model;

use Src\Model\Conexao;
use Src\VO\TipoVO;
use Src\Model\SQL\GerenciarTipoEquipamentoSQL;

class TipoEquipamentoDAO extends Conexao
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = parent::retornarConexao();
    }

    public function CadastrarTipoEquipamentoDAO(TipoVO $vo): int //retorna 0 ou 1 (deu certo ou não)
    {
        $sql = $this->conexao->prepare(GerenciarTipoEquipamentoSQL::INSERIR_TIPO_EQUIPAMENTO());
        $sql->bindValue(1, $vo->getNome());

        try {
            $sql->execute();
            return 1;
        } catch (\Exception $ex) {
            //Usando aqui a "\" antes do "Exception" para usar a função nativa do PHP, sem precisar do use
            $vo->setMsgErro($ex->getMessage());
            parent::GravarErroLog($vo);
            return -1;
        }
    }

    public function ConsultarTipoEquipamentoDAO(string $nome = ''): array
    {
        $sql = $this->conexao->prepare(GerenciarTipoEquipamentoSQL::CONSULTAR_TIPO_EQUIPAMENTO($nome));
        if (!empty($nome))
            $sql->bindValue(1, '%' . $nome . '%');

        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function AlterarTipoEquipamentoDAO(TipoVO $vo): int
    {
        $sql = $this->conexao->prepare(GerenciarTipoEquipamentoSQL::ALTERAR_TIPO_EQUIPAMENTO());
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

    public function ExcluirTipoEquipamentoDAO(TipoVO $vo): int
    {
        $sql = $this->conexao->prepare(GerenciarTipoEquipamentoSQL::EXCLUIR_TIPO_EQUIPAMENTO());
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

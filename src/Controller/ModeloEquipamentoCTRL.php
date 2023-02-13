<?php

namespace Src\Controller;

use Src\Model\ModeloEquipamentoDAO;
use Src\VO\ModeloVO;

class ModeloEquipamentoCTRL
{
    private $dao;

    public function __construct()
    {
        $this->dao = new ModeloEquipamentoDAO;
    }

    public function CadastrarModeloEquipamentoCTRL(ModeloVO $vo)
    {
        if (empty($vo->getNome()))
            return 0;

        $vo->setFuncaoErro(CADASTRAR_MODELO);

        return $this->dao->CadastrarModeloEquipamentoDAO($vo);
    }

    public function ConsultarModeloEquipamentoCTRL(string $nome = ''): array
    {
        return $this->dao->ConsultarModeloEquipamentoDAO($nome);
    }

    public function AlterarModeloEquipamentoCTRL(ModeloVO $vo)
    {
        if (empty($vo->getNome()))
            return 0;

        $vo->setFuncaoErro(ALTERAR_MODELO);

        return $this->dao->AlterarModeloEquipamentoDAO($vo);
    }

    public function ExcluirModeloEquipamentoCTRL(ModeloVO $vo)
    {
        if (empty($vo->getId()))
            return 0;

        $vo->setFuncaoErro(EXCLUIR_MODELO);

        return $this->dao->ExcluirModeloEquipamentoDAO($vo);
    }
}

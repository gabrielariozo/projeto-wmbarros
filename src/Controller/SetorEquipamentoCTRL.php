<?php

namespace Src\Controller;

use Src\Model\SetorEquipamentoDAO;
use Src\VO\SetorVO;

class SetorEquipamentoCTRL
{
    private $dao;

    public function __construct()
    {
        $this->dao = new SetorEquipamentoDAO;
    }

    public function CadastrarSetorEquipamentoCTRL(SetorVO $vo)
    {
        if (empty($vo->getNome()))
            return 0;

        $vo->setFuncaoErro(CADASTRAR_SETOR);

        return $this->dao->CadastrarSetorEquipamentoDAO($vo);
    }

    public function ConsultarSetorEquipamentoCTRL(string $nome = ''): array
    {
        return $this->dao->ConsultarSetorEquipamentoDAO($nome);
    }

    public function AlterarSetorEquipamentoCTRL(SetorVO $vo)
    {
        if (empty($vo->getNome()))
            return 0;

        $vo->setFuncaoErro(ALTERAR_SETOR);

        return $this->dao->AlterarSetorEquipamentoDAO($vo);
    }

    public function ExcluirSetorEquipamentoCTRL(SetorVO $vo)
    {
        if (empty($vo->getId()))
            return 0;

        $vo->setFuncaoErro(EXCLUIR_SETOR);

        return $this->dao->ExcluirSetorEquipamentoDAO($vo);
    }
}

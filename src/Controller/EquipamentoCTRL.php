<?php

namespace Src\Controller;

use Src\VO\EquipamentoVO;
use Src\Model\EquipamentoDAO;

class EquipamentoCTRL
{
    private $dao;

    public function __construct()
    {
        $this->dao = new EquipamentoDAO;
    }

    //Servirá tanto para inserir quanto para alterar
    public function CadastrarEquipamentoCTRL(EquipamentoVO $vo)
    {
        if (empty($vo->getIdTipo()) || empty($vo->getIdModelo()) || empty($vo->getIdentificacao()) || empty($vo->getDescricao()))
            return 0;

        $vo->setFuncaoErro(CADASTRAR_EQUIPAMENTO);

        return $this->dao->CadastrarEquipamentoDAO($vo);
    }

    public function AlterarEquipamentoCTRL(EquipamentoVO $vo)
    {
        if (empty($vo->getIdTipo()) || empty($vo->getIdModelo()) || empty($vo->getIdentificacao()) || empty($vo->getDescricao()))
            return 0;

        $vo->setFuncaoErro(ALTERAR_EQUIPAMENTO);

        return $this->dao->AlterarEquipamentoDAO($vo);
    }

    public function ExcluirEquipamentoCTRL(EquipamentoVO $vo)
    {
        if (empty($vo->getIdTipo()) || empty($vo->getIdModelo()) || empty($vo->getIdentificacao()) || empty($vo->getDescricao()))
            return 0;

        $vo->setFuncaoErro(EXCLUIR_EQUIPAMENTO);

        return $this->dao->ExcluirEquipamentoDAO($vo);
    }

    public function DetalharEquipamentoCTRL($id_equip)
    {
        return $this->dao->DetalharEquipamentoDAO($id_equip);
    }

    public function ConsultarEquipamentoCTRL(string $filtro_tipo = '', string $filtro_modelo = '', string $filtro_id = '')
    {
        return $this->dao->ConsultarEquipamentoDAO($filtro_tipo, $filtro_modelo, $filtro_id);
    }
}

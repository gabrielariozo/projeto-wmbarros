<?php

namespace Src\Controller;

use Src\Model\TipoEquipamentoDAO;
use Src\VO\TipoVO;

class TipoEquipamentoCTRL
{
    private $dao;

    public function __construct()
    {
        //Cria o objeto e já executa o construtor, tanto da CTRL quanto da DAO
        $this->dao = new TipoEquipamentoDAO;
    }

    public function CadastrarTipoEquipamentoCTRL(TipoVO $vo)
    {
        //validação das propriedades obrigatórias
        if (empty($vo->getNome()))
            return 0;
        //return 0 já aborta a operação

        //Setar as propriedades do LogErro
        $vo->setFuncaoErro(CADASTRAR_TIPO);

        //Recebe a $vo da dataview
        return $this->dao->CadastrarTipoEquipamentoDAO($vo);
    }

    public function ConsultarTipoEquipamentoCTRL(string $nome = ''): array
    {
        return $this->dao->ConsultarTipoEquipamentoDAO($nome);
    }

    public function AlterarTipoEquipamentoCTRL(TipoVO $vo)
    {
        if (empty($vo->getNome()))
            return 0;

        $vo->setFuncaoErro(ALTERAR_TIPO);

        return $this->dao->AlterarTipoEquipamentoDAO($vo);
    }

    public function ExcluirTipoEquipamentoCTRL(TipoVO $vo)
    {
        if (empty($vo->getId()))
            return 0;

        $vo->setFuncaoErro(EXCLUIR_TIPO);

        return $this->dao->ExcluirTipoEquipamentoDAO($vo);
    }
}
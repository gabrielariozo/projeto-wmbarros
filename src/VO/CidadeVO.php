<?php

namespace Src\VO;

use Src\_public\Util;

class CidadeVO
{
    private $id;
    private $nome;
    private $id_estado;

    public function setId($id) : void
    {
        $this->id = $id;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setNome($nome) : void
    {
        //É necessário tratar os dados ou virá do Busca CEP?
        $this->nome = Util::TratarDadosGeral($nome);
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setIdEstado($id_estado) : void
    {
        $this->id_estado = $id_estado;
    }

    public function getIdEstado() : int
    {
        return $this->id_estado;
    }
}
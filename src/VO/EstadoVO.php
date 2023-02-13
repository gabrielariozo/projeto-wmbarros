<?php

namespace Src\VO;

//Não utilizei o Util por não ter a necessidade de corrigir dados que vem direto do Busca CEP
use Src\_public\Util;

class EstadoVO
{
    private $id;
    private $nome;
    private $sigla;

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
        $this->nome = $nome;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setSigla($sigla) : void
    {
        $this->sigla = $sigla;
    }

    public function getSigla() : string
    {
        return $this->sigla;
    }
}

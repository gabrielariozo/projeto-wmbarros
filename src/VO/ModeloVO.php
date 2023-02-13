<?php

namespace Src\VO;

use Src\_public\Util;

class ModeloVO extends LogErroVO
{

    private $id;
    private $nome;

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setNome($nome): void
    {
        $this->nome = Util::TratarDadosDeixandoEspaco($nome);
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}

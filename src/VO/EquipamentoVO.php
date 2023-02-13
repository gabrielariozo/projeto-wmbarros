<?php

namespace Src\VO;

use Src\_public\Util;

class EquipamentoVO extends LogErroVO
{
    private $id;
    private $identificacao;
    private $descricao;
    private $id_modelo;
    private $id_tipo;

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setIdentificacao($identificacao): void
    {
        $this->identificacao = Util::RemoverTags($identificacao);
    }

    public function getIdentificacao(): string
    {
        return $this->identificacao;
    }

    public function setDescricao($descricao): void
    {
        $this->descricao = Util::RemoverTags($descricao);
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setIdModelo($id_modelo): void
    {
        $this->id_modelo = $id_modelo;
    }

    public function getIdModelo(): int
    {
        return $this->id_modelo;
    }

    public function setIdTipo($id_tipo): void
    {
        $this->id_tipo = $id_tipo;
    }

    public function getIdTipo(): int
    {
        return $this->id_tipo;
    }
}

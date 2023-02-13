<?php

namespace Src\VO;

use Src\_public\Util;

class AlocarVO
{
    private $id;
    private $situacao;
    private $id_equipamento;
    private $id_setor;

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getDataAlocar(): string
    {
        return Util::DataHoraAtual();
    }

    public function getDataRemover(): string
    {
        return Util::DataHoraAtual();
    }

    public function setSituacao($situacao): void
    {
        $this->situacao = $situacao;
    }

    public function getSituacao(): int
    {
        return $this->situacao;
    }

    public function setIdEquipamento($id_equipamento): void
    {
        $this->id_equipamento = $id_equipamento;
    }

    public function getIdEquipamento(): int
    {
        return $this->id_equipamento;
    }

    public function setIdSetor($id_setor): void
    {
        $this->id_setor = $id_setor;
    }

    public function getIdSetor(): int
    {
        return $this->id_setor;
    }
}

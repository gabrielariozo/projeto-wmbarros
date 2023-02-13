<?php

namespace Src\VO;

use Src\_public\Util;

class EnderecoVO
{
    private $id;
    private $rua;
    private $bairro;
    private $cep;
    private $complemento;
    private $id_cidade;
    private $id_usuario;

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setRua($rua): void
    {
        $this->rua = Util::TratarDadosGeral($rua);
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function setBairro($bairro): void
    {
        $this->bairro = Util::TratarDadosGeral($bairro);
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function setCEP($cep): void
    {
        $this->cep = Util::RemoverTags($cep);
    }

    public function getCEP(): string
    {
        return $this->cep;
    }

    public function setComplemento($complemento): void
    {
        $this->complemento = Util::TratarDadosGeral($complemento);
    }

    public function getComplemento(): string
    {
        return $this->complemento;
    }

    public function setIdCidade($id_cidade): void
    {
        $this->id_cidade = $id_cidade;
    }

    public function getIdCidade(): int
    {
        return $this->id_cidade;
    }

    public function setIdUsuario($id_usuario): void
    {
        $this->id_usuario = $id_usuario;
    }

    public function getIdUsuario(): int
    {
        return $this->id_usuario;
    }
}

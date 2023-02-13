<?php

namespace Src\VO;

use Src\_public\Util;

class ChamadoVO
{
    private $id;
    private $problema;
    private $laudo;
    private $id_alocar;
    private $id_funcionario;
    private $tecnico_atendimento;
    private $tecnico_encerramento;

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setProblema($problema): void
    {
        $this->problema = Util::RemoverTags($problema);
    }

    public function getProblema(): string
    {
        return $this->problema;
    }

    public function getDataAbertura(): string
    {
        return Util::DataAtual();
    }

    public function getHoraAbertura(): string
    {
        return Util::HoraAtual();
    }

    public function getDataAtendimento(): string
    {
        return Util::DataAtual();
    }

    public function getHoraAtendimento(): string
    {
        return Util::HoraAtual();
    }

    public function getDataEncerramento(): string
    {
        return Util::DataAtual();
    }

    public function getHoraEncerramento(): string
    {
        return Util::HoraAtual();
    }

    public function setLaudo($laudo): void
    {
        $this->laudo = Util::RemoverTags($laudo);
    }

    public function getLaudo(): string
    {
        return $this->laudo;
    }

    public function setIdAlocar($id_alocar): void
    {
        $this->id_alocar = $id_alocar;
    }

    public function getIdAlocar(): int
    {
        return $this->id_alocar;
    }

    public function setIdFuncionario($id_funcionario): void
    {
        $this->id_funcionario = $id_funcionario;
    }

    public function getIdFuncionario(): int
    {
        return $this->id_funcionario;
    }

    public function setTecnicoAtendimento($tecnico_atendimento): void
    {
        $this->tecnico_atendimento = $tecnico_atendimento;
    }

    public function getTecnicoAtendimento(): int
    {
        return $this->tecnico_atendimento;
    }

    public function setTecnicoEncerramento($tecnico_encerramento): void
    {
        $this->tecnico_encerramento = $tecnico_encerramento;
    }

    public function getTecnicoEncerramento(): int
    {
        return $this->tecnico_encerramento;
    }
}

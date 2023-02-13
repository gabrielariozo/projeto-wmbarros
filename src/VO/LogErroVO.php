<?php

namespace Src\VO;

use Src\_public\Util;

class LogErroVO
{
    private $msg_erro;
    private $funcao_erro;

    public function getCodigoLogado(): int
    {
        return  Util::CodigoLogado();
    }

    public function setMsgErro(string $m): void
    {
        $this->msg_erro = $m;
    }

    public function getMsgErro(): string
    {
        return  $this->msg_erro;
    }

    public function setFuncaoErro(string $f): void
    {
        $this->funcao_erro = $f;
    }

    public function getFuncaoErro(): string
    {
        return  $this->funcao_erro;
    }

    public function getDataAtual(): string
    {
        return Util::DataAtualBR();
    }

    public function getHoraAtual(): string
    {
        return Util::HoraAtual();
    }
}

<?php

namespace Src\VO;

use Src\_public\Util;

class LogVO
{

    private $id;
    private $ip;
    private $id_usuario;

    public function SetId($id): void
    {
        $this->id = $id;
    }
    public function GetId(): int
    {
        return $this->id;
    }

    //Data requer somente GET, pois já temos uma função de ler a data atual
    public function GetData(): string
    {
        return Util::DataAtual();
    }

    public function SetIp($ip): void
    {
        $this->ip = $ip;
    }

    public function GetIp(): string
    {
        return $this->ip;
    }

    public function SetIdUsuario($id_usuario): void
    {
        $this->id_usuario = $id_usuario;
    }

    public function GetIdUsuario(): int
    {
        return $this->id_usuario;
    }
}

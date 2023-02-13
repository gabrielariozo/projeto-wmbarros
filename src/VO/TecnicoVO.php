<?php

namespace Src\VO;

use Src\_public\Util;
use Src\VO\UsuarioVO;

//Herança da tb_usuario pois a primary key vem de lá
class TecnicoVO extends UsuarioVO{

    private $nome_empresa;

    public function setNomeEmpresa($nome_empresa): void
    {
        $this->nome_empresa = Util::RemoverTags($nome_empresa);
    }
    public function getNomeEmpresa(): string 
    {
        return $this->nome_empresa;
    }
}
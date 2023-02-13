<?php

namespace Src\VO;

use Src\VO\UsuarioVO;

//Herança da tb_usuario pois a primary key vem de lá
class FuncionarioVO extends UsuarioVO
{
    private $id_setor;

    public function setIdSetor($id_setor): void
    {
        $this->id_setor = $id_setor;
    }
    public function getIdSetor(): int
    {
        return $this->id_setor;
    }
}

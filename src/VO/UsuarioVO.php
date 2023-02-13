<?php

//definindo o caminho para usar a função "use Src\VO\..." ao invés de require-once
namespace Src\VO;

use Src\_public\Util;

class UsuarioVO
{
    private $id;
    private $tipo;
    private $nome;
    private $email;
    private $telefone;
    private $senha;
    private $status;

    //GET e SET ID
    //Parâmetro não precisa ser o mesmo nome da propriedade, o "this" precisa
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId(): int //tipando o que a função recebe
    {
        return $this->id;
    }

    //GET e SET TIPO
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo(): int
    {
        return $this->tipo;
    }

    //GET e SET NOME
    public function setNome($nome)
    {
        $this->nome = Util::TratarDadosGeral($nome);
    }
    public function getNome(): string
    {
        return $this->nome;
    }

    //GET e SET EMAIL
    public function setEmail($email): void //"void" é vazio, ou seja, não retorna nada
    {
        $this->email = Util::RemoverTags($email);
    }
    public function getEmail(): string
    {
        return $this->email;
    }

    //GET e SET TELEFONE
    public function setTelefone($telefone): void
    {
        $this->telefone = Util::TirarCaracteresEspeciais($telefone);
    }
    public function getTelefone(): string
    {
        return $this->telefone;
    }

    //GET e SET SENHA
    public function setSenha($senha): void
    {
        $this->senha = Util::RemoverTags($senha);
    }
    public function getSenha(): string
    {
        return $this->senha;
    }

    //GET e SET STATUS
    public function setStatus($status): void
    {
        $this->status = $status;
    }
    public function getStatus(): int
    {
        return $this->status;
    }
}

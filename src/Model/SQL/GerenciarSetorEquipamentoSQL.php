<?php

namespace Src\Model\SQL;

class GerenciarSetorEquipamentoSQL
{
    public static function INSERIR_SETOR_EQUIPAMENTO(): string
    {
        $sql = 'INSERT INTO tb_setor (nome) VALUES (?)';
        return $sql;
    }

    public static function CONSULTAR_SETOR_EQUIPAMENTO($nome): string
    {
        $sql = 'SELECT id, nome
                FROM tb_setor';

        if (!empty($nome))
            $sql .= ' WHERE nome LIKE ?';

        $sql .= ' ORDER BY nome';

        return $sql;
    }

    public static function ALTERAR_SETOR_EQUIPAMENTO(): string
    {
        $sql = 'UPDATE tb_setor
                SET nome = ?
                WHERE id = ?';
        return $sql;
    }

    public static function EXCLUIR_SETOR_EQUIPAMENTO(): string
    {
        $sql = 'DELETE FROM tb_setor
                WHERE id = ?';
        return $sql;
    }
}

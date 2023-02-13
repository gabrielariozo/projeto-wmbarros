<?php

namespace Src\Model\SQL;

class GerenciarEquipamentoSQL
{
    public static function INSERIR_EQUIPAMENTO(): string
    {
        $sql = 'INSERT INTO tb_equipamento (identificacao, descricao, modelo_id, tipo_id)
                VALUES (?, ?, ?, ?)';
        return $sql;
    }

    public static function ALTERAR_EQUIPAMENTO(): string
    {
        $sql = 'UPDATE tb_equipamento
                   SET identificacao = ?,
                       descricao = ?,
                       modelo_id = ?,
                       tipo_id = ?
                WHERE  id = ?';
        return $sql;
    }

    public static function EXCLUIR_EQUIPAMENTO(): string
    {
        $sql = 'DELETE FROM tb_equipamento
                      WHERE id = ?';
        return $sql;
    }

    public static function CONSULTAR_EQUIPAMENTO($nome): string
    {
        $sql = 'SELECT  eq.id,
                        eq.identificacao,
                        eq.descricao,
                        mo.nome as modelo,
                        tp.nome as tipo
                FROM    tb_equipamento as eq
                -- Relação entre equipamento e tipo
             INNER JOIN tb_modelo as mo 
                     ON eq.modelo_id = mo.id
                    -- Informação de uma tabela equivalente a outra
             INNER JOIN tb_tipo as tp
                     ON eq.tipo_id = tp.id';

        if (!empty($nome))
            $sql .= ' WHERE eq.identificacao LIKE ?';

        $sql .= ' ORDER BY eq.identificacao';

        return $sql;
    }
}

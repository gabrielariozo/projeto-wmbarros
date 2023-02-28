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

    public static function DETALHAR_EQUIPAMENTO(): string
    {
        $sql = 'SELECT  eq.identificacao,
                        eq.descricao,
                        mo.nome as modelo,
                        tp.nome as tipo
                  FROM  tb_equipamento as eq
                -- Relação entre equipamento e tipo
            INNER JOIN  tb_modelo as mo 
                    ON  eq.modelo_id = mo.id
                    -- Informação de uma tabela equivalente a outra
            INNER JOIN  tb_tipo as tp
                    ON  eq.tipo_id = tp.id
                 WHERE  eq.id = ?';
        return $sql;
    }

    public static function CONSULTAR_EQUIPAMENTO($filtro_tipo, $filtro_modelo, $filtro_id): string
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

        //Uma combinação de pesquisa somente

        if (!empty($filtro_tipo) && empty($filtro_modelo) && empty($filtro_id))
            $sql .= ' WHERE tp.nome LIKE ?';

        if (!empty($filtro_modelo) && empty($filtro_tipo) && empty($filtro_id))
            $sql .= ' WHERE mo.nome LIKE ?';

        if (!empty($filtro_id) && empty($filtro_tipo) && empty($filtro_modelo))
            $sql .= ' WHERE eq.identificacao LIKE ?';


        //Checando todas as possibilidades de duas combinações somente

        //Tipo primeiro e modelo depois
        if (!empty($filtro_tipo) && !empty($filtro_modelo) && empty($filtro_id))
            $sql .= ' WHERE tp.nome LIKE ? AND mo.nome LIKE ?';

        //Tipo primeiro e identificação depois
        //if (!empty($filtro_tipo) && !empty($filtro_id))
        //$sql .= ' WHERE tp.nome LIKE ? AND eq.identificacao LIKE ?';

        //Modelo primeiro e tipo depois
        //if (!empty($filtro_modelo) && !empty($filtro_tipo))
        //$sql .= ' WHERE mo.nome LIKE ? AND tp.nome LIKE ?';

        //Modelo primeiro e identificação depois
        //if (!empty($filtro_modelo) && !empty($filtro_id))
        //$sql .= ' WHERE mo.nome LIKE ? AND eq.identificacao LIKE ?';

        //Identificação primeiro e tipo depois
        //if (!empty($filtro_modelo) && !empty($filtro_id))
        //$sql .= ' WHERE eq.identificacao LIKE ? AND tp.nome LIKE ?';

        //Identificação primeiro e modelo depois
        //if (!empty($filtro_modelo) && !empty($filtro_id))
        //$sql .= ' WHERE eq.identificacao LIKE ? AND mo.nome LIKE ?';

        //Agora a possibilidade de combinações com três

        $sql .= ' ORDER BY eq.identificacao';

        return $sql;
    }
}

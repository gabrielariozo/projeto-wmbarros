<?php

use Src\Controller\ModeloEquipamentoCTRL;
use Src\VO\ModeloVO;

require_once '_include_autoload.php';

$ctrl = new ModeloEquipamentoCTRL;

if (isset($_POST['btn_cadastrar'])) {

    $vo = new ModeloVO;
    $vo->setNome($_POST['nome_modelo']);

    $ret = $ctrl->CadastrarModeloEquipamentoCTRL($vo);

    if ($_POST['btn_cadastrar'] == 'ajx')
        echo $ret;
} else if (isset($_POST['btn_alterar'])) {

    $vo = new ModeloVO;
    $vo->setNome($_POST['nome_modelo_alt']);
    $vo->setId($_POST['id_alt']);

    $ret = $ctrl->AlterarModeloEquipamentoCTRL($vo);

    if ($_POST['btn_alterar'] == 'ajx')
        echo $ret;
} else if (isset($_POST['btn_excluir'])) {

    $vo = new ModeloVO;
    $vo->setId($_POST['id_exc']);

    $ret = $ctrl->ExcluirModeloEquipamentoCTRL($vo);

    if ($_POST['btn_excluir'] == 'ajx')
        echo $ret;
} else if (isset($_POST['consultar_ajx']) && $_POST['consultar_ajx'] == 'ajx') {

    $modelos = $ctrl->ConsultarModeloEquipamentoCTRL($_POST['nome_pesquisa']); ?>

    <table class="table table-hover" id="tableResult">
        <thead>
            <tr>
                <th>Nome do Modelo</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($modelos as $item) { ?>
                <tr>
                    <td><?= $item['nome'] ?></td>
                    <td>
                        <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-alterar-modelo" onclick="CarregarModalAlterarModeloEquipamento('<?= $item['id'] ?>','<?= $item['nome'] ?>')">Alterar</button>
                        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-excluir" onclick="CarregarModalExcluir('<?= $item['id'] ?>','<?= $item['nome'] ?>')">Excluir</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>
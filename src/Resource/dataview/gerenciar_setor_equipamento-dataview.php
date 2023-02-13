<?php

use Src\Controller\SetorEquipamentoCTRL;
use Src\VO\SetorVO;

require_once '_include_autoload.php';

$ctrl = new SetorEquipamentoCTRL;

if (isset($_POST['btn_cadastrar'])) {

    $vo = new SetorVO;
    $vo->setNome($_POST['nome_setor']);

    $ret = $ctrl->CadastrarSetorEquipamentoCTRL($vo);

    if ($_POST['btn_cadastrar'] == 'ajx')
        echo $ret;
} else if (isset($_POST['btn_alterar'])) {

    $vo = new SetorVO;
    $vo->setNome($_POST['nome_setor_alt']);
    $vo->setId($_POST['id_alt']);

    $ret = $ctrl->AlterarSetorEquipamentoCTRL($vo);

    if ($_POST['btn_alterar'] == 'ajx')
        echo $ret;
} else if (isset($_POST['btn_excluir'])) {

    $vo = new SetorVO;
    $vo->setId($_POST['id_exc']);

    $ret = $ctrl->ExcluirSetorEquipamentoCTRL($vo);

    if ($_POST['btn_excluir'] == 'ajx')
        echo $ret;
} else if (isset($_POST['consultar_ajx']) && $_POST['consultar_ajx'] == 'ajx') {

    $setores = $ctrl->ConsultarSetorEquipamentoCTRL($_POST['nome_pesquisa']); ?>

    <table class="table table-hover" id="tableResult">
        <thead>
            <tr>
                <th>Nome do Setor</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($setores as $item) { ?>
                <tr>
                    <td><?= $item['nome'] ?></td>
                    <td>
                        <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-alterar-setor" onclick="CarregarModalAlterarSetorEquipamento('<?= $item['id'] ?>','<?= $item['nome'] ?>')">Alterar</button>
                        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-excluir" onclick="CarregarModalExcluir('<?= $item['id'] ?>','<?= $item['nome'] ?>')">Excluir</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>
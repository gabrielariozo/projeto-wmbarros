<?php
require_once '_include_autoload.php';

use Src\Controller\TipoEquipamentoCTRL;
use Src\VO\TipoVO;

$ctrl = new TipoEquipamentoCTRL();

if (isset($_POST['btn_cadastrar'])) {
    //Cria o objeto da tela
    $vo = new TipoVO();
    //Usa os sets das propriedades de acordo aos campos preenchidos
    $vo->setNome($_POST['nome_tipo']);
    //Aqui se declara o $ret, que vai ser lido na página para retornar a mensagem pro usuário
    $ret = $ctrl->CadastrarTipoEquipamentoCTRL($vo);

    if ($_POST['btn_cadastrar'] == 'ajx')
        echo $ret;
} else if (isset($_POST['btn_alterar'])) {

    $vo = new TipoVO();

    $vo->setNome($_POST['nome_tipo_alt']);
    $vo->setId($_POST['id_alt']);

    $ret = $ctrl->AlterarTipoEquipamentoCTRL($vo);

    if ($_POST['btn_alterar'] == 'ajx')
        echo $ret;
} else if (isset($_POST['btn_excluir'])) {

    $vo = new TipoVO();

    $vo->setId($_POST['id_exc']);

    $ret = $ctrl->ExcluirTipoEquipamentoCTRL($vo);

    if ($_POST['btn_excluir'] == 'ajx')
        echo $ret;
} else if (isset($_POST['consultar_ajx']) && $_POST['consultar_ajx'] == 'ajx') {
    $tipos = $ctrl->ConsultarTipoEquipamentoCTRL($_POST['nome_pesquisa']); ?>

    <table class="table table-hover" id="tableResult">
        <thead>
            <tr>
                <th>Tipo de equipamento</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($tipos as $item) {
            ?>
                <tr>
                    <td><?= $item['nome'] ?></td>
                    <td>
                        <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-alterar-tipo" onclick="CarregarModalAlterarTipoEquipamento('<?= $item['id'] ?>','<?= $item['nome'] ?>')">Alterar</button>
                        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-excluir" onclick="CarregarModalExcluir('<?= $item['id'] ?>','<?= $item['nome'] ?>')">Excluir</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>
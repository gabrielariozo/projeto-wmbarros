<?php

use Src\Controller\EquipamentoCTRL;
use Src\Controller\ModeloEquipamentoCTRL;
use Src\Controller\TipoEquipamentoCTRL;
use Src\VO\EquipamentoVO;

require_once '_include_autoload.php';

$ctrl_modelo = new ModeloEquipamentoCTRL;
$ctrl_tipo = new TipoEquipamentoCTRL;

$modelos = $ctrl_modelo->ConsultarModeloEquipamentoCTRL();
$tipos = $ctrl_tipo->ConsultarTipoEquipamentoCTRL();

$acao = 'Cadastrar';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $acao = 'Alterar';
}

$ctrl = new EquipamentoCTRL;

if (isset($_POST['btn_cadastrar'])) {
    //Cria os objetos que serão utilizados
    $vo = new EquipamentoVO;

    //Seta as propriedades do objeto de acordo com as informações da tela
    $vo->setIdTipo($_POST['tipo']);
    $vo->setIdModelo($_POST['modelo']);
    $vo->setIdentificacao($_POST['identificacao']);
    $vo->setDescricao($_POST['descricao_equipamento']);

    //Chama a função da camada a frente (Controller)
    $ret = $ctrl->CadastrarEquipamentoCTRL($vo);

    if ($_POST['btn_cadastrar'] == 'ajx')
        echo $ret;
} else if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id_equip = $_GET['id'];
    $dados = $ctrl->DetalharEquipamentoCTRL($id_equip);

} else if (isset($_POST['consultar_ajx']) && $_POST['consultar_ajx'] == 'ajx') {

    $ctrl_equipamento = new EquipamentoCTRL;

    $equipamentos = $ctrl_equipamento->ConsultarEquipamentoCTRL($_POST['filtro_tipo'], $_POST['filtro_modelo'], $_POST['filtro_id']); ?>

    <table class="table table-hover" id="tableResult">
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Identificação</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipamentos as $item) { ?>
                <tr>
                    <td>
                        <?= $item['tipo'] ?>
                    </td>
                    <td>
                        <?= $item['modelo'] ?>
                    </td>
                    <td>
                        <?= $item['identificacao'] ?>
                    </td>
                    <td>
                        <?= $item['descricao'] ?>
                    </td>
                    <td>
                        <a href="equipamento.php?id=<?= $item['id'] ?>" class="btn btn-warning btn-xs">Alterar</a>
                        <a href="#" class="btn btn-danger btn-xs">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>
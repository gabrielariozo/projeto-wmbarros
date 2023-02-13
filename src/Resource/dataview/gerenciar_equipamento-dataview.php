<?php

use Src\Controller\EquipamentoCTRL;
use Src\Controller\ModeloEquipamentoCTRL;
use Src\Controller\TipoEquipamentoCTRL;
use Src\VO\EquipamentoVO;

require_once '_include_autoload.php';

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
}

$tipos = (new TipoEquipamentoCTRL)->ConsultarTipoEquipamentoCTRL();
$modelos = (new ModeloEquipamentoCTRL)->ConsultarModeloEquipamentoCTRL();

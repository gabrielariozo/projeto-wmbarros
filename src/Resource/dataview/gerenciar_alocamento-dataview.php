<?php
require_once '_include_autoload.php';

use Src\Controller\AlocarEquipamentoCTRL;
use Src\VO\AlocarVO;

$ctrl = new AlocarEquipamentoCTRL;

if(isset($_POST['btn_alocar'])){

    $vo = new AlocarVO;

    $vo->setIdEquipamento($_POST['equipamento']);
    //Um para cada set
    $vo->setIdSetor($_POST['setor']);

    $ret = $ctrl->AlocarCTRL($vo);

}
<?php

require_once dirname(__DIR__, 2) . '/Resource/dataview/gerenciar_equipamento-dataview.php';

?>

<!DOCTYPE html>
<html>

<head>
    <?php
    include_once PATH_URL . 'Template/_includes/_head.php';
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php
        include_once PATH_URL . '/Template/_includes/_topo.php';
        include_once PATH_URL . '/Template/_includes/_menu.php';
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?= $acao ?> Equipamento</h1>
                            <h3 class="card-title">Aqui você poderá <?= $acao ?> seus equipamentos</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-body">

                        <form id="form_cad" action="equipamento.php" method="post">
                            <div class="form-group">

                                <label>Tipo</label>
                                <select class="form-control select2 obg" name="tipo" id="tipo">

                                    <option value="">Selecione</option>
                                    <?php foreach ($tipos as $item) { ?>
                                        <option value="<?= $item['id'] ?>" <?= !isset($id_equip) ? '' : ($dados[0]['tipo'] == $item['nome'] ? 'selected' : '')?>>
                                            <?= $item['nome'] ?>
                                        </option>
                                    <?php } ?>

                                </select>
                                <label>Modelo</label>
                                <select class="form-control obg" name="modelo" id="modelo">

                                <option value="">Selecione</option>

                                    <?php foreach ($modelos as $item) { ?>
                                        <option value="<?= $item['id'] ?>" <?= !isset($id_equip) ? '' : ($dados[0]['modelo'] == $item['nome'] ? 'selected' : '')?>>
                                            <?= $item['nome'] ?>
                                        </option>
                                    <?php } ?>

                                </select>
                                <label>Identificação</label>
                                <input type="text" class="form-control obg" placeholder="<?= isset($id_equip) ? $dados[0]['identificacao'] : 'Digite aqui...' ?>" name="identificacao" id="identificacao">
                                <label>Descrição</label> <br>
                                <textarea style="resize:none;" class="form-control obg" name="descricao_equipamento" id="descricao_equipamento" cols="30" rows="10" placeholder="<?= isset($dados) ? $dados[0]['descricao'] : 'Digite aqui...' ?>"></textarea>
                            </div>
                            <button class="btn btn-success" name="btn_cadastrar" onclick="return CadastrarEquipamento('form_cad')"><?= $acao ?></button>
                        </form>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php
        include_once PATH_URL . 'Template/_includes/_footer.php';
        ?>

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php
    include_once PATH_URL . 'Template/_includes/_scripts.php';
    include_once PATH_URL . 'Template/_includes/_msg.php';
    ?>
    <script src="../../Resource/ajax/equipamento-ajx.js"></script>
    <script>
        CadastrarEquipamento()
    </script>

</body>

</html>
<?php

require_once dirname(__DIR__, 3) . '\vendor\autoload.php';

use Src\Controller\EquipamentoCTRL;

$ctrl_equipamento = new EquipamentoCTRL;
$equipamentos = $ctrl_equipamento->ConsultarEquipamentoCTRL();
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
                            <h1>Consultar equipamento</h1>
                            <h3 class="card-title">Aqui você faz a consulta dos seus equipamentos</h3>
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

                        <form action="tipo_equipamento.php" method="post">
                            <div class="form-group">
                                <label>Pesquisar por Descrição</label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." onkeyup="ConsultarEquipamento()" id="nome_pesquisa" name="nome_pesquisa">
                            </div>
                            <button class="btn btn-outline-primary" onclick="ConsultarEquipamento()" name="btn_buscar">Buscar</button>
                        </form>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Equipamentos Cadastrados</h3>

                                    <div class="card-tools">
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
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
                                                        <?= $item['descricao']?>
                                                    </td>
                                                    <td>
                                                        <a href="equipamento.php?id=<?= $item['id'] ?>" class="btn btn-warning btn-xs">Alterar</a>
                                                        <a href="#" class="btn btn-danger btn-xs">Excluir</a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
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
</body>

</html>
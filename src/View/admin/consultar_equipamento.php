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

                        <form action="consultar_equipamento.php" method="post">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Filtrar pelo Tipo</label>
                                    <select class="form-control select2 obg" onchange="ConsultarEquipamento()" name="filtro_tipo" id="filtro_tipo">

                                        <option value="">- SEM FILTRO -</option>
                                        <?php foreach ($tipos as $item) { ?>
                                            <option value="<?= $item['nome'] ?>">
                                                <?= $item['nome'] ?>
                                            </option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Filtrar pelo Modelo</label>
                                    <select class="form-control obg" onchange="ConsultarEquipamento()" name="filtro_modelo" id="filtro_modelo">

                                        <option value="">- SEM FILTRO -</option>
                                        <?php foreach ($modelos as $item) { ?>
                                            <option value="<?= $item['nome'] ?>">
                                                <?= $item['nome'] ?>
                                            </option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <hr>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Equipamentos Cadastrados</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" onkeyup="ConsultarEquipamento()" id="filtro_id" name="filtro_id" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" onclick="ConsultarEquipamento()" class="btn btn-default"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" id="tableResult">
                                        <table class="table table-hover">

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
    <script src="../../Resource/ajax/equipamento-ajx.js"></script>
    <script>
        ConsultarEquipamento()
    </script>

</body>

</html>
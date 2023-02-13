<?php
require_once dirname(__DIR__, 3) . '\vendor\autoload.php';
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
                            <h1>Meus chamados</h1>
                            <h3 class="card-title">Consulte todos seus chamados e acompanhe os atendimentos</h3>
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
                                <label>Escolha a situação</label>
                                </select>
                                <select class="form-control" name="tipo">
                                    <option value="0">Todos</option>
                                </select>

                            </div>
                            <button class="btn btn-outline-primary" name="btn_pesquisar">Pesquisar</button>
                        </form>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Resultado encontrado</h3>

                                    <div class="card-tools">
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Data Abertura</th>
                                                <th>Funcionário</th>
                                                <th>Equipamento</th>
                                                <th>Problema</th>
                                                <th>Data Atendimento</th>
                                                <th>Técnico</th>
                                                <th>Data Encerramento</th>
                                                <th>Laudo</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>(Abertura)</td>
                                                <td>(Funcionário)</td>
                                                <td>(Equipamento)</td>
                                                <td>(Problema)</td>
                                                <td>(Atendimento)</td>
                                                <td>(Técnico)</td>
                                                <td>(Encerramento)</td>
                                                <td>(Laudo)</td>
                                                <td>
                                                    <a href="#" class="btn btn-info btn-xs">Ver Mais</a>
                                                </td>

                                            </tr>
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
    ?>
</body>

</html>